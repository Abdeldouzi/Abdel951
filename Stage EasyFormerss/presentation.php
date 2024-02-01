<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation - EasyFormers</title>
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
        .banner ul, .banner ol {
            margin-bottom: 10px;
            text-align: left; /* Aligner le texte à gauche dans les listes */
        }
        .banner h3 {
            color: #fff;
            font-size: 25px;
            text-align:left;
            margin-bottom: 20px; /* Ajout de marge en bas pour séparer du contenu suivant */
        }

    </style>
    <?php include 'header.php';?>
   
    <div class="banner">

    
    <h1>Présentation</h1>

    <p>Easyformers est un organisme de formation spécialisé dans les métiers de l’informatique, de la cybersécurité et des nouvelles technologies.

        L’aventure a commencé en 2016 quand Alex Falzon a créé l’association Easyformer afin de faire partager à des jeunes étudiants sa passion de l’informatique et des nouvelles technologies mais également leur apprendre un métier.
        
        Easyformer fait partie d’un réseau du même nom spécialisé dans les prestations informatiques et plus précisément, dans l’intégration de formateurs en informatique dans des écoles et/ou centres de formations. Le « Réseau EasyFormer » sert de cadre de qualité et de mutualisation de ressources, les autres organismes peuvent s’appuyer dessus afin d’étendre ses valeurs avec une souplesse administrative et une délégation facilitée.
        
        Dans la même lignée, Easyformers a pour vocation de partager ses compétences et son expertise à travers des formations de courtes et longues durées en distanciel.
        </p>

    <h3>Nos formations s’adressent :</h3>
    <ul>
        <li>Soit à des salariés qui souhaitent consolider leurs acquis et/ou se mettre “à la page”</li>
        <li>Soit à des salariés en reconversion professionnelle</li>
    </ul>

    <p>Notre objectif : développer le niveau d’employabilité de nos apprenants.</p>
    </div>

    <!-- Ajoutez d'autres éléments HTML ou styles au besoin -->
    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>
</body>
</html>