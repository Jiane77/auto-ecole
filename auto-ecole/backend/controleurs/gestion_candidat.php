<?php
$unCandidat = null;
if(isset($_GET['action']) && isset($_GET['idcandidat']) )
{
 $idcandidat = $_GET['idcandidat'];
 $action= $_GET['action'];
switch($action){
    case "edit" : 
        $unCandidat =$unControleur->selectWhere_candidat($idcandidat);
        break;

    case "delete"  :
         $unControleur->delete_candidat($idcandidat);
         break;
    }
}

require_once("vue/vue_insert_candidat.php");

//insertion de la classe
if(isset($_POST["Valider"])){
    $unControleur->insert_candidat($_POST);
    echo"<br>insertion reussie du candidat";
}

//modification de la classe 
if(isset($_POST["Modifier"])) {
    $unControleur->update_candidat($_POST);
    //recharger la page
    header("location: index.php?page=3");
}
if(isset($_POST['Filtrer'])){
    $filtre=$_POST['filtre'];
    $lesCandidats = $unControleur-> selectLike_candidat($filtre);
} 
else{
   $lesCandidats = $unControleur-> selectAll_candidat(); 
}
require_once("vue/vue_select_candidat.php");
?>
