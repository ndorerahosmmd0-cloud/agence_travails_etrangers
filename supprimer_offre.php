<?php

include("connexion.php");

$id = intval($_GET['id']);

mysqli_query($conn,
"DELETE FROM offres_emploi
WHERE id_offre=$id");

header("Location:index_old.php?page=offres");
exit();

?>