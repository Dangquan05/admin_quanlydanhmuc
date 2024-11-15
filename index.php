<!-- index.php -->
<?php
include 'db.php';
include 'sidebar.php';
include 'header.php';

// Lấy danh sách danh mục từ cơ sở dữ liệu
$query = $pdo->query("SELECT * FROM danh_mucs");
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" href="styles.css">
<div class="main-content">
    <h1>Quản Lý Danh Mục</h1>
    <a href="add_category.php">Thêm Danh Mục</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Tên Danh Mục</th>
                <th>Mô Tả</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= htmlspecialchars($category['id']) ?></td>
                    <td><?= htmlspecialchars($category['ten_danh_muc']) ?></td>
                    <td><?= htmlspecialchars($category['mo_ta']) ?></td>
                    <td>
                        <a href="edit_category.php?id=<?= $category['id'] ?>">Sửa</a> |
                        <a href="delete_category.php?id=<?= $category['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
