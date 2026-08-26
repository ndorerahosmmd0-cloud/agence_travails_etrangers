<?php

include("connexion.php");

if(isset($_POST['enregistrer']))
{

$sql="INSERT INTO demandes
(
code_demande,
id_client,
id_gerant,
date_demande,
statut
)

VALUES
(
'".$_POST['code_demande']."',
'".$_POST['id_client']."',
'".$_POST['id_gerant']."',
'".$_POST['date_demande']."',
'".$_POST['statut']."'
)";

mysqli_query($conn,$sql);

header("Location:index_old.php?page=demandes");

}

?>

<h2>Ajouter une Demande</h2>

<form method="post">

Code Demande

<br>

<input type="text"
name="code_demande"
required>

<br><br>

Client

<br>

<select name="id_client">

<?php

$clients=mysqli_query($conn,
"SELECT * FROM clients");

while($c=mysqli_fetch_assoc($clients))
{
?>

<option value="<?= $c['id_client']; ?>">

<?= $c['nom']." ".$c['prenom']; ?>

</option>

<?php } ?>

</select>

<br><br>

Gérant

<br>

<select name="id_gerant">

<?php

$gerants=mysqli_query($conn,
"SELECT * FROM gerants");

while($g=mysqli_fetch_assoc($gerants))
{
?>

<option value="<?= $g['id_gerant']; ?>">

<?= $g['nom']." ".$g['prenom']; ?>

</option>

<?php } ?>

</select>

<br><br>

Date Demande

<br>

<input type="date"
name="date_demande"
required>

<br><br>

Statut

<br>

<select name="statut">

<option>en cours</option>

<option>acceptée</option>

<option>refusée</option>

<option>validée</option>

</select>

<br><br>

<input
type="submit"
name="enregistrer"
value="Enregistrer"
class="btn">

</form>