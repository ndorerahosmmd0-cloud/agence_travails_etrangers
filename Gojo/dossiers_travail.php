<?php include("connexion.php"); ?>

<style>
body{font-family:Arial;background:#f4f6f9;margin:0}
.contenu{padding:20px}
h2{color:#0b2d4d}
input{padding:10px;width:300px;margin-bottom:10px}
table{width:100%;border-collapse:collapse;background:white}
th{background:#0b2d4d;color:white;padding:10px}
td{border:1px solid #ddd;padding:10px}
</style>

<div class="contenu">

<h2>Dossiers</h2>

<input type="text" id="search" onkeyup="searchTable()" placeholder="Rechercher...">

<table id="tableData">
<tr>
<th>Code</th>
<th>Client</th>
<th>Gérant</th>
<th>Frais</th>
<th>Statut</th>
</tr>

<?php
$r = mysqli_query($conn,"
SELECT d.*,c.nom AS cn,g.nom AS gn
FROM dossiers_travail d
JOIN clients c ON d.id_client=c.id_client
JOIN gerants g ON d.id_gerant=g.id_gerant
");

while($d = mysqli_fetch_assoc($r)){
?>
<tr>
<td><?= $d['code_dossier'] ?></td>
<td><?= $d['cn'] ?></td>
<td><?= $d['gn'] ?></td>
<td><?= $d['frais_total'] ?></td>
<td><?= $d['statut'] ?></td>
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
        tr[i].style.display = text.includes(filter) ? "" : "none";
    }
}
</script>