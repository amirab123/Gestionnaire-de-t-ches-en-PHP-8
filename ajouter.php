<?php
if (!empty($_POST['tache'])) {
    $taches = json_decode(file_get_contents("taches.json"), true);
    $taches[] = [
        'nom' => $_POST['tache'],
        'terminee' => false
    ];
    file_put_contents("taches.json", json_encode($taches, JSON_PRETTY_PRINT));
}
header("Location: index.php");
exit();
