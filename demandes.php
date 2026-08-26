<?php
include("connexion.php");
?>

<h2>Liste des Demandes</h2>

<a class="btn" href="ajout_demande.php">
Ajouter une demande
</a>

<br><br>

<table>

<tr>

<th>Code</th>
<th>Client</th>
<th>Gérant</th>
<th>Date</th>
<th>Statut</th>
<th>Actions</th>

</tr>

<?php

$sql="
SELECT d.*,
c.nom,
c.prenom,
g.nom AS nom_gerant,
g.prenom AS prenom_gerant

FROM demandes d

INNER JOIN clients c
ON d.id_client=c.id_client

INNER JOIN gerants g
ON d.id_gerant=g.id_gerant
";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?= $row['code_demande']; ?></td>

<td>
<?= $row['nom']." ".$row['prenom']; ?>
</td>

<td>
<?= $row['nom_gerant']." ".$row['prenom_gerant']; ?>
</td>

<td><?= $row['date_demande']; ?></td>

<td><?= $row['statut']; ?></td>

<td>

<a class="btn"
href="modifier_demande.php?id=<?= $row['id_demande']; ?>">
Modifier
</a>

</td>

</tr>

<?php } ?>

</table>