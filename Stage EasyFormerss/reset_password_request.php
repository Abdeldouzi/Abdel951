<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    require_once('connexion.php');

    // Vérifiez si l'adresse e-mail existe dans la base de données
    $requete = "SELECT id FROM utilisateurs WHERE adresseMail = :email";
    $stmt = $bdd->prepare($requete);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $resultat = $stmt->fetch();

    if ($resultat) {
        // Générez un jeton unique
        $token = bin2hex(random_bytes(32));

        // Stockez la demande de réinitialisation dans la table reset_password_requests
        $expire_at = date('Y-m-d H:i:s', strtotime('+1 hour')); // Expiration dans 1 heure
        $requeteInsert = "INSERT INTO reset_password_requests (user_id, token, expire_at) VALUES (:user_id, :token, :expire_at)";
        $stmtInsert = $bdd->prepare($requeteInsert);
        $stmtInsert->bindParam(':user_id', $resultat['id']);
        $stmtInsert->bindParam(':token', $token);
        $stmtInsert->bindParam(':expire_at', $expire_at);
        $stmtInsert->execute();

        // Redirigez l'utilisateur vers la page de réinitialisation avec le jeton
        header("Location: reset_password.php?token=$token");
        exit;
    } else {
        // Adresse e-mail non trouvée dans la base de données
        echo "Adresse e-mail non trouvée.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation du mot de passe</title>
</head>
<body>
    <h2>Demande de réinitialisation du mot de passe</h2>
    <form action="reset_password_request.php" method="post">
        <label for="email">Adresse e-mail:</label>
        <input type="text" id="email" name="email" required>
        <input type="submit" value="Demander la réinitialisation du mot de passe">
    </form>
</body>
</html>