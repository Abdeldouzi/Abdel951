<!-- financements.html -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financements - EasyFormers</title>
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

        nav ul li:hover>ul {
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
            margin-left: 20px;
            margin-right: 20px;
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
            text-align: center; /* Aligner le texte au centre */
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-bottom-left-radius: 50px;
            margin-bottom: 20px;
            /* Add margin between banner and footer */
            margin-top: 140px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .banner h2 {
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

        .banner p {
            margin-bottom: 10px;
            text-align: left; /* Aligner le texte à gauche */
        }

        .banner ul, .banner ol {
            margin-bottom: 10px;
            text-align: left; /* Aligner le texte à gauche dans les listes */
        }

        .banner button {
            background-color: #1a5276;
            /* Couleur du bouton */
            color: #fff;
            /* Couleur du texte en blanc */
            padding: 15px 30px;
            /* Ajuste la taille du bouton en modifiant le padding */
            cursor: pointer;
            border-radius: 10px;
            /* Arrondit les bords du bouton */
        }

        .banner button:hover {
            transform: scale(1.1);
            /* Agrandissement uniquement sur le survol */
        }
        
    </style>
    <?php include 'header.php'; ?>

    <div class="banner">
    

        <h2>Les financements</h2>

        <h3>Le financement par les OPCO</h3>

        <p>Les OPCO (Opérateurs de compétences) sont des organismes agréés par l’État, qui ont pour objectif d’aider les TPE et PME de moins de 50 salariés dans l’accompagnement à la formation continue des employés.</p>

        <p>Ainsi, une entreprise peut solliciter l’OPCO dont elle dépend pour demander une prise en charge totale ou partielle des frais de formation de ses salariés afin qu’ils puissent monter en compétences et évoluer dans leur poste ou même changer de métier.</p>

        <h3>Quel est leur rôle ?</h3>

        <ul>
            <li>Financer des formations : ils aident les entreprises à financer leurs formations professionnelles. Ils aident également à déterminer les actions de formation éligibles et à mettre en place des programmes adaptés.</li>
            <li>Accompagner les entreprises : ils conseillent les entreprises sur les dispositifs de formation à mettre en place. Ils les aident à élaborer un plan de développement des compétences et à choisir les formations adéquates.</li>
        </ul>

        <h3>Quels sont les différents OPCO ?</h3>

        <p>Il existe actuellement 11 OPCO en France, chacun étant dédié à certaines branches professionnelles ou secteurs d’activité :</p>

        <ul>
            <li>OPCO Mobilités</li>
            <li>Uniformation</li>
            <li>AFDAS</li>
            <li>OPCO Commerce</li>
            <li>OPCO 2i</li>
            <li>OPCO Santé</li>
            <li>Constructys</li>
            <li>OPCO EP</li>
            <li>OCAPIAT</li>
            <li>AKTO</li>
            <li>ATLAS</li>
        </ul>
        

        <h3>Comment savoir de quel OPCO je dépends ?</h3>

        <p>Il existe aujourd’hui 3 principales méthodes pour connaître son opérateur de compétences :</p>

        <ol>
            <li>Votre entreprise est déjà, selon vous, adhérente à un OPCO mais vous souhaitez le vérifier ? Utilisez le site cfadock (https://www.cfadock.fr/) en entrant le SIRET de votre entreprise (sans aucun espace) sur le site, votre OPCO sera affiché.</li>
            <li>Votre entreprise n’est pas encore adhérente à un OPCO ? Utilisez cette table de correspondance (tableau ci-dessous) pour trouver votre OPCO grâce à votre Identifiant de Convention Collective (IDCC). Pour rappel, le numéro IDCC se compose de 4 chiffres et est compris entre 0001 et 9999.</li>
            <li>Si votre entreprise n’est pas adhérente à un OPCO et que vous n’utilisez pas encore de convention collective, vous pouvez consulter la liste des opérateurs de compétences sur le site travail-emploi.gouv.</li>
        </ol>

        <h3>Comment obtenir un financement ?</h3>

        <p>Pour obtenir un financement de votre OPCO, vous devez suivre les étapes suivantes :</p>

        <ol>
            <li>Identifier l’OPCO dont vous dépendez</li>
            <li>Sélectionner un centre de formation certifié Qualiopi et faire une demande de devis pour l’action de formation envisagée.</li>
            <li>Renvoyer le devis signé et complété d’une demande de prise en charge financière à votre OPCO</li>
            <li>Attendre l’avis de validation de votre OPCO.</li>
        </ol>

        <p>Le financement est validé à l’issue de la formation lorsque l’organisme a confirmé que l’apprenant était bien présent tout au long des différentes étapes du parcours de formation.</p>

        <!-- Bouton de téléchargement du document -->
        <a href="opco.pdf" target="_blank">
            <button>Consulter le guide sur les financements par les OPCO</button>
        </a>

        <!-- Ajoutez d'autres éléments au besoin -->
    </div>
    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>

</body>

</html>
