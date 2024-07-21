<!-- app/Views/layout/layout.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
            background-color: #444;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        main {
            padding: 20px;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/profile">About</a></li>
            <li><a href="/skills">Skills</a></li>
        </ul>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>Footer</p>
    </footer>
</body>
</html>
