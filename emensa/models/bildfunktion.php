<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/../models/db_handling.php');
$verzeichnis = "C:\\Users\\NXM\\Documents\\GitHub\\E-Mensa\\emensa\\public\\img\\gerichte";

$bildnamen = array();

$dateien = scandir($verzeichnis);

$dateien = array_filter($dateien, function($datei) {
    return $datei != "." && $datei != "..";
});

$id=0;
foreach ($dateien as $item) {

    $line = $item;
    $id = substr($line,0,2);
    echo $id; echo "      $line";
    echo "<br>";

    insert_bild($line, $id);

}