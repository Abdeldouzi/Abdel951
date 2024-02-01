<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Pédagogie - EasyFormers</title>
    <!-- Ajoutez des liens vers des fichiers CSS ou des styles inline ici selon vos besoins -->
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #eaf2f8;
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            margin: 0;
        }

        nav {
            margin-top: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
            position: relative;
            cursor: pointer;
        }

        nav ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #3498db;
        }

        nav ul li:hover > ul {
            display: flex;
            flex-direction: column;
        }

        nav ul ul li {
            margin-right: 0;
            width: 200px;
        }

        footer {
        background-color: #2e4053;
        color: #ecf0f1;
        padding: 10px;
        text-align: center;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        margin-left:20px;
            margin-right:20px;
    }

    footer button {
        background-color: #ecf0f1;
        color: #85929e;
        border: none;
        border-radius: 5px;
        padding: 8px 15px;
        margin: 0 10px;
        cursor: pointer;
    }
    .banner {
            background-color: #d4e6f1;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-bottom-left-radius: 50px;
            margin-top:140px;
            margin-bottom: 20px; /* Add margin between banner and footer */
            margin-left: 20px;
            margin-right: 20px;
        }
        .banner h1 {
            color: #fff;
            font-size: 32px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px; /* Ajout de marge en bas pour séparer du contenu suivant */
        }
        
        .banner h2 {
            color: #fff;
            font-size: 25px;
            text-align:left;
            margin-bottom: 20px; /* Ajout de marge en bas pour séparer du contenu suivant */
        }
        .banner p{
            text-align:left;
        }
        .banner img {
    width: 100%;
    max-width: 400px;
    margin-right: 20px; /* Ajout de marge à droite de l'image pour séparer du texte */
}
    </style>
    <?php include 'header.php';?>
    <div class="banner">

    <h1>Notre Pédagogie</h1>
    <img src="Pedago.jpg" alt="Texte alternatif pour l'image">
    <h2>Des formations interactives et adaptées au niveau de chacun :</h2>
    <p>Un questionnaire est envoyé à chaque participant en amont de la formation afin d’évaluer son niveau et adapter la formation en fonction des résultats.</p>

    <h2>Des mises en situations professionnelles quotidiennes :</h2>
    <p>Nos formations alternent les cours théoriques avec des travaux pratiques qui visent à mettre chaque apprenant dans des situations réelles de travail en entreprise.</p>

    <p>Une évaluation qualité constante :</p>
    <p>Nos apprenants et formateurs remplissent un questionnaire anonyme en fin de formation pour faire part de leur ressenti sur la formation.</p>

    <h2>Un espace pédagogique dédié :</h2>
    <p>Chaque apprenant dispose d’un accès à une plate-forme pédagogique avec documentation présentée en formation...</p>

    <h2>Une équipe pédagogique disponible et à l’écoute :</h2>
    <p>Nos formateurs et notre équipe pédagogique se tiennent à votre disposition pour toute question tout au long de la formation...</p>

    <h2>Intégrer nos formations, c’est intégrer un réseau de professionnels :</h2>
    <p>Grâce à son réseau, EasyFormers vous met en relation directe avec des professionnels et vous accompagne tout au long de votre parcours professionnel.</p>
    </div>
    <!-- Ajoutez d'autres éléments HTML ou styles au besoin -->
    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>
</body>
</html>
