<?php
$host = 'localhost';
$dbname = 'prox';
$user = 'prox'; // Sesuaikan username
$pass = 'GrKSP62xWjw3YY4W'; // Sesuaikan password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>