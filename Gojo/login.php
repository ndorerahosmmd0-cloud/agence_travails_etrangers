<?php
session_start();

if(isset($_POST['login'])){

    $user = $_POST['username'];

    // Connexion automatique sans vérification
    $_SESSION['user'] = $user;
    $_SESSION['role'] = "user";

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Gojo</title>

<style>
body{
    font-family:Arial;
    background:#f4f6f9;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

form{
    background:white;
    padding:20px;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
}

input{
    width:250px;
    padding:10px;
    margin:10px 0;
}

button{
    background:#0b2d4d;
    color:white;
    padding:10px;
    border:none;
    width:100%;
}

button:hover{
    background:#1f7a8c;
}
</style>

</head>

<body>

<form method="POST">

    <h2>Connexion Gojo</h2>

    <input type="text" name="username" placeholder="Entrez votre nom" required>

    <button type="submit" name="login">Se connecter</button>

</form>

</body>
</html>