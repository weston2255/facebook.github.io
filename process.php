<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $old_password = $_POST['old-password'];
    $new_password = $_POST['new-password'];

    // Affiche les informations recueillies (pour une démonstration uniquement)
    echo "Nom d'utilisateur : " . htmlspecialchars($username) . "<br>";
    echo "Numéro de téléphone : " . htmlspecialchars($phone) . "<br>";
    echo "Ancien mot de passe : " . htmlspecialchars($old_password) . "<br>";
    echo "Nouveau mot de passe : " . htmlspecialchars($new_password) . "<br>";

    // Vous pouvez également envoyer ces informations à un email ou les stocker dans une base de données
}
?>
