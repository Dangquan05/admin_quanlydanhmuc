<?php
include 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM danh_mucs WHERE id = ?");
$stmt->execute([$id]);
$category = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten_danh_muc = $_POST['ten_danh_muc'];
    $mo_ta = $_POST['mo_ta'];

    $stmt = $pdo->prepare("UPDATE danh_mucs SET ten_danh_muc = ?, mo_ta = ? WHERE id = ?");
    $stmt->execute([$ten_danh_muc, $mo_ta, $id]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa Danh Mục</title>
</head>
<body>
    <link rel="stylesheet" href="styles.css">
    <h1>Sửa Danh Mục</h1>
    <form method="POST">
        <label>Tên Danh Mục: <input type="text" name="ten_danh_muc" value="<?= htmlspecialchars($category['ten_danh_muc']) ?>" required></label><br>
        <label>Mô Tả: <textarea name="mo_ta"><?= htmlspecialchars($category['mo_ta']) ?></textarea></label><br>
        <button type="submit">Lưu</button>
    </form>
    <a href="index.php">Quay lại</a>
</body>
</html>
