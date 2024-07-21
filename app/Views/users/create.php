<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <h1>Create User</h1>
    <form action="/users/store" method="post">
        <label>Name</label>
        <input type="text" name="name" required><br>
        <label>Email</label>
        <input type="email" name="email" required><br>
        <label>Password</label>
        <input type="password" name="password" required><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
