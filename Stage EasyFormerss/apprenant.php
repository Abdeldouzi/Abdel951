<!-- un_apprenant.html -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un apprenant - EasyFormers</title>
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
        .banner a button {
        background-color: #1a5276;
        color: #fff;
        padding: 15px 30px;
        cursor: pointer;
        border-radius: 10px;
        margin-left: 0; /* Aligne le bouton à gauche */
        display: block;
        margin-top: 10px; /* Ajoute un espace entre l'image et le bouton */
    }
        .banner button:hover {
            transform: scale(1.1); /* Agrandissement uniquement sur le survol */
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
        .banner img {
        width: 100%;
        max-width: 300px;
        margin-bottom: 20px;
        margin-left: 0; /* Décale l'image complètement à gauche */
        display: block;
    }
    </style>
    </style>
    <?php include 'header.php';?>
    <div class="banner">

    <h1>Un apprenant</h1>

    <p>EasyFormers met à la disposition des participants à ses formations des outils afin de faciliter le recueil d’informations, de satisfaire sa curiosité et d’encourager ceux qui veulent aller plus loin.</p>

    <h3>Une plate-forme pédagogique dédiée</h3>

    <p>Chaque participant reçoit en amont du démarrage de sa formation un lien vers un SharePoint avec tous les documents dont il a besoin pour la formation :</p>

    <ul>
        <li>Le livret d’accueil</li>
        <li>Tous les supports du formateur</li>
        <li>Les corrections des travaux pratiques</li>
        <li>Les questionnaires qualités</li>
    </ul>

    <p>Il recevra également des identifiants pour accéder à notre plate-forme pédagogique. Cet espace est 100% personnalisable (calendrier, tâches, contact, etc.) et hautement sécurisé. Il regroupe toute une bibliothèque de documents régulièrement enrichie par notre réseau de professionnels. Elle est accessible depuis PC et smartphone.</p>

    <h3>L’accessibilité aux personnes en situation de handicap</h3>

    <p>Toutes nos formations en distanciel sont accessibles aux personnes en situation de handicap.</p>

    <p>Pour les personnes atteintes d’un handicap visuel :</p>

    <ul>
        <li>Notre documentation peut s’adapter au besoin de l’apprenant (impression des supports pédagogiques avec une police adaptée). Elle est envoyée en amont afin qu’il puisse le transcrire en braille à l’aide de son logiciel personnel.</li>
    </ul>

    <p>Pour les personnes atteintes d’un handicap auditif :</p>

    <ul>
        <li>Nous travaillons avec un outil qui dispose de fonctionnalités comme le sous-titrage en direct de la vidéo. Notre référent handicap se tient à votre disposition pour vous aider et vous accompagner en amont, pendant et après la formation.</li>
    </ul>

    <h3>Comment se déroule une formation ?</h3>
    <img src="FormationAp.jpg"  alt="FormationAp">
    <!-- Bouton de téléchargement du document -->
    <a href="livret d_accueil.pdf" target="blank">
        <button>Consulter le livret d'accueil</button> </a>
        
    </div>
        

    

    

    <!-- Ajoutez d'autres éléments au besoin -->

    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>

</body>
</html>
