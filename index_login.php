<!DOCTYPE html>
<html>
<head>
    <title>Choix de connexion</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg,#2c3e50,#3498db);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            margin:0;
        }

        .box{
            background:white;
            padding:30px;
            border-radius:10px;
            text-align:center;
            width:350px;
            box-shadow:0 0 15px rgba(0,0,0,.3);
        }

        .btn{
            display:block;
            width:100%;
            padding:12px;
            margin:10px 0;
            text-decoration:none;
            color:white;
            border-radius:5px;
            font-weight:bold;
        }

        .admin{
            background:#e74c3c;
        }

        .user{
            background:#3498db;
        }
    </style>
</head>
<body>

<div class="box">

    <h2>Bienvenue</h2>

    <p>Choisissez votre type de connexion</p>

    <a class="btn admin" href="login.php?role=admin">
        👨‍💼 Se connecter Admin
    </a>

    <a class="btn user" href="login.php?role=user">
        👤 Se connecter Utilisateur
    </a>

</div>

</body>
</html>