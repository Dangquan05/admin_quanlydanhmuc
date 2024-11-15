<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten_danh_muc = $_POST['ten_danh_muc'];
    $mo_ta = $_POST['mo_ta'];

    $stmt = $pdo->prepare("INSERT INTO danh_mucs (ten_danh_muc, mo_ta) VALUES (?, ?)");
    $stmt->execute([$ten_danh_muc, $mo_ta]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
    <link rel="stylesheet" href="styles.css">
<head>
    <meta charset="UTF-8">
    <title>Thêm Danh Mục</title>
    <div>
    <h1>Thêm Danh Mục</h1>
    </div>
    <br>
</head>
<body>
  
    <br>
    <div>
    <form method="POST">
        <label>Tên Danh Mục: <input type="text" name="ten_danh_muc" required></label><br>
        <label>Mô Tả: <textarea name="mo_ta"></textarea></label><br>
        <button type="submit">Thêm</button>
        <br>
    </form>
    <br>
    <a href="index.php">Quay lại</a>
    </div>
</body>
</html>
