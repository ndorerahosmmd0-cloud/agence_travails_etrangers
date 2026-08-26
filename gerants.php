<?php include("connexion.php"); ?>

<h2>Gérants</h2>

<a class="btn" href="?page=gerants&action=add">+ Ajouter Gérant</a>

<?php if(isset($_GET['action']) && $_GET['action']=="add"){ ?>

<form method="POST">

Code Gérant <br>
<input type="text" name="code_gerant"><br>

Nom <br>
<input type="text" name="nom"><br>

Prénom <br>
<input type="text" name="prenom"><br>

Téléphone <br>
<input type="text" name="telephone"><br>

<button class="btn" name="save">Enregistrer</button>

</form>

<?php } ?>

<?php
if(isset($_POST['save'])){
mysqli_query($conn,"
INSERT INTO gerants(code_gerant,nom,prenom,telephone)
VALUES(
'$_POST[code_gerant]',
'$_POST[nom]',
'$_POST[prenom]',
'$_POST[telephone]'
)");
echo "<script>location='index_old.php?page=gerants'</script>";
}
?>

<table>
<tr>
<th>Code</th>
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
</tr>

<?php
$r=mysqli_query($conn,"SELECT * FROM gerants");
while($g=mysqli_fetch_assoc($r)){
?>
<tr>
<td><?= $g['code_gerant'] ?></td>
<td><?= $g['nom'] ?></td>
<td><?= $g['prenom'] ?></td>
<td><?= $g['telephone'] ?></td>
</tr>
<?php } ?>
</table>