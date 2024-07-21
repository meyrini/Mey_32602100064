<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental List</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/rental.css') ?>">
</head>
<body>
    <header>
        <h1>Rental List</h1>
        <a href="<?= site_url('rental/create') ?>" class="btn">Add New Rental</a>
    </header>
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($rentals as $rental): ?>
            <tr>
                <td><?= $rental['id'] ?></td>
                <td><?= $rental['name'] ?></td>
                <td><?= $rental['description'] ?></td>
                <td><?= $rental['price'] ?></td>
                <td>
                    <a href="<?= site_url('rental/edit/' . $rental['id']) ?>" class="btn">Edit</a>
                    <a href="<?= site_url('rental/delete/' . $rental['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>
</html>
