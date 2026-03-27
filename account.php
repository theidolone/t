<?php
session_start();

if (!empty($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}

$host = "127.0.0.1";
$dbName = "osp_db";
$dbUser = "root";
$dbPass = "";

$dsn = "mysql:host=$host;dbname=$dbName;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, $options);
} catch (PDOException $e) {
    die("Database connection failed: " . htmlspecialchars($e->getMessage()));
}

function h($v) {
    return htmlspecialchars($v ?? "", ENT_QUOTES, "UTF-8");
}

$mode = $_POST["mode"] ?? "login";
$email = trim($_POST["name"] ?? "");
$password = $_POST["password"] ?? "";
$feedback = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($mode === "register") {
        if ($email === "" || $password === "") {
            $feedback = "Please fill in your email and password.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $feedback = "Please enter a valid email address.";
        } else {
            $check = $pdo->prepare("SELECT id FROM customers WHERE email = ?");
            $check->execute([$email]);
            if ($check->fetch()) {
                $feedback = "An account with this email already exists.";
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);

                $insert = $pdo->prepare(
                    "INSERT INTO customers (email, password) VALUES (?, ?)"
                );
                $insert->execute([$email, $hash]);

                $feedback = "Registration successful. You may now log in.";
                $mode = "login";
            }
        }
    } else {
        if ($email === "" || $password === "") {
            $feedback = "Please enter both email and password.";
        } else {
            $stmt = $pdo->prepare("SELECT id, password FROM customers WHERE email = ?");
            $stmt->execute(["$email"]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["email"] = $email;

                header("Location: index.php");
                exit;
            } else {
                $feedback = "Invalid email or password.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <title>Account - GLH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="defaultstyle.css">
        <style>
            #home {
                text-decoration-style: underline;
                text-decoration-color: #357266;
                text-underline-offset: 1em;
                text-decoration-thickness: 0.2em;
            }
        </style>
    </head>

    <body class="default-body dark">
        <?php 
        include ("header.php")
        ?>

        <h1 class="manrope-title">Login or create an account</h1>
        <?php if ($feedback): ?>
            <h2 class="mamrope-title"><?php echo h($feedback); ?></h2>
        <?php endif; ?>
        <button type="button" onclick="switchMode('login')"> Login</button>
        <button type="button" onclick="switchMode('register')"> Register</button>

        <?php
        include ("footer.php")
        ?>
    </body>

</html>