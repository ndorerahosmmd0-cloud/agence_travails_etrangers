<!DOCTYPE html>
<html>
<head>
<title>Agence Travail Étranger</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#f4f4f4;
}

/* MENU */
.menu{
    display:flex;
    background:#003366;
}

.menu a{
    color:white;
    padding:15px 25px;
    text-decoration:none;
}

.menu a:hover{
    background:green;
}

/* CONTENU */
.contenu{
    padding:20px;
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
    background:white;
    margin-top:15px;
}

th{
    background:#003366;
    color:white;
}

th,td{
    border:1px solid #ddd;
    padding:10px;
}

/* BOUTONS */
.btn{
    background:#003366;
    color:white;
    padding:8px 12px;
    text-decoration:none;
    border-radius:5px;
}

.btn:hover{
    background:green;
}

.btn-danger{
    background:red;
    color:white;
    padding:6px 10px;
    text-decoration:none;
    border-radius:5px;
}

form{
    background:white;
    padding:15px;
    margin-top:15px;
}

input,select{
    width:300px;
    padding:8px;
    margin-bottom:10px;
}

</style>
</head>

<body>

<div class="menu">
<a href="index_old.php?page=clients">Clients</a>
<a href="index_old.php?page=affectations">Affectations</a>
<a href="index_old.php?page=dossiers">Dossiers</a>
<a href="index_old.php?page=gerants">Gérants</a>
<a href="index_old.php?page=archives">Clients Archivés</a>
<a href="index_old.php?page=demandes">Demandes</a>
<a href="index_old.php?page=historique">Historique</a>
<a href="index_old.php?page=offres">Offres</a>
<a href="index_old.php?page=revenus">Revenus</a>
<a href="logout.php">Déconnexion</a>
</div>

<div class="contenu">