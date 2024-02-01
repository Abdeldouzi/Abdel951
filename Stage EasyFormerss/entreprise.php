<!-- une_entreprise.html -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Une entreprise - EasyFormers</title>
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
    position: flex; /* Ajout de position relative pour servir de référence à l'image positionnée en absolu */
    background-color: #d4e6f1;
    padding: 20px;
    text-align: center;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
    border-bottom-left-radius: 50px;
    margin-top: 140px;
    margin-bottom: 20px;
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
        }
        .banner img {
    width: 100%;
    max-width: 500px;
    margin-bottom: 20px;
    float: right; /* Aligner l'image à droite */
    margin-left: 20px; /* Ajouter une marge à gauche pour l'éloigner du texte */
    margin-top: -300px; /* Ajuster la marge pour aligner l'image à côté du texte */
}
    </style>
    <?php include 'header.php';?>
    <div class="banner">

    <h1>Une entreprise</h1>

    <h3>Un service personnalisé pour les entreprises</h3>

    <p>Tout au long du partenariat, EasyFormers vous accompagne dans vos démarches et vous conseille.</p>

    <h3>Un audit de votre besoin</h3>

    <p>Un interlocuteur unique analyse votre projet de formation et ajuste votre besoin. <br>C’est ce même interlocuteur qui suivra toute la réalisation de votre projet de formation.</p>

    <h3>Une équipe pédagogique disponible et réactive</h3>

    <p>Notre équipe pédagogique vous informe de l’avancée de la formation et vous fait remonter le moindre incident.</p>

    <h3>Un réseau d’expert qui vous accompagne</h3>

    <p>Notre équipe d’expert métier vous conseille sur la mise en place de projets internes.</p>
    <img src="Equipe.jpg"  alt="Equipe">
    <h3>Une solution 100% digitale</h3>

    <p>Nos formations sont 100% en ligne. Elles sont réalisées par des formateurs experts qui recréent les mêmes conditions qu’en présentiel. Nos modules favorisent les travaux pratiques et l’interaction pour confronter les participants à des cas qu’ils pourront retrouver en situation professionnelle.</p>

    <p>L’ensemble de la documentation est disponible sur un espace dédié aux apprenants avec des vidéos, articles pour aiguiser leur curiosité et aller plus loin dans leur apprentissage. Une solution de chat leur permet de dialoguer avec leur formateur et les autres participants.</p>

    <!-- Ajoutez d'autres éléments au besoin -->
    </div>

    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>

</body>
</html>
