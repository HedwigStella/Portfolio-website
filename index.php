<?php
// index.php - Portfolio website Hedwig Lejeune
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Metadata & lettertype -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Hedwig Lejeune</title>

    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* Basisinstellingen */
        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
            margin: 0;
            padding: 0;
        }

        /* Header met navigatie */
        header {
            background: linear-gradient(135deg, #4a90e2, #1e3a8a);
            color: white;
            padding: 30px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
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

        /* Secties */
        .section {
            max-width: 900px;
            margin: 60px auto;
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

        /* Footer */
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #e5e7eb;
            color: #6b7280;
            font-size: 0.9rem;
            margin-top: 50px;
        }

        /* Animatie */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive ontwerp */
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.8rem;
            }

            nav a {
                display: block;
                margin: 10px 0;
            }

            .section {
                padding: 25px;
                margin: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Header met naam en menu -->
    <header>
        <h1>Portfolio Hedwig Lejeune</h1>
        <nav>
            <!-- Linkjes scrollen naar bijbehorende secties -->
            <a href="#home">Home</a>
            <a href="#projecten">Mijn Projecten</a>
            <a href="#overmij">Over Mij</a>
            <a href="#cv">Mijn CV</a>
        </nav>
    </header>

    <!-- Sectie: Welkom -->
    <div id="home" class="section">
        <h2>Welkom!</h2>
        <p>Leuk dat je een kijkje neemt op mijn portfolio. Hier vind je mijn projecten, vaardigheden, en meer over wie ik ben als developer/designer. Blader gerust rond!</p>
    </div>

    <!-- Sectie: Projecten -->
    <div id="projecten" class="section">
        <h2>Mijn Projecten</h2>
        <p>Hier toon ik een selectie van mijn favoriete projecten, van webdesign tot softwareontwikkeling. Binnenkort meer!</p>
    </div>

    <!-- Sectie: Over Mij -->
    <div id="overmij" class="section">
        <h2>Over Mij</h2>
        <p>Ik ben Hedwig Lejeune, een gepassioneerde ontwikkelaar met interesse in front-end design, UX/UI en creatieve technologieën.</p>
    </div>

    <!-- Sectie: CV met download -->
    <div id="cv" class="section">
        <h2>Mijn CV</h2>
        <p>Bekijk mijn ervaring, opleidingen en vaardigheden in mijn CV. <a href="#">Download mijn CV</a>.</p>
    </div>

    <!-- Footer met automatisch jaartal -->
    <footer>
        &copy; <?php echo date("Y"); ?> Portfolio Hedwig Lejeune. Alle rechten voorbehouden.
    </footer>
</body>
</html>
