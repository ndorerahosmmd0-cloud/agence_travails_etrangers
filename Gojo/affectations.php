<?php include("connexion.php"); ?>

<style>
body{font-family:Arial;background:#f4f6f9;margin:0}
.contenu{padding:20px}
h2{color:#0b2d4d}

input{
    padding:10px;
    width:300px;
    margin-bottom:10px;
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

<h2>Affectations</h2>

<input type="text" id="search" onkeyup="searchTable()" placeholder="Rechercher...">

<table id="tableData">
<tr>
<th>Code</th>
<th>Client</th>
<th>Offre</th>
<th>Date</th>
<th>Statut</th>
</tr>

<?php
$r = mysqli_query($conn,"
SELECT a.*,c.nom,c.prenom,o.code_offre
FROM affectations a
JOIN clients c ON a.id_client=c.id_client
JOIN offres_emploi o ON a.id_offre=o.id_offre
");

while($a = mysqli_fetch_assoc($r)){
?>
<tr>
<td><?= $a['code_affectation'] ?></td>
<td><?= $a['nom']." ".$a['prenom'] ?></td>
<td><?= $a['code_offre'] ?></td>
<td><?= $a['date_debut'] ?></td>
<td><?= $a['statut'] ?></td>
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
        let tds = tr[i].getElementsByTagName("td");
        let show = false;

        for(let j=0;j<tds.length;j++){
            if(tds[j] && tds[j].innerText.toUpperCase().includes(filter)){
                show = true;
            }
        }

        tr[i].style.display = show ? "" : "none";
    }
}
</script>