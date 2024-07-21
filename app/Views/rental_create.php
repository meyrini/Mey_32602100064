<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Rental</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Create Rental</h1>
    </header>
    <main>
        <form action="<?= site_url('rental/store') ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea><br>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" required><br>
            <button type="submit" class="btn">Save</button>
        </form>
    </main>
</body>
</html>
