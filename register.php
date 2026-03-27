<?php
require_once "config.php";

$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email";
    } else {
        $sql = "SELECT id FROM customers WHERE email = :email";

        if($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

            $param_email = trim($_POST["email"]);

            if($stmt->execute()) {
                if($stmt->rowCount() == 1) {
                    $email_err = "This email is already in use.";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Something went wrong. Please try again later.";
            }
            unset($stmt);
        }
    }

    if(empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if(empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm your password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Passwords do not match.";
        }
    }

    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO customers (email, password) VALUES (:email, :password)";

        if($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if($stmt->execute()) {
                header("location: login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
            unset($stmt);
        }
    }
    unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <title>Sign up - GLH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link id="theme" rel="stylesheet" href="defaultstyle.css">
    </head>

    <body class="default-body">
        <?php include("header.php") ?>
        <h1 class="manrope-title">Sign Up</h1>
        <form class="manrope-body" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div>
                <label>Email</label>
                <input type="email" name="email" class="<?php echo (!empty($email_err)) ? 'is-invalid' : '' ?>" value="<?php echo $email; ?>" required placeholder="johndoe@example.com">
                <span><?php echo $email_err; ?></span>
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" class="<?php echo(!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" required placeholder="Enter a strong password">
                <span> <?php echo $password_err; ?></span>
            </div>

            <div>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="<?php echo(!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" required placeholder="Re-enter your password">
                <span><?php echo $confirm_password_err; ?></span>
            </div>

            <div>
                <input type="submit" value="Submit">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
        <?php include("footer.php") ?>
    </body>
</html>