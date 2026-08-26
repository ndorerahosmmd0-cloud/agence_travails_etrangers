<?php
session_start();
include("connexion.php");

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

include("header.php");

$page = $_GET['page'] ?? '';

switch($page){

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

case "revenu":
include("revenu.php");
break;

default:
echo "<h2>Bienvenue dans Gojo</h2>";
}

include("footer.php");
?>