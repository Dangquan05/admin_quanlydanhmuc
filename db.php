<?php
$host = 'localhost';
$dbname = 'bd_xuong_thu_cung';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Không thể kết nối đến cơ sở dữ liệu $dbname :" . $e->getMessage());
}
?>
