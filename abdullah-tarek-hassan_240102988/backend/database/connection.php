


<?php
$host = "127.0.0.1";
$dbname = "health-tracker";
$user = "root";
$password = "2007"; 

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("<p>Database connection failed: " . $e->getMessage() . "</p>");
}
?> 

