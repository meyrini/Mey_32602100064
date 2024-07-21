<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h1>Tambah Pengguna</h1>
    <form action="/users/store" method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Simpan" class="btn">
        <form action="/users/delete/<?= $user['id']; ?>" method="get" onsubmit="return confirm('Are you sure you want to delete this user?');">
    <button type="submit">Delete</button>
</form>
<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-info">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif; ?>

    </form>
</body>
</html>
