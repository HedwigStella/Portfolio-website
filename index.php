<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Metadata voor correcte weergave en Google Fonts voor modern lettertype -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Hedwig Lejeune</title>

    <!-- Import van een modern lettertype (Inter) via Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* Basisinstellingen voor layout en scroll-effecten */
        * {
            box-sizing: border-box; /* Voorkomt layout issues bij padding/margin */
            scroll-behavior: smooth; /* Zorgt voor vloeiende scroll naar secties */
        }

        /* Algemene stijl voor de body */
        body {
            font-family: 'Inter', sans-serif; /* Modern en strak font */
            background-color: #f9fafb; /* Lichtgrijze achtergrondkleur */
            color: #1f2937; /* Donkergrijze tekstkleur */
            margin: 0;
            padding: 0;
        }

        /* Header: bovenste deel van de website met naam en navigatie */
        header {
            background: linear-gradient(135deg, #4a90e2, #1e3a8a); /* Mooie kleurverloop */
            color: white;
            padding: 30px 0;
            text-align: center;
            position: sticky; /* Blijft bovenaan tijdens scrollen */
            top: 0;
            z-index: 1000; /* Zorgt dat header boven andere elementen staat */
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        /* Navigatiebalk onder de titel */
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

        /* Animatie onder menu-items bij hover */
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
            width: 100%; /* Onderlijning groeit bij hover */
        }

        /* Stijl voor elke sectie (Home, Projecten, Over Mij, CV) */
        .section {
            max-width: 900px; /* Maximale breedte voor leesbaarheid */
            margin: 60px auto; /* Centraal op de pagina */
            background: white;
            padding: 40px;
            border-radius: 16px; /* Afgeronde hoeken */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08); /* Zachte schaduw */
            animation: fadeIn 1s ease-in-out; /* Fade-in effect bij laden */
        }

        h2 {
            margin-top: 0;
            font-size: 2rem;
            color: #1e3a8a; /* Blauw accent voor titels */
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* Footer onderaan de pagina */
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #e5e7eb; /* Lichtgrijs */
            color: #6b7280; /* Donkergrijs */
            font-size: 0.9rem;
            margin-top: 50px;
        }

        /* Fade-in animatie voor secties */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive design voor kleinere schermen (mobiel) */
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.8rem;
            }

            nav a {
                display: block; /* Menu-items onder elkaar op mobiel */
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
            <!-- Menu-items linken naar specifieke secties op de pagina -->
            <a href="#home">Home</a>
            <a href="#projecten">Mijn Projecten</a>
            <a href="#overmij">Over Mij</a>
            <a href="#cv">Mijn CV</a>
        </nav>
    </header>

    <!-- Sectie: Welkomsttekst -->
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

    <!-- Sectie: CV met downloadmogelijkheid -->
    <div id="cv" class="section">
        <h2>Mijn CV</h2>
        <p>Bekijk mijn ervaring, opleidingen en vaardigheden in mijn CV. <a href="#">Download mijn CV</a>.</p>
    </div>

    <!-- Footer met jaartal -->
    <footer>
        &copy; <?php echo date("Y"); ?> Portfolio Hedwig Lejeune. Alle rechten voorbehouden.
    </footer>
</body>
</html>

