<?php
$unmoniteur = null;
if (isset($_POST["Valider"])) {
    $unControleur->insert_moniteur($_POST);
    header("location: index.php?page=2");
    exit();
}
if (isset($_POST["Modifier"])) {
    $unControleur->update_moniteur($_POST);
    header("location: index.php?page=2");
    exit();
}
if (isset($_GET['action']) && isset($_GET['idmoniteur'])) {
    $idmoniteur = $_GET['idmoniteur'];
    $action = $_GET['action'];

    switch ($action) {
        case "edit":
            $unmoniteur = $unControleur->selectWhere_moniteur($idmoniteur);
            break;
        case "delete":
            $unControleur->delete_moniteur($idmoniteur);
            header("location: index.php?page=2");
            exit();
    }
}
if (isset($_POST['Filtrer'])) {
    $filtre = $_POST['filtre'];
    $lesmoniteurs = $unControleur->selectLike_moniteur($filtre);
} else {
    $lesmoniteurs = $unControleur->selectAll_moniteur();
}
?>
<div class="pb-40">
    <?php
    require_once("vue/vue_insert_moniteur.php");
    require_once("vue/vue_select_moniteur.php");
    ?>
</div>
