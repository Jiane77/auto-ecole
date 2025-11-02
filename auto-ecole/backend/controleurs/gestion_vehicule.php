<?php
$unVehicule= null;
if(isset($_GET['action']) && isset($_GET['idvehicule']) )
{
 $idvehicule = $_GET['idvehicule'];
 $action= $_GET['action'];
switch($action){
    case "edit" : 
        $unVehicule =$unControleur->selectWhere_vehicule($idvehicule);
        break;

    case "delete"  :
         $unControleur->delete_vehicule($idvehicule);
         break;
    }
}

require_once("vue/vue_insert_vehicule.php");

//insertion de la classe
if(isset($_POST["Valider"])){
    $unControleur->insert_vehicule($_POST);
    echo"<br>insertion reussie du vehicule";

}
//modification de la classe 
if(isset($_POST["Modifier"])) {
    $unControleur->update_vehicule($_POST);
    //recharger la page
    header("location: index.php?page=4");
}
if(isset($_POST['Filtrer'])){
    $filtre=$_POST['filtre'];
    $lesVehicules = $unControleur-> selectLike_vehicule($filtre);
} 
else{
   $lesVehicules = $unControleur-> selectAll_vehicule(); 
}
require_once("vue/vue_select_vehicule.php");

?>
