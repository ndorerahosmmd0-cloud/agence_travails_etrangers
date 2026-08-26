<?php
include("connexion.php");
?>

<h2>Liste des Offres d'Emploi</h2>

<a class="btn" href="ajout_offre.php">
Ajouter une offre
</a>

<br><br>

<table border="1" width="100%" cellspacing="0" cellpadding="10">

<tr>
    <th>Code Offre</th>
    <th>Pays</th>
    <th>Poste</th>
    <th>Salaire Mensuel</th>
    <th>Niveau Requis</th>
    <th>Actions</th>
</tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM offres_emploi");

if(!$result)
{
    die(mysqli_error($conn));
}

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['code_offre']; ?></td>
<td><?php echo $row['pays']; ?></td>
<td><?php echo $row['poste']; ?></td>
<td><?php echo $row['salaire_mensuel']; ?></td>
<td><?php echo $row['niveau_requis']; ?></td>

<td>

<a class="btn"
href="modifier_offre.php?id=<?php echo $row['id_offre']; ?>">
Modifier
</a>

<a class="btn-danger"
href="supprimer_offre.php?id=<?php echo $row['id_offre']; ?>"
onclick="return confirm('Voulez-vous vraiment supprimer cette offre ?')">
Supprimer
</a>

</td>

</tr>

<?php
}
?>

</table>