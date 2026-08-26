<?php include("connexion.php"); ?>

<h2>Liste des Clients</h2>

<a class="btn" href="?page=clients&action=add">+ Ajouter Client</a>

<?php

if(isset($_GET['action']) && $_GET['action']=="add"){
?>

<form method="POST">
    Code Client <br>
    <input type="text" name="code_client" required><br>

    Nom <br>
    <input type="text" name="nom" required><br>

    Prénom <br>
    <input type="text" name="prenom" required><br>

    Téléphone <br>
    <input type="text" name="telephone" required><br>

    Compétence <br>
    <input type="text" name="competence"><br>

    Pays souhaité <br>
    <input type="text" name="pays"><br>

    <button class="btn" type="submit" name="save">Enregistrer</button>
</form>

<?php
}

if(isset($_POST['save'])){
    mysqli_query($conn,"
    INSERT INTO clients(code_client,nom,prenom,telephone,competence, pays_souhaite)
    VALUES(
        '$_POST[code_client]',
        '$_POST[nom]',
        '$_POST[prenom]',
        '$_POST[telephone]',
        '$_POST[competence]',
        '$_POST[pays]'
    )
    ");
    echo "<script>window.location='index_old.php?page=clients'</script>";
}

$result = mysqli_query($conn,"SELECT * FROM clients");

if(!$result)
{
    die("Erreur SQL : ".mysqli_error($conn));
}
?>

<table>
<tr>
<th>ID</th>
<th>Code</th>
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
<th>Actions</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?= $row['id_client'] ?></td>
<td><?= $row['code_client'] ?></td>
<td><?= $row['nom'] ?></td>
<td><?= $row['prenom'] ?></td>
<td><?= $row['telephone'] ?></td>
<td>
<a class="btn-danger"
href="index_old.php?page=delete_client&id=<?= $row['id_client']; ?>">
Supprimer
</a>
</td>
</tr>
<?php } ?>

</table>