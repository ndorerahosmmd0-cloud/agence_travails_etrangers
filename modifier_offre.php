<?php
include("connexion.php");

$id = intval($_GET['id']);

$result = mysqli_query($conn,
"SELECT * FROM offres_emploi WHERE id_offre=$id");

$row = mysqli_fetch_assoc($result);

if(isset($_POST['modifier']))
{
    $sql = "UPDATE offres_emploi SET
    code_offre='".$_POST['code_offre']."',
    pays='".$_POST['pays']."',
    poste='".$_POST['poste']."',
    salaire_mensuel='".$_POST['salaire_mensuel']."',
    niveau_requis='".$_POST['niveau_requis']."'
    WHERE id_offre=$id";

    if(mysqli_query($conn,$sql))
    {
        header("Location:index_old.php?page=offres");
        exit();
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Modifier Offre</title>

<style>

body{
    font-family:Arial;
    background:#f4f6f9;
}

.container{
    width:600px;
    margin:30px auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#003366;
}

input{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
}

.btn{
    background:#003366;
    color:white;
    border:none;
    padding:10px 20px;
    cursor:pointer;
    border-radius:5px;
}

.btn:hover{
    background:green;
}

</style>
</head>

<body>

<div class="container">

<h2>Modifier une Offre</h2>

<form method="post">

Code Offre<br>
<input type="text" name="code_offre"
value="<?= $row['code_offre']; ?>" required>

Pays<br>
<input type="text" name="pays"
value="<?= $row['pays']; ?>" required>

Poste<br>
<input type="text" name="poste"
value="<?= $row['poste']; ?>" required>

Salaire Mensuel<br>
<input type="number" step="0.01"
name="salaire_mensuel"
value="<?= $row['salaire_mensuel']; ?>" required>

Niveau Requis<br>
<input type="text" name="niveau_requis"
value="<?= $row['niveau_requis']; ?>" required>

<button class="btn" type="submit" name="modifier">
Modifier
</button>

</form>

</div>

</body>
</html>