<?php
$unExamen = null;
if (isset($_GET['action']) && isset($_GET['idexamen'])) {
    $idexamen = $_GET['idexamen'];
    $action = $_GET['action'];

    switch ($action) {
        case "edit":
            $unExamen = $unControleur->selectWhere_examen($idexamen);
            break;

        case "delete":
            $unControleur->delete_examen($idexamen);
            break;
    }
}
$lesCandidats = $unControleur->selectAll_candidat();

require_once("vue/vue_insert_examen.php");

if (isset($_POST["Valider"])) {
    $unControleur->insert_examen($_POST);
    echo "<br>Insertion réussie de l'examen.";
}

if (isset($_POST["Modifier"])) {
    $unControleur->update_examen($_POST);
    header("location: index.php?page=6");
}

if (isset($_POST['Filtrer'])) {
    $filtre = $_POST['filtre'];
    $lesExamens = $unControleur->selectLike_examen($filtre);
} else {
    $lesExamens = $unControleur->selectAll_examen();
}
require_once("vue/vue_select_examen.php");
?>
