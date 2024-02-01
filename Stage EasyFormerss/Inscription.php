<?php
require("connexion.php");

// Initialize the error message
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom'], $_POST['prénom'], $_POST['mdp'], $_POST['mail'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prénom'];
        $mdp = md5($_POST['mdp']);
        $mail = $_POST['mail'];

        $stmt = $bdd->prepare("SELECT * FROM utilisateurs WHERE adresseMail = :email");
        $stmt->bindParam(':email', $mail, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->fetchColumn() > 0) {
            // Set the error message
            $errorMessage = 'Cette adresse email est déjà enregistrée. Veuillez utiliser une autre adresse.';
        } else {
            $stmt = $bdd->prepare("INSERT INTO utilisateurs (nom,prenom,adresseMail,motDePasse) VALUES (:nom,:prenom,:mail,:mdp)");
            $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
            $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
            $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
            $stmt->execute();
            echo "Vous êtes bien enregistré !";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="Projet.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .banner {
            background-color: #d4e6f1;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
        }

        #Inscription {
            text-align: center;
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

        button {
            background-color: #1a5276;
            color: #fff;
            border: none;
            padding: 10px 15px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        button:hover {
            transform: scale(1.1);
        }

        p {
            margin-top: 20px;
            color: #333;
        }

        .error-message {
            color: #ff0000; /* Red color for the error message */
            margin-top: 10px;
            display: none; /* Hide by default */
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Wait for the DOM to be fully loaded
            var errorMessage = document.querySelector('.error-message');

            if (errorMessage) {
                // Show the error message
                errorMessage.style.display = 'block';

                // Hide the error message after 5 seconds
                setTimeout(function () {
                    errorMessage.style.display = 'none';
                }, 10000);
            }
        });
    </script>
</head>
<body>

<div class="banner">
    <section id="Inscription" class="Inscription">
        <h2 style="color: #fff;">Inscrivez-vous ici</h2>

        <form action="inscription.php" method="POST">
            <table>
                <tr>
                    <td><label for="nom">Nom</label></td>
                    <td><input type="text" name="nom" required/></td>
                </tr>
                <tr>
                    <td><label for="prénom">Prénom</label></td>
                    <td><input type="text" name="prénom" required/></td>
                </tr>
                <tr>
                    <td><label for="mdp">Mot de passe</label></td>
                    <td><input type="password" name="mdp" required/></td>
                </tr>
                <tr>
                    <td><label for="mail">Mail</label></td>
                    <td><input type="email" name="mail" required/></td>
                </tr>
            </table>
            
            <p> <button> S'inscrire</button></p>
            
        </form>

        <p>Tous les champs sont obligatoires.</p>
        <!-- Display error message only if it is set -->
        <?php if(isset($errorMessage) && !empty($errorMessage)): ?>
            <div class="error-message"><?= $errorMessage; ?></div>
        <?php endif; ?>

        <p>Déjà un compte ? <button><a href="login.php" style="color: #fff; text-decoration: none;">Connectez-vous</a></button></p>
        <p>Revenez à l'accueil <button><a href="EasyFormers.php" style="color: #fff; text-decoration: none;">Ici</a></button></p>
    </section>
</div>

</body>
</html>

