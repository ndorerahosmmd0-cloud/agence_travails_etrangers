<?php include("connexion.php"); ?>

<h2>Affectations</h2>

<a class="btn" href="?page=affectations&action=add">+ Ajouter Affectation</a>

<?php if(isset($_GET['action']) && $_GET['action']=="add"){ ?>

<form method="POST">

Code Affectation <br>
<input type="text" name="code_affectation"><br>

Client <br>
<select name="id_client">
<?php
$c=mysqli_query($conn,"SELECT * FROM clients");
while($cl=mysqli_fetch_assoc($c)){
?>
<option value="<?= $cl['id_client'] ?>">
<?= $cl['nom']." ".$cl['prenom'] ?>
</option>
<?php } ?>
</select><br>

Offre <br>
<select name="id_offre">
<?php
$o=mysqli_query($conn,"SELECT * FROM offres_emploi");
while($of=mysqli_fetch_assoc($o)){
?>
<option value="<?= $of['id_offre'] ?>">
<?= $of['code_offre'] ?>
</option>
<?php } ?>
</select><br>

Date début <br>
<input type="date" name="date_debut"><br>

Statut <br>
<select name="statut">
<option>Actif</option>
<option>En attente</option>
<option>Terminé</option>
</select><br>

<button class="btn" name="save">Enregistrer</button>

</form>

<?php } ?>

<?php
if(isset($_POST['save'])){
mysqli_query($conn,"
INSERT INTO affectations(code_affectation,id_client,id_offre,date_debut,statut)
VALUES(
'$_POST[code_affectation]',
'$_POST[id_client]',
'$_POST[id_offre]',
'$_POST[date_debut]',
'$_POST[statut]'
)");
echo "<script>window.location='index_old.php?page=affectations'</script>";
}
?>

<table>
<tr>
<th>Code</th>
<th>Client</th>
<th>Offre</th>
<th>Date</th>
<th>Statut</th>
</tr>

<?php
$r=mysqli_query($conn,"
SELECT a.*,c.nom,c.prenom,o.code_offre
FROM affectations a
JOIN clients c ON a.id_client=c.id_client
JOIN offres_emploi o ON a.id_offre=o.id_offre
");

while($a=mysqli_fetch_assoc($r)){
?>
<tr>
<td><?= $a['code_affectation'] ?></td>
<td><?= $a['nom']." ".$a['prenom'] ?></td>
<td><?= $a['code_offre'] ?></td>
<td><?= $a['date_debut'] ?></td>
<td><?= $a['statut'] ?></td>
</tr>
<?php } ?>
</table>