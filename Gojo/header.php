<!DOCTYPE html>
<html>
<head>
<title>Gojo System</title>

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
</style>
</head>

<body>

<div class="menu">

<a href="index.php?page=clients">Clients</a>
<a href="index.php?page=affectations">Affectations</a>
<a href="index.php?page=dossiers_travail">Dossiers</a>
<a href="index.php?page=gerants">Gérants</a>
<a href="index.php?page=revenu">Revenus</a>

<a href="../logout.php" style="margin-left:auto;background:#c0392b;">
    Déconnexion
</a>

</div>

<div class="contenu">