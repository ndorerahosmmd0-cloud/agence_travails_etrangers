<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php?role=admin");
    exit();
}
?>
<?php

include("header.php");

$page = isset($_GET['page']) ? $_GET['page'] : '';

switch($page)
{

case "clients":
include("clients.php");
break;

case "affectations":
include("affectations.php");
break;

case "dossiers":
include("dossiers_travail.php");
break;

case "gerants":
include("gerants.php");
break;

case "archives":
include("archive_clients.php");
break;

case "historique":
include("historique_modifications.php");
break;

case "demandes":
include("demandes.php");
break;

case "offres":
include("offres_emploi.php");
break;
 
case "delete_client":
    include("delete_client.php");
    break;

case "revenus":
include("revenu.php");
break;

default:

echo "<h1>Bienvenue a l' agence de travail</h1>";

}

include("footer.php");

?>
