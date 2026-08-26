<?php

include("connexion.php");

$id = intval($_GET['id']);

$result = mysqli_query($conn,
"SELECT * FROM demandes
WHERE id_demande=$id");

$row = mysqli_fetch_assoc($result);

if(isset($_POST['modifier']))
{
    mysqli_query($conn,
    "UPDATE demandes
    SET statut='".$_POST['statut']."'
    WHERE id_demande=$id");

    header("Location: index_old.php?page=demandes");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Modifier Demande</title>

<style>

body{
    font-family:Arial;
    background:#f4f6f9;
    margin:0;
    padding:0;
}

.container{
    width:500px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#003366;
}

label{
    font-weight:bold;
}

select{
    width:100%;
    padding:10px;
    margin-top:10px;
    margin-bottom:20px;
    border:1px solid #ccc;
    border-radius:5px;
}

.btn{
    background:#003366;
    color:white;
    border:none;
    padding:10px 20px;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;
}

.btn:hover{
    background:green;
}

.btn-retour{
    background:#555;
    color:white;
    padding:10px 20px;
    text-decoration:none;
    border-radius:5px;
    margin-left:10px;
}

.btn-retour:hover{
    background:#333;
}

</style>

</head>

<body>

<div class="container">

<h2>Modifier Statut Demande</h2>

<form method="post">

<label>Statut :</label>

<select name="statut">

<option value="en cours"
<?= ($row['statut']=="en cours") ? "selected" : "" ?>>
En cours
</option>

<option value="acceptée"
<?= ($row['statut']=="acceptée") ? "selected" : "" ?>>
Acceptée
</option>

<option value="refusée"
<?= ($row['statut']=="refusée") ? "selected" : "" ?>>
Refusée
</option>

<option value="validée"
<?= ($row['statut']=="validée") ? "selected" : "" ?>>
Validée
</option>

</select>

<button type="submit" name="modifier" class="btn">
Modifier
</button>

<a href="index_old.php?page=demandes" class="btn-retour">
Retour
</a>

</form>

</div>

</body>
</html>