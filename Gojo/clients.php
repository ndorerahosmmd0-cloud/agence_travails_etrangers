<?php include("connexion.php"); ?>

<style>
body{font-family:Arial;background:#f4f6f9;margin:0}
.contenu{padding:20px}
h2{color:#0b2d4d}

.search-box{
    margin-bottom:15px;
}

input{
    padding:10px;
    width:300px;
    border:1px solid #ccc;
    border-radius:5px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    margin-top:15px;
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

<h2>Liste des Clients</h2>

<div class="search-box">
<input type="text" id="search" onkeyup="searchTable()" placeholder="Rechercher un client...">
</div>

<table id="tableClient">
<tr>
<th>ID</th>
<th>Code</th>
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
<th>Pays</th>
</tr>

<?php
$r = mysqli_query($conn,"SELECT * FROM clients");
while($c = mysqli_fetch_assoc($r)){
?>
<tr>
<td><?= $c['id_client'] ?></td>
<td><?= $c['code_client'] ?></td>
<td><?= $c['nom'] ?></td>
<td><?= $c['prenom'] ?></td>
<td><?= $c['telephone'] ?></td>
<td><?= $c['pays'] ?></td>
</tr>
<?php } ?>

</table>

</div>

<script>
function searchTable(){
    let input = document.getElementById("search");
    let filter = input.value.toUpperCase();
    let table = document.getElementById("tableClient");
    let tr = table.getElementsByTagName("tr");

    for(let i=1;i<tr.length;i++){
        let tds = tr[i].getElementsByTagName("td");
        let show = false;

        for(let j=0;j<tds.length;j++){
            if(tds[j]){
                if(tds[j].innerText.toUpperCase().indexOf(filter) > -1){
                    show = true;
                }
            }
        }

        tr[i].style.display = show ? "" : "none";
    }
}
</script>