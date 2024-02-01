<!-- cloud.html -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersécurité Cloud Computing - EasyFormers</title>
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
    .banner img {
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }
    .banner {
            background-color: #d4e6f1;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-bottom-left-radius: 50px;
            margin-bottom: 20px; /* Add margin between banner and footer */
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 140px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .banner h2 {
            color: #fff; /* Couleur du texte en blanc */
            margin-top: 0; /* Réduit la marge supérieure pour aligner le texte en haut */
            margin-bottom: 20px; /* Ajoute de l'espace en bas du titre */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Ajoute une ombre au texte */
            font-size: 40px;
        }

        .banner a button {
            background-color: #1a5276; /* Couleur du bouton */
            color: #fff; /* Couleur du texte en blanc */
            padding: 15px 30px; /* Ajuste la taille du bouton en modifiant le padding */
            cursor: pointer;
            border-radius: 10px; /* Arrondit les bords du bouton */
        }
        .banner button:hover {
            transform: scale(1.1); /* Agrandissement uniquement sur le survol */
        }
    </style>
    <?php include 'header.php';?>
    <div class="banner">

    <h2>Cybersécurité Cloud Computing</h2>
    <img src="Computing.jpg" alt="Texte alternatif pour l'image">

    

    <!-- Bouton de téléchargement -->
    <a href="cloud.pdf" target="_blank">
        <button>Consulter le document</button>
    </a>

    <!-- Ajoutez d'autres éléments au besoin -->
</div>

    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>

</body>
</html>
