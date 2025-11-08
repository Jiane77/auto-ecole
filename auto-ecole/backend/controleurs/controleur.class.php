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
    public function selectWhere_moniteur($idmoniteur){
        return $this->unModele->selectWhere_moniteur($idmoniteur);
    }
    public function update_moniteur($moniteur){
     $this->unModele->update_moniteur($moniteur);
    }
    // Filtrer les moniteurs par nom ou prénom
    public function selectLike_moniteur($mot){
        return $this->unModele->selectLike_moniteur($mot);
    }
    public function delete_moniteur($idmoniteur){
        $this->unModele->delete_moniteur($idmoniteur);
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
    public function insert_vehicule($cvehicule){
        $this->unModele->insert_vehicule($cvehicule);
    }
    public function select_vehicule($idvehicule){
       return $this->unModele->select_vehicule($idvehicule);
    }
     public function selectWhere_vehicule($idvehicule){
        return $this->unModele->selectWhere_vehicule($idvehicule);
    }
    
    public function selectLike_vehicule($mot){
        return $this->unModele->selectLike_vehicule($mot);
    }
    public function selectAll_vehicule(){
       return $this->unModele->selectAll_vehicule();
    }
    public function update_vehicule($vehicule){
        $this->unModele->update_vehicule($vehicule);
    }
    public function delete_vehicule($idvehicule){
        $this->unModele->delete_vehicule($idvehicule);
    }
    public function insert_formule($formule){
        $this->unModele->insert_formule($formule);
    }
    public function select_formule($idformule){
      return  $this->unModele->select_formule($idformule);
    }
    public function selectAll_formule(){
      return  $this->unModele->selectAll_formule();
    }
    public function update_formule($formule){
     $this->unModele->update_formule($formule);
    }
    public function delete_formule($idformule){
        $this->unModele->delete_formule($idformule);
    }
    public function insert_candidat($candidat){
        $this->unModele->insert_candidat($candidat);
    }
    public function selectAll_candidat(){
       return $this->unModele->selectAll_candidat();
    }
    public function selectLike_candidat($mot){
        return $this->unModele->selectLike_candidat($mot);
    }
    public function select_candidat($idcandidat){
      return  $this->unModele->select_candidat($idcandidat);
    }
    public function selectWhere_candidat($idcandidat){
        return $this->unModele->selectWhere_candidat($idcandidat);
    }
    public function update_candidat($candidat){
    $this->unModele->update_candidat($candidat);
    }
    public function delete_candidat($idcandidat){
        $this->unModele->delete_candidat($idcandidat);
    }
    public function insert_cours($cours){
        $this->unModele->insert_cours($cours);
    }
    public function selectWhere_cours($idcours){
        return $this->unModele->selectWhere_cours($idcours);
    }
    public function selectLike_cours($mot){
        return $this->unModele->selectLike_cours($mot);
    }

    public function selectAll_cours(){
    return $this->unModele->selectAll_cours();
    }
    public function update_cours($cours){
    $this->unModele->update_cours($cours);
    }
    public function delete_cours($idcours){
    $this->unModele->delete_cours($idcours);
    }
    public function insert_examen($examen){
    $this->unModele->insert_examen($examen);
    }
    public function selectAll_examen(){
       return $this->unModele->selectAll_examen();
    }
    public function selectLike_examen($mot){
        return $this->unModele->selectLike_examen($mot);
    }
    public function selectWhere_examen($idexamen){
        return $this->unModele->selectWhere_examen($idexamen);
    }
    public function update_examen($examen){
    $this->unModele->update_examen($examen);
    }
    public function delete_examen($idexamen){
        $this->unModele->delete_examen($idexamen);
    }
}
?>