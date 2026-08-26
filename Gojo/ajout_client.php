<?php

include("connexion.php");

if(isset($_POST['enregistrer']))
{

$sql="INSERT INTO clients
(code_client,nom,prenom,telephone)

VALUES

(
'".$_POST['code_client']."',
'".$_POST['nom']."',
'".$_POST['prenom']."',
'".$_POST['telephone']."'
)";

mysqli_query($conn,$sql);

header("Location:clients.php");
}

include("header.php");

?>

<h2>Ajouter un Client</h2>

<form method="post">

Code Client

<br>

Client :

<select name="id_client">

<?php

$clients = mysqli_query($conn,"SELECT * FROM clients");

while($c = mysqli_fetch_assoc($clients))
{
?>

<option value="<?php echo $c['id_client']; ?>">
<?php echo $c['nom']." ".$c['prenom']; ?>
</option>

<?php
}
?>

</select>

<br><br>

Offre :

<select name="id_offre">

<?php

$offres = mysqli_query($conn,"SELECT * FROM offres_emploi");

while($o = mysqli_fetch_assoc($offres))
{
?>

<option value="<?php echo $o['id_offre']; ?>">
<?php echo $o['code_offre']; ?>
</option>

<?php
}
?>

</select>

<br><br>

Nom

<br>

<input type="text" name="nom">

<br><br>

Prénom

<br>

<input type="text" name="prenom">

<br><br>

Téléphone

<br>

<input type="text" name="telephone">

<br><br>

<input type="submit"
name="enregistrer"
value="Enregistrer">

</form>

<?php include("footer.php"); ?>