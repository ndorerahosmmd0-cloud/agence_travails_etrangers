<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "agence_travails_etrangers"
);

if(!$conn){
    die("Erreur de connexion à la base de données");
}
?>