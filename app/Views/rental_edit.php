<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rental</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Edit Rental</h1>
    </header>
    <main>
        <form action="<?= site_url('rental/update') ?>" method="post">
            <input type="hidden" name="id" value="<?= $rental['id'] ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?= $rental['name'] ?>" required><br>
            <label for="description">Description:</label>
            <textarea name="description" id="description"><?= $rental['description'] ?></textarea><br>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" value="<?= $rental['price'] ?>" required><br>
            <button type="submit" class="btn">Update</button>
        </form>
    </main>
</body>
</html>
