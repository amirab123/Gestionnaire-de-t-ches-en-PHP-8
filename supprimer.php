<?php
if (isset($_GET['index'])) {
    $index = $_GET['index'];
    $taches = json_decode(file_get_contents("taches.json"), true);
    array_splice($taches, $index, 1);
    file_put_contents("taches.json", json_encode($taches, JSON_PRETTY_PRINT));
}
header("Location: index.php");
exit();
