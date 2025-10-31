<?php
require_once("modeles/modele.class.php");
 class Controleur{
    private $unModele;
    public function __construct(){
        $this->unModele = new Modele();
    }
    public function insert_moniteur($moniteur){
        $this->unModele->insert_moniteur($moniteur);
    }
    public function selectAll_moniteur() {
     return $this->unModele->selectAll_moniteur();  
    }
    public function update_moniteur($moniteur){
     $this->unModele->update_moniteur($moniteur);
    }
   public function insert_user($user){
        $this->unModele->insert_user($user);
    }
    public function select_user($email,$mdp){
       return $this->unModele->select_user($email,$mdp);
    }
    public function update_user($user){
        $this->unModele->update_user($user);
    }
    public function delete_user($iduser){
        $this->unModele->delete_user($iduser);
    }
    
}
?>