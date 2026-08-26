<?php

include("connexion.php");

if(isset($_POST['enregistrer']))
{

$sql="INSERT INTO offres_emploi
(
code_offre,
pays,
poste,
salaire_mensuel,
niveau_requis
)

VALUES
(
'".$_POST['code_offre']."',
'".$_POST['pays']."',
'".$_POST['poste']."',
'".$_POST['salaire']."',
'".$_POST['niveau']."'
)";

mysqli_query($conn,$sql);

header("Location:index_old.php?page=offres");
}

?>

<h2>Ajouter une Offre</h2>

<form method="post">

Code Offre<br>
<input type="text" name="code_offre" required>

<br><br>

Pays<br>
<input type="text" name="pays" required>

<br><br>

Poste<br>
<input type="text" name="poste" required>

<br><br>

Salaire Mensuel<br>
<input type="number" name="salaire" required>

<br><br>

Niveau Requis<br>

<select name="niveau">

<option value="faible">Faible</option>

<option value="moyen">Moyen</option>

<option value="élevé">Élevé</option>

</select>

<br><br>

<input type="submit"
name="enregistrer"
value="Enregistrer">

</form>