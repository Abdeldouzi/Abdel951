<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Solutions - EasyFormers</title>
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
            padding: 20px; /* Add padding for space on the sides */
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px; /* Add margin between header and content */
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
            margin-top: 20px; /* Add margin between content and footer */
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
            margin-bottom: 20px; /* Add margin between banner and footer */
            margin-left: 20px;
            margin-right: 20px;
            margin-top:140px;
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
    margin-bottom: 20px;
    float: right; /* Aligner l'image à droite */
    margin-left: 20px; /* Ajouter une marge à gauche pour l'éloigner du texte */
    margin-top: -300px; /* Ajuster la marge pour aligner l'image à côté du texte */
}
    </style>
    <?php include 'header.php';?>
    <div class="banner">
        <h1>Nos Solutions</h1>

        <h2>Des formations intra-entreprise :</h2>
        <p>Nous mettons en place des formations au sein de votre organisation...</p>

        <h2>Des formations 100% distanciel :</h2>
        <p>Pour plus de souplesse d’organisation, toutes nos formations sont proposées en 100% distanciel...</p>

        <h2>Des formations sur-mesure :</h2>
        <p>Avant chaque formation, nous réalisons un audit de vos besoins afin de mieux cibler le discours du formateur...</p>

        <h2>Des conseils d’experts :</h2>
        <p>Nos experts en architecture réseau, système et en sécurité vous accompagnent sur vos projets en interne.</p>
        <img src="Solu.jpg" alt="Texte alternatif pour l'image">
    </div>
    <!-- Ajoutez d'autres éléments HTML ou styles au besoin -->
    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>
</body>
</html>
