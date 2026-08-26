<?php
include("connexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM revenu WHERE id_revenu='$id'";
$res = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($res);

if(isset($_POST['update'])){

    $m = $_POST['montant_total'];
    $pc = $_POST['part_client'];
    $pa = $_POST['part_agence'];
    $mois = $_POST['mois'];

    $update = "
        UPDATE revenu 
        SET montant_total='$m',
            part_client='$pc',
            part_agence='$pa',
            mois='$mois'
        WHERE id_revenu='$id'
    ";

    mysqli_query($conn,$update);

    header("Location: revenu.php");
}
?>

<h2>Modifier revenu</h2>

<form method="POST">
    <input type="text" name="montant_total" value="<?= $data['montant_total'] ?>"><br><br>

    <input type="text" name="part_client" value="<?= $data['part_client'] ?>"><br><br>

    <input type="text" name="part_agence" value="<?= $data['part_agence'] ?>"><br><br>

    <input type="text" name="mois" value="<?= $data['mois'] ?>"><br><br>

    <button type="submit" name="update">Modifier</button>
</form>