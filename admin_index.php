<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: ../index_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <style>
        body {
            font-family: Arial;
            background: #ecf0f1;
            margin: 0;
        }

        .header {
            background: #e74c3c;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .menu {
            background: #2c3e50;
            padding: 10px;
        }

        .menu a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>

<div class="header">
    <h2>🔴 INTERFACE ADMIN</h2>
</div>

<div class="menu">
    <a href="../index.php?page=clients">Clients</a>
    <a href="../index.php?page=offres">Offres</a>
    <a href="../index.php?page=demandes">Demandes</a>
    <a href="../index.php?page=revenus">Revenus</a>
    <a href="../logout.php">Déconnexion</a>
</div>

<div class="content">
    <h3>Bienvenue Admin 👨‍💼</h3>
</div>

</body>
</html>