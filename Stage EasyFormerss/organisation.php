<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Organisation - EasyFormers</title>
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
        }.banner img {
            width: 100%; /* Ajuste la largeur de l'image à 100% de la largeur du conteneur */
            max-width: 800px; /* Limite la largeur maximale de l'image à 600px pour éviter la distorsion */
            margin-bottom: 20px; /* Ajoute de l'espace en bas de l'image */
        }
</style>
    </style>
    <?php include 'header.php';?>
    <div class="banner">

    <h1>Notre Organisation</h1>

    <img src="Organisation.png" alt="Image de l'organisation">
    </div>

    <!-- Ajoutez d'autres éléments HTML ou styles au besoin -->
    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>
</body>
</html>