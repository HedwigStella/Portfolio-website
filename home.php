<?php
// index.php
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Hedwig Lejeune</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4a90e2;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            margin-top: 0;
        }
        footer {
            text-align: center;
            padding: 15px 0;
            background-color: #f0f0f0;
            color: #666;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Portfolio Hedwig Lejeune</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Projecten</a>
            <a href="#">Over Mij</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <div class="container">
        <h2>Welkom!</h2>
        <p>Dit is de startpagina van mijn portfolio. Hier zal ik mijn projecten, vaardigheden en meer tonen.</p>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Hedwig Lejeune. Alle rechten voorbehouden.
    </footer>
</body>
</html>
