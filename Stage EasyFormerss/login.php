<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Ajoutez vos styles CSS ici -->
</head>
<body>

    

    <?php
    // Vérification des informations de connexion
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $mot_de_passe = md5($_POST['mot_de_passe']);

        // Vérification des informations de connexion dans la base de données
        require_once('connexion.php');

        $requete = "SELECT id, nom, prenom FROM utilisateurs WHERE adresseMail = :email AND motDePasse = :mdp";
        $stmt = $bdd->prepare($requete);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':mdp',$mot_de_passe);
        $stmt->execute();
        $resultat = $stmt->fetchAll();

        if (count($resultat) == 1) {
            $utilisateur = $resultat[0];
            session_start();
            $_SESSION['connexion'] = "yes";
            $_SESSION['name'] = $utilisateur['nom'];
            $_SESSION['first_name'] = $utilisateur['prenom'];
            header("Location: easyformers.php");
            exit;
        } else {
            echo "Adresse e-mail ou mot de passe incorrect.";
            $_SESSION['connexion'] = "no";
            exit;
        }

        
    }
    ?> <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
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
                text-align: center;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                border-bottom-right-radius: 20px;
                border-bottom-left-radius: 20px;
                margin-top: 20px;
                margin-bottom: 20px;
                margin-left: 20px;
                margin-right: 20px;
                padding: 20px; /* Added padding */
            }
    
            form {
                max-width: 300px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
    
            label {
                margin-bottom: 5px;
                font-weight: bold;
                font-size: 14px;
            }
    
            input {
                width: 100%;
                padding: 8px;
                box-sizing: border-box;
                border: 1px solid #ddd;
                border-radius: 5px;
                margin-bottom: 10px;
            }
    
            input[type="submit"] {
                background-color: #1a5276;
                color: #fff;
                border: none;
                padding: 8px 10px; /* Adjusted padding */
                width: 60%; /* Added width */
                font-size: 15px; /* Adjusted font size */
                cursor: pointer;
                border-radius: 5px;
                transition: transform 0.3s ease; /* Added transition */
                Margin-top: 10px;
            }
    
            input[type="submit"]:hover {
                transform: scale(1.1); /* Adjust the scale factor for the desired size on hover */
            }
    
            p {
                margin-top: 20px;
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
        </style>
    </head>
    <body>
    
    <div class="banner">
        <p style="color: #fff; font-size: 18px;">Veuillez vous connecter ici.</p>
        <!-- Formulaire de connexion -->
        <form action="login.php" method="post">
            <table>
                <tr>
                    <td><label for="email" style="font-size: 16px;">Adresse e-mail:</label></td>
                    <td><input type="text" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="mot_de_passe" style="font-size: 16px;">Mot de passe:</label></td>
                    <td><input type="password" id="mot_de_passe" name="mot_de_passe" required></td>
                </tr>
            </table>
            <input type="submit" value="Se connecter">
            <a href="reset_password_request.php" class="forgot-password-btn">Mot de passe oublié ?</a>
        </form>
        <!-- Fin du formulaire de connexion -->
    </div>
    
    </body>
    </html>