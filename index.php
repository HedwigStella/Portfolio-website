<?php
// index.php
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Hedwig Lejeune</title>
    <!-- Google Font voor moderne uitstraling -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
            margin: 0;
            padding: 0;
        }
        header {
            background: linear-gradient(135deg, #4a90e2, #1e3a8a);
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        nav {
            margin-top: 15px;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            position: relative;
        }
        nav a::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s;
            margin: auto;
        }
        nav a:hover::after {
            width: 100%;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            animation: fadeIn 1s ease-in-out;
        }
        h2 {
            margin-top: 0;
            font-size: 2rem;
            color: #1e3a8a;
        }
        p {
            font-size: 1.1rem;
            line-height: 1.6;
        }
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #e5e7eb;
            color: #6b7280;
            margin-top: 50px;
            font-size: 0.9rem;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsiveness */
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.8rem;
            }
            nav a {
                display: block;
                margin: 10px 0;
            }
            .container {
                padding: 25px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Portfolio Hedwig Lejeune</h1>
        <nav>
            <a href="#">Homepage</a>
            <a href="#">Mijn Projecten</a>
            <a href="#">Over Mij</a>
            <a href="#">Mijn CV</a>
        </nav>
    </header>

    <div class="container">
        <h2>Welkom!</h2>
        <p>Leuk dat je een kijkje neemt op mijn portfolio. Hier vind je mijn projecten, vaardigheden, en meer over wie ik ben als developer/designer. Blader gerust rond!</p>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Portfolio Hedwig Lejeune. Alle rechten voorbehouden.
    </footer>
</body>
</html>
