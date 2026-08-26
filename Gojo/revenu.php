<?php include("connexion.php"); ?>

<style>
body{font-family:Arial;background:#f4f6f9;margin:0}
.contenu{padding:20px}
h2{color:#0b2d4d}

input{
    padding:10px;
    width:300px;
    margin-bottom:10px;
    border:1px solid #ccc;
    border-radius:5px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th{
    background:#0b2d4d;
    color:white;
    padding:10px;
}

td{
    border:1px solid #ddd;
    padding:10px;
}
</style>

<div class="contenu">

<h2>Revenus</h2>

<input type="text" id="search" onkeyup="searchTable()" placeholder="Rechercher un revenu...">

<?php
$sql = "
SELECT r.*, c.nom, c.prenom
FROM revenu r
JOIN clients c ON r.id_client = c.id_client
";

$r = mysqli_query($conn,$sql);

if(!$r){
    die("Erreur SQL : " . mysqli_error($conn));
}
?>

<table id="tableData">
<tr>
<th>Client</th>
<th>Montant total</th>
<th>Part client</th>
<th>Part agence</th>
<th>Mois</th>
</tr>

<?php while($rv = mysqli_fetch_assoc($r)){ ?>

<tr>
<td><?= $rv['nom']." ".$rv['prenom'] ?></td>
<td><?= $rv['montant_total'] ?></td>
<td><?= $rv['part_client'] ?></td>
<td><?= $rv['part_agence'] ?></td>
<td><?= $rv['mois'] ?></td>
</tr>

<?php } ?>

</table>

</div>

<script>
function searchTable(){
    let input = document.getElementById("search");
    let filter = input.value.toUpperCase();
    let table = document.getElementById("tableData");
    let tr = table.getElementsByTagName("tr");

    for(let i=1;i<tr.length;i++){
        let text = tr[i].innerText.toUpperCase();

        if(text.indexOf(filter) > -1){
            tr[i].style.display = "";
        }else{
            tr[i].style.display = "none";
        }
    }
}
</script>