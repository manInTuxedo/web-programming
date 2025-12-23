<?php
require_once '../database/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $gender = $_POST['gender'] ?? null; // Handle optional select
    $birthDate = $_POST['birth-date'];

    // Basic validation
    if (empty($name) || empty($email) || empty($password) || empty($birthDate)) {
        die("Please fill all required fields.");
    }

    try {
        // Check if email already exists
        $stmt = $pdo->prepare("SELECT user_id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            die("Email already registered. <a href='../../Frontend/02-login.html'>Login here</a>");
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user
        $sql = "INSERT INTO users (name, email, password, gender, birth_date) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $hashedPassword, $gender, $birthDate]);

        // Redirect to login page on success
        header("Location: ../../Frontend/02-login.html?registered=true");
        exit();

    } catch (PDOException $e) {
        die("Registration failed: " . $e->getMessage());
    }
}
?>
