<!DOCTYPE html>
<html>
<head>
    <title>Mey_Icha</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Pengeloaan Data Pengguna</h1>
    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-info">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>
    <a href="/users/create">Daftar Pengguna</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="/users/edit/<?= $user['id'] ?>">Edit</a>
                    <a href="/users/delete/<?= $user['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
