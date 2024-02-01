<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/614cd52a98.js" crossorigin="anonymous"></script>
    
    <title>Formulaire de Contact</title>
    <style>
        header {
    position: fixed;
    width: 95%;
    background-color: #2e4053;
    color: #fff;
    padding: 15px;
    display: flex; /* Ajout de la propriété display: flex; */
    align-items: center; /* Ajout de la propriété align-items: center; */
    text-align: center;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
    transition: top 0.3s;
    top: 0;
}

h1 {
    margin-top: 20px;
    margin-bottom: 10px;
    margin-right: auto; /* Ajout de la propriété margin-right: auto; */
}

        header.hidden {
            top: -100px;
        }

        header img {
            width: 100px;
            height: auto;
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
            background-color: #ecf0f1;
            color: #ecf0f1;
            border-radius: 25px;
            padding: 8px;
            font-size: 14px;
        }

        nav ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ecf0f1;
            border-radius: 25px;
        }

        nav ul li:hover > ul {
            display: flex;
            flex-direction: column;
        }

        nav ul ul li {
            margin-right: 0;
            width: 200px;
            border: none;
        }

        nav a {
            color: #85929e;
            text-decoration: none;
        }

        /* Styles for the envelope, user, key, and door icons */
        nav ul li ul li a span {
            font-size: inherit;
            color: inherit;
            margin-right: 5px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #eaf2f8;
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
            margin-top: 20px;
        }

        footer button {
            background-color: #ecf0f1;
            color: #85929e;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            margin: 0 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .banner {
            background-color: #d4e6f1;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-bottom-left-radius: 50px;
            margin-top: 140px;
            margin-bottom: 30px;
            margin-left: 20px;
            margin-right: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start; /* Alignement du contenu en haut */
        }

        .banner form {
            width: 45%;
        }

        .banner button {
            background-color: #1a5276;
            font-size: bold;
            color: #fff;
            padding: 15px 15px;
            cursor: pointer;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .banner button:hover {
            transform: scale(1.1);
        }

        table {
            margin: 0 auto;
            background-color: #fff;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        tr {
            border-bottom: 1px solid #ddd;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        
    </style>
</head>

<body><header id="mainHeader">
<img src="EF.png" alt="Texte alternatif pour l'image">
        
        <h1>EasyFormers</h1>
        <nav>
            <ul>
                <li><a href="EasyFormers.php"><i class="fa-solid fa-house"></i></a></li>
                <li><a href="presentation.php">Qui sommes nous ?</a>
                    <ul>
                        <li><a href="presentation.php">Présentation</a></li>
                        <li><a href="organisation.php">Notre organisation</a></li>
                        <li><a href="organigramme.php">Notre organigramme</a></li>
                        <li><a href="solutions.php">Nos solutions</a></li>
                        <li><a href="pedagogie.php">Notre pédagogie</a></li>
                    </ul>
                </li>
                <li><a href="sensibilisation.php">Nos formations</a>
                    <ul>
                        <li><a href="sensibilisation.php">Sensibilisation et initiation à la cybersécurité</a></li>
                        <li><a href="fondamentaux.php">Les fondamentaux de la cybersécurité</a></li>
                        <li><a href="cloud.php">Cybersécurité Cloud Computing</a></li>
                    </ul>
                </li>
                <li><a href="financements.php">Les financements</a></li>
                <li><a href="apprenant.php">Qui suis-je ?</a>
                    <ul>
                        <li><a href="apprenant.php">Un apprenant</a></li>
                        <li><a href="particulier.php">Un particulier</a></li>
                        <li><a href="entreprise.php">Une entreprise</a></li>
                    </ul>
                </li>
                <?php 
                    if(isset($_SESSION['connexion']) && $_SESSION['connexion'] === 'yes') { 
                        echo '<li><a href="ressources.php">Ressources</a></li>';
                        echo '<li><a href="formulairecontact.php"><span>&#9993;</span> Contact</a></li>';
                        echo '<li><a href="#">'.$_SESSION['name'].' '.$_SESSION['first_name'].'</a></li>';
                        echo '<li><a href="deconnexion.php"><i class="fa-solid fa-right-from-bracket"></i> Se déconnecter</a></li>';
                    } else {
                        echo '<li><a href="ressources.php">Ressources</a></li>';
                        echo '<li><a href="formulairecontact.php"><span>&#9993;</span> Contact</a></li>';
                        echo '<li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Se connecter</a></li>';
                        echo '<li><a href="Inscription.php"><span>&#128100;</span> S\'inscrire</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </header>

    <!-- ... (le reste du contenu body) ... -->

    <script>
        var prevScrollPos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            var header = document.getElementById("mainHeader");

            if (prevScrollPos > currentScrollPos) {
                header.style.top = "0";
            } else {
                header.style.top = "-100px";
            }

            prevScrollPos = currentScrollPos;
        };
    </script>
    
    <div class="banner">
    <h2>Contactez-nous ici</h2>
    <form action="https://formsubmit.co/abdeldouzi95110@gmail.com" method="POST">
            <table>
                <tr>
                    <td><label for="nom">Nom :</label></td>
                    <td><input type="text" id="nom" name="nom" required></td>
                </tr>
                <tr>
                    <td><label for="email">E-mail :</label></td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="message">Message :</label></td>
                    <td><textarea id="message" name="message" required></textarea></td>
                </tr>
            </table>
            <br><input type="hidden" name="_next" value="http://localhost/Stage%20EasyFormerss/confirmation.html">
            <button type="submit">Envoyez</button>
        </form>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2615.5900886685895!2d2.0660251761389454!3d49.03740278809258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f5272f9e6851%3A0x96e75ea19261077d!2s12%20Rue%20des%20Violettes%2C%2095000%20Cergy!5e0!3m2!1sfr!2sfr!4v1706705011794!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>

</body>

</html>
