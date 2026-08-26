<?php
session_start();
include("connexion.php");

$role = $_GET['role'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>

    <style>
        body{
            font-family:Arial,sans-serif;
            background:linear-gradient(135deg,#2c3e50,#3498db);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            margin:0;
        }

        .box{
            background:white;
            width:350px;
            padding:30px;
            border-radius:10px;
            text-align:center;
            box-shadow:0 0 15px rgba(0,0,0,.3);
        }

        input{
            width:90%;
            padding:10px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:95%;
            padding:10px;
            border:none;
            background:#27ae60;
            color:white;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#2ecc71;
        }
    </style>
</head>
<body>

<div class="box">

<h2>
<?php echo ($role=="admin") ? "Connexion Administrateur" : "Connexion Utilisateur"; ?>
</h2>

<form method="post">

    <input type="text"
           name="login"
           placeholder="Login"
           required>

    <input type="password"
           name="password"
           placeholder="Mot de passe"
           required>

    <button type="submit" name="connecter">
        Se connecter
    </button>

</form>

</div>

</body>
</html>

<?php

if(isset($_POST['connecter']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    if($role == "admin")
    {
        $sql = "SELECT * FROM admin
                WHERE login='$login'
                AND password='$password'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1)
        {
            $_SESSION['admin'] = $login;

            header("Location: index_old.php");
            exit();
        }
        else
        {
            echo "<script>alert('Identifiants administrateur incorrects');</script>";
        }
    }

    else if($role == "user")
    {
        $sql = "SELECT * FROM utilisateurs
                WHERE login='$login'
                AND password='$password'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1)
        {
            $_SESSION['user'] = $login;

            header("Location: Gojo/index.php");
            exit();
        }
        else
        {
            echo "<script>alert('Identifiants utilisateur incorrects');</script>";
        }
    }
}
?>