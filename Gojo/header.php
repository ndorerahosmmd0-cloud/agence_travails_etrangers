<!DOCTYPE html>
<html lang="fr">

<head>

<title>Gojo System</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
    margin:0;
    font-family:Arial;
    background:#f4f6f9;
}

.menu{
    display:flex;
    background:#0b2d4d;
}

.menu a{
    color:white;
    padding:15px 20px;
    text-decoration:none;
    font-weight:bold;
}

.menu a:hover{
    background:#1f7a8c;
}

.contenu{
    padding:20px;
}

h2{
    color:#0b2d4d;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    margin-top:15px;
}

th{
    background:#0b2d4d;
    color:white;
    padding:10px;
}

td{
    border:1px solid #ddd;
    padding:10px;
}


/* =========================
   BOUTON WHATSAPP
========================= */

.whatsapp-button{
    position:fixed;

    right:20px;
    bottom:20px;

    width:60px;
    height:60px;

    border-radius:50%;

    background:#25D366;

    color:white;

    display:flex;
    align-items:center;
    justify-content:center;

    text-decoration:none;

    font-size:30px;

    box-shadow:0 4px 10px rgba(0,0,0,0.25);

    z-index:9999;

    transition:transform 0.2s;
}

.whatsapp-button:hover{
    transform:scale(1.1);
}


/* =========================
   DECONNEXION
========================= */

.logout{
    margin-left:auto;
    background:#c0392b;
}

.logout:hover{
    background:#922b21 !important;
}

</style>

</head>

<body>


<!-- =========================
     MENU UTILISATEUR
========================= -->

<div class="menu">

    <a href="index.php?page=clients">
        Clients
    </a>

    <a href="index.php?page=affectations">
        Affectations
    </a>

    <a href="index.php?page=dossiers_travail">
        Dossiers
    </a>

    <a href="index.php?page=gerants">
        Gérants
    </a>

    <a href="index.php?page=revenu">
        Revenus
    </a>

    <!-- PAGE LUMICASH -->

    <a href="lumicash.php">
        💳 Lumicash
    </a>


    <!-- DECONNEXION -->

    <a href="../logout.php" class="logout">
        Déconnexion
    </a>

</div>


<!-- =========================
     BOUTON WHATSAPP
========================= -->

<a
    href="https://wa.me/25766780367?text=Bonjour%20je%20voudrais%20avoir%20des%20informations%20sur%20les%20services%20de%20l'agence."
    target="_blank"
    class="whatsapp-button"
    title="Contacter l'agence sur WhatsApp"
>
    💬
</a>


<!-- =========================
     CONTENU
========================= -->

<div class="contenu">