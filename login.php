<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: account.php");
    exit;
}

require_once "config.php";

$email = $password = "";
$email_err = $password_err = $login_err = "";
$staff = "/greenfield.com/";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } else {
        $email = trim($_POST["email"]);
    }

    if(empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if(empty($email_err) && empty($password_err) && preg_match($staff, $email)) {
        $sql = "SELECT id, email, password FROM staff WHERE email = :email";

        if($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

            $param_email = trim($_POST["email"]);

            if($stmt->execute()) {
                if($stmt->rowCount() == 1) {
                    if($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $email = $row["email"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)) {
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;

                            header("location: account.php");
                        } else {
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Something went wrong. Please try again later.";
            }
            unset($stmt);
        } 
    } elseif(empty($email_err) && empty($password_err)) {
        $sql = "SELECT id, email, password FROM customers WHERE email = :email";

        if($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

            $param_email = trim($_POST["email"]);

            if($stmt->execute()) {
                if($stmt->rowCount() == 1) {
                    if($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $email = $row["email"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)) {
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;

                            header("location: account.php");
                        } else {
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Something went wrong. Please try again later.";
            }
            unset($stmt);
        }
    }
}
    unset($pdo);

?>

<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <title>Login - GLH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link id="theme" rel="stylesheet" href="defaultstyle.css">
        <style>
            #account {
                text-decoration: underline;
                text-decoration-color: var(--accent);
                text-underline-offset: 1em; 
                text-decoration-thickness: 0.2em;
            }
        </style>
    </head>

    <body class="default-body">
        <?php include("header.php") ?>
        <h1 class="manrope-title">Login</h1>
        <?php
        if(!empty($login_err)) {
            echo $login_err;
        }
        ?>

        <form class="manrope-body" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Email</label>
                <input type="email" name="email" class="<?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span><?php echo $email_err; ?></span>
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" class="<?php echo (!empty($password_err)) ? 'is-invalid' : '' ?>">
                <span><?php echo $password_err;?></span>
            </div>

            <div>
                <input type="submit" value="Login">
            </div>

            <p>New customer? <a href="register.php" style="color: var(--accent)">Click here</a> to sign up</p>

        </form>
        <?php include("footer.php") ?>
    </body>
</html>