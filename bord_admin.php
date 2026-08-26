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
            margin: 0;
            font-family: Arial;
            background: #f4f6f9;
        }

        .header {
            background: #e74c3c;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 22px;
        }

        .menu {
            background: #2c3e50;
            padding: 15px;
            text-align: center;
        }

        .menu a {
            color: white;
            text-decoration: none;
            margin: 10px;
            padding: 10px 15px;
            background: #34495e;
            border-radius: 5px;
            display: inline-block;
        }

        .menu a:hover {
            background: #1abc9c;
        }

        .content {
            padding: 30px;
            display: flex;
            justify-content: center;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
    </style>
</head>

<body>

<div class="header">
    🔴 ADMIN DASHBOARD
</div>

<div class="menu">
    <a href="../index.php?page=clients">Clients</a>
    <a href="../index.php?page=offres">Offres</a>
    <a href="../index.php?page=demandes">Demandes</a>
    <a href="../index.php?page=revenus">Revenus</a>
    <a href="../logout.php">Déconnexion</a>
</div>

<div class="content">
    <div class="card">
        <h2>Bienvenue Admin 👨‍💼</h2>
        <p>Vous pouvez gérer toutes les données du système.</p>
    </div>
</div>

</body>
</html>