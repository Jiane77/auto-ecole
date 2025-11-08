<?php
$unCours= null;
if(isset($_GET['action']) && isset($_GET['idcours']) )
{
 $idcours = $_GET['idcours'];
 $action= $_GET['action'];
switch($action){
    case "edit" : 
        $unCours =$unControleur->selectWhere_cours($idcours);
        break;
    case "delete"  :
         $unControleur->delete_cours($idcours);
         break;
    }
}
require_once("vue/vue_insert_cours.php");
if(isset($_POST["Valider"])){
    $unControleur->insert_cours($_POST);
    echo"<br>insertion reussie du cours";

}
if(isset($_POST["Modifier"])) {
    $unControleur->update_cours($_POST);
    header("location: index.php?page=5");
}
if(isset($_POST['Filtrer'])){
    $filtre=$_POST['filtre'];
    $lesCours = $unControleur-> selectLike_cours($filtre);
} 
else{
   $lesCours = $unControleur-> selectAll_cours(); 
}
require_once("vue/vue_select_cours.php");
?>
