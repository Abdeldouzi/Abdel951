<!-- un_particulier.html -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un particulier - EasyFormers</title>
    <link rel="stylesheet" href="style.css"> <!-- Ajoutez votre feuille de style principale ici -->
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
        
        .banner h3 {
            color: #fff;
            font-size: 25px;
            text-align:left;
            margin-bottom: 20px; /* Ajout de marge en bas pour séparer du contenu suivant */
        }
        .banner p{
            text-align:left;
        }.banner ul, .banner ol {
            margin-bottom: 10px;
            text-align: left; /* Aligner le texte à gauche dans les listes */
        }
        .banner img{
            width:500px;
        }
    </style>
    <?php include 'header.php';?>
    <div class="banner">
    <h1>Un particulier</h1>

    <h3>Des formations dynamiques en visio</h3>

    <p>Toutes nos formations sont réalisables à distance. Vous pouvez à tout moment interagir avec le formateur qui vous donne accès à un catalogue de fiches pédagogiques 100% digital.</p>

    <h3>Cette solution présente 3 avantages :</h3>

    <ul>
        <li>Un déploiement rapide avec plusieurs dates proposées chaque mois</li>
        <li>Un coût moindre</li>
        <li>La possibilité de dialoguer avec des stagiaires de toute la France</li>
    </ul>
    <img src="Particu.jpg"  alt="FormationAp">
    </div>

    <!-- Ajoutez d'autres éléments au besoin -->

    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>

</body>
</html>
