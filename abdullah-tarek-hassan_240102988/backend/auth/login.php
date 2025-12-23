<?php
session_start();
require_once '../database/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        die("Please fill all required fields.");
    }

    try {
        $stmt = $pdo->prepare("SELECT user_id, name, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Login success
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            
            header("Location: ../../Frontend/03-Dashboard.html");
            exit();
        } else {
            echo "Invalid email or password. <a href='../../Frontend/02-login.html'>Try again</a>";
        }
    } catch (PDOException $e) {
        die("Login failed: " . $e->getMessage());
    }
}
?>