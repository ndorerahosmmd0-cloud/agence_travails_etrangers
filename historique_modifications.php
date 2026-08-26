<?php
include("connexion.php");
?>

<h2>Historique des Modifications</h2>

<table>

<tr>

<th>ID</th>
<th>Code Client</th>
<th>Ancien Statut</th>
<th>Nouveau Statut</th>
<th>Date Modification</th>

</tr>

<?php

$result=mysqli_query($conn,
"SELECT * FROM historique_modifications
ORDER BY date_modification DESC");

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?= $row['id_historique']; ?></td>

<td><?= $row['code_client']; ?></td>

<td><?= $row['ancien_statut']; ?></td>

<td><?= $row['nouveau_statut']; ?></td>

<td><?= $row['date_modification']; ?></td>

</tr>

<?php } ?>

</table>