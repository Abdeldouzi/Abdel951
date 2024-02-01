<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    require_once('connexion.php');

    // Vérifiez si le jeton existe et n'a pas expiré
    $current_time = date('Y-m-d H:i:s');
    $requeteToken = "SELECT user_id FROM reset_password_requests WHERE token = :token AND expire_at > :current_time";
    $stmtToken = $bdd->prepare($requeteToken);
    $stmtToken->bindParam(':token', $token);
    $stmtToken->bindParam(':current_time', $current_time);
    $stmtToken->execute();
    $resultatToken = $stmtToken->fetch();

    if ($resultatToken) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérez le nouveau mot de passe de l'utilisateur
            $nouveau_mot_de_passe = $_POST['nouveau_mot_de_passe'];

            // Utilisez la fonction MD5 pour le nouveau mot de passe
            $hashed_password = md5($nouveau_mot_de_passe);

            // Mettez à jour le mot de passe dans la table utilisateurs
            $requeteUpdate = "UPDATE utilisateurs SET motDePasse = :motDePasse WHERE id = :user_id";
            $stmtUpdate = $bdd->prepare($requeteUpdate);
            $stmtUpdate->bindParam(':motDePasse', $hashed_password);
            $stmtUpdate->bindParam(':user_id', $resultatToken['user_id']);
            $stmtUpdate->execute();

            // Supprimez l'entrée correspondante dans la table reset_password_requests
            $requeteDelete = "DELETE FROM reset_password_requests WHERE token = :token";
            $stmtDelete = $bdd->prepare($requeteDelete);
            $stmtDelete->bindParam(':token', $token);
            $stmtDelete->execute();

            // Redirigez l'utilisateur vers la page de connexion
            header("Location: login.php");
            exit;
        }
    } else {
        // Jeton non valide ou expiré
        echo "Le lien de réinitialisation du mot de passe est invalide ou a expiré.";
    }
} else {
    // Aucun jeton fourni
    echo "Aucun jeton de réinitialisation du mot de passe fourni.";
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
    <h2>Réinitialisation du mot de passe</h2>
    <form action="reset_password.php?token=<?php echo $token; ?>" method="post">
        <label for="nouveau_mot_de_passe">Nouveau mot de passe:</label>
        <input type="password" id="nouveau_mot_de_passe" name="nouveau_mot_de_passe" required>
        <input type="submit" value="Réinitialiser le mot de passe">
    </form>
</body>
</html>