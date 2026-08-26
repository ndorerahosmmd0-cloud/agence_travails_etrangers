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

<h2>Gérants</h2>

<input type="text" id="search" onkeyup="searchTable()" placeholder="Rechercher...">

<table id="tableData">
<tr>
<th>Code</th>
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
</tr>

<?php
$r = mysqli_query($conn,"SELECT * FROM gerants");
while($g = mysqli_fetch_assoc($r)){
?>
<tr>
<td><?= $g['code_gerant'] ?></td>
<td><?= $g['nom'] ?></td>
<td><?= $g['prenom'] ?></td>
<td><?= $g['telephone'] ?></td>
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
        tr[i].style.display = tr[i].innerText.toUpperCase().includes(filter) ? "" : "none";
    }
}
</script>