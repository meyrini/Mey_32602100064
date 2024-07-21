<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengguna</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h1>Edit Pengguna</h1>
    <form action="/users/update/<?= $user['id'] ?>" method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Update" class="btn">
    </form>
</body>
</html>
