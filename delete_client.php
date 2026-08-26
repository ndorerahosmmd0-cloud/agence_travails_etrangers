<?php
include("connexion.php");

/* Vérifier si ID existe */
if(!isset($_GET['id']) || empty($_GET['id']))
{
    die("ID manquant");
}

$id = intval($_GET['id']);

/* 1. Vérifier si client existe */
$check = mysqli_query($conn,
"SELECT * FROM clients WHERE id_client=$id");

if(!$check)
{
    die("Erreur SQL SELECT : " . mysqli_error($conn));
}

$client = mysqli_fetch_assoc($check);

if(!$client)
{
    die("Client introuvable (ID = $id)");
}

/* 2. Archiver le client */
$archive = mysqli_query($conn,"
INSERT INTO archive_clients
(
nom,
prenom,
date_suppression
)
VALUES
(
'".$client['nom']."',
'".$client['prenom']."',
CURDATE()
)
");
/* 3. Supprimer le client */
$delete = mysqli_query($conn,
"DELETE FROM clients WHERE id_client='$id'");

if(!$delete)
{
    die("Erreur suppression : ".mysqli_error($conn));
}

/* 4. Retour */
header("Location:index_old.php?page=clients");
exit();