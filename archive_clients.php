<?php
include("connexion.php");
?>

<h2>Clients Archivés</h2>

<table>

<tr>
    <th>ID Archive</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Date de suppression</th>
</tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM archive_clients");

if(!$result)
{
    die("Erreur SQL : ".mysqli_error($conn));
}

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?= $row['id_archive']; ?></td>
    <td><?= $row['nom']; ?></td>
    <td><?= $row['prenom']; ?></td>
    <td><?= $row['date_suppression']; ?></td>
</tr>

<?php
}
?>

</table>