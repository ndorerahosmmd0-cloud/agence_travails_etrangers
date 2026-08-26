<?php include("connexion.php"); ?>

<h2>Dossiers de Travail</h2>

<a class="btn" href="?page=dossiers&action=add">+ Ajouter Dossier</a>

<?php if(isset($_GET['action']) && $_GET['action']=="add"){ ?>

<form method="POST" enctype="multipart/form-data">

Code Dossier <br>
<input type="text" name="code_dossier"><br>

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

Gérant <br>
<select name="id_gerant">
<?php
$g=mysqli_query($conn,"SELECT * FROM gerants");
while($gr=mysqli_fetch_assoc($g)){
?>
<option value="<?= $gr['id_gerant'] ?>">
<?= $gr['nom']." ".$gr['prenom'] ?>
</option>
<?php } ?>
</select><br>

Frais Total <br>
<input type="number" name="frais_total"><br>

Statut <br>
<input type="text" name="statut"><br>

Document <br>

<input type="file" name="document">

<br><br>

<button class="btn" name="save">Enregistrer</button>

</form>

<?php } ?>

<?php

if(isset($_POST['save']))
{

    /* Enregistrer le document */
    $document="";

    if(isset($_FILES['document']) && $_FILES['document']['error']==0)
    {
        $document=time()."_".$_FILES['document']['name'];

        move_uploaded_file(
            $_FILES['document']['tmp_name'],
            "uploads/".$document
        );
    }

    /* Enregistrer dans la base */
    mysqli_query($conn,"
    INSERT INTO dossiers_travail
    (
        code_dossier,
        id_client,
        id_gerant,
        frais_total,
        statut,
        document
    )

    VALUES
    (
        '$_POST[code_dossier]',
        '$_POST[id_client]',
        '$_POST[id_gerant]',
        '$_POST[frais_total]',
        '$_POST[statut]',
        '$document'
    )
    ");

    echo "<script>location='index_old.php?page=dossiers'</script>";

}

?>

<table>
<tr>
<th>Code</th>
<th>Client</th>
<th>Gérant</th>
<th>Frais</th>
<th>Statut</th>
<th>Document</th>
</tr>

<?php
$r=mysqli_query($conn,"
SELECT d.*,c.nom AS cnom,c.prenom,g.nom AS gnom,g.prenom gprenom
FROM dossiers_travail d
JOIN clients c ON d.id_client=c.id_client
JOIN gerants g ON d.id_gerant=g.id_gerant
");

while($d=mysqli_fetch_assoc($r)){
?>
<tr>
<td><?= $d['code_dossier'] ?></td>
<td><?= $d['cnom']." ".$d['prenom'] ?></td>
<td><?= $d['gnom']." ".$d['gprenom'] ?></td>
<td><?= $d['frais_total'] ?></td>
<td><?= $d['statut'] ?></td>
<td>

<?php

if($d['document']!="")
{
?>

<a class="btn"
href="uploads/<?php echo $d['document']; ?>"
download>

Télécharger

</a>

<?php
}
else
{
    echo "Aucun document";
}
?>

</td>
</tr>
<?php } ?>
</table>