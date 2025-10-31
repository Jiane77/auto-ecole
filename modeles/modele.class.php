<?php
class Modele{
    private $unPdo;
    private $url;
    private $user;
    private $mdp;
public function __construct() {
        $this->url  = "mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv('DB_NAME');
        $this->user = getenv('DB_USER');
        $this->mdp  = getenv('DB_PASS');  

        try {
            $this->unPdo = new PDO($this->url, $this->user, $this->mdp);
            $this->unPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exp) {
            echo "Erreur de connexion: " . $exp->getMessage();
            die();
        }
    }
public function insert_moniteur($moniteur){
    $requete ="insert into moniteur (nommoniteur,prenommoniteur,telephone,emailmoniteur,experience,idvehicule)
    values(:nom,:prenom,:telephone,:email,:experience,:idvehicule)";
    $donnees=[
        ":nom"=>$moniteur['nommoniteur'],
        ":prenom"=>$moniteur['prenommoniteur'],
        ":telephone"=>$moniteur['telephone'],
        ":email"=>$moniteur['emailmoniteur'],
        ":experience"=>$moniteur['experience'],
        ":idvehicule"=>$moniteur['idvehicule']
    ];
    $exec=$this->unPdo->prepare($requete);
    $exec->execute($donnees);
}
public function selectAll_moniteur(){
    $requete="select * from moniteur";
    $exec=$this->unPdo->prepare($requete);
    $exec->execute();
    return $exec->fetchAll(PDO::FETCH_ASSOC);
}
public function update_moniteur($moniteur){
    $requete="update moniteur set 
    nommoniteur=:nom,
    prenommoniteur=:prenom,
    telephone= :telephone,
    emailmoniteur= :email,
    experience=:experience,
    idvehicule=:idvehicule
    where idmoniteur= :idmoniteur
    ";
     $donnees=[
        ":nom"=>$moniteur['nommoniteur'],
        ":prenom"=>$moniteur['prenommoniteur'],
        ":telephone"=>$moniteur['telephone'],
        ":email"=>$moniteur['emailmoniteur'],
        ":experience"=>$moniteur['experience'],
        ":idvehicule"=>$moniteur['idvehicule'],
        ":idmoniteur" => $moniteur['idmoniteur']
    ];
    $exec=$this->unPdo->prepare($requete);
    $exec->execute($donnees);
}
    public function insert_user($user){
    $hash = password_hash($user['mdp'], PASSWORD_DEFAULT);
    $requete = "INSERT INTO user (nomuser, prenomuser, email, mdp, roleuser)
                VALUES (:nom, :prenom, :email, :mdp, :roleuser)";
    $donnees = [
        ":nom" => $user['nomuser'],
        ":prenom" => $user['prenomuser'],
        ":email" => $user['email'],
        ":mdp" => $hash,
        ":roleuser" => $user['roleuser']
    ];
    $exec = $this->unPdo->prepare($requete);
    $exec->execute($donnees);
}
public function select_user($email,$mdp){
    $requete = "SELECT * FROM user WHERE email = :email";
    $donnees = [
        ":email" => $email
    ];
    $exec = $this->unPdo->prepare($requete);
    $exec->execute($donnees);
    $unUser=$exec->fetch(PDO::FETCH_ASSOC);
    if ($unUser && password_verify($mdp,$unUser['mdp'])) {
            return $unUser;
        } else {
            return null;
              }
}
public function update_user($user){
    if (!empty($user['mdp'])) {
        $hash = password_hash($user['mdp'], PASSWORD_DEFAULT);
    } else {
        $hash = $user['old_mdp']; 
    }
    $requete="update user set 
    nomuser= :nom,
    prenomuser=:prenom,
    email= :email,
    mdp= :mdp,
    roleuser= :roleuser
    where iduser= :iduser
    ";
    $donnees=[
        ":nom" => $user['nomuser'],
        ":prenom" => $user['prenomuser'],
        ":email" => $user['email'],
        ":mdp" => $hash,
        ":roleuser" => $user['roleuser'],
        ":iduser"=>$user['iduser'],
    ];
    $exec=$this->unPdo->prepare($requete);
    $exec->execute($donnees);
}
public function delete_user($iduser){
    $requete ="delete from user where iduser= :iduser;";
    $donnees =[
        ":iduser"=>$iduser
    ];
    $exec=$this->unPdo->prepare($requete);
    $exec->execute($donnees);
}
public function insert_vehicule($vehicule){
$requete ="INSERT into vehicule(marque ,modele,immatriculation,typevehicule,etat) values (:marque ,:modele,:immatriculation,:typevehicule,:etat);";
$donnees=[
    ":marque"=>$vehicule['marque'],
    ":modele"=>$vehicule['modele'],
    ":immatriculation"=>$vehicule['immatriculation'],
    ":typevehicule"=>$vehicule['typevehicule'],
    ":etat"=>$vehicule['etat'],
];
$exec=$this->unPdo->prepare($requete);
$exec->execute($donnees);
}
public function select_vehicule($idvehicule){
    $requete="select * from vehicule where idvehicule=:idvehicule;";
    $donnees=[
        ":idvehicule"=>$idvehicule
    ];
    $exec=$this->unPdo->prepare($requete);
    $exec->execute($donnees);
    return $exec->fetch(PDO::FETCH_ASSOC);
}
public function selectAll_vehicule(){
    $requete ="select * from vehicule;";
    $exec=$this->unPdo->prepare($requete);
    $exec->execute();
    return $exec->fetchAll(PDO::FETCH_ASSOC);

}
public function update_vehicule($vehicule){
    $requete="update vehicule set marque= :marque, modele=:modele, immatriculation=:immatriculation,typevehicule=:typevehicule,etat=:etat where idvehicule=:idvehicule";
    $donnees=[
    ":marque"=>$vehicule['marque'],
    ":modele"=>$vehicule['modele'],
    ":immatriculation"=>$vehicule['immatriculation'],
    ":typevehicule"=>$vehicule['typevehicule'],
    ":etat"=>$vehicule['etat'],
    ":idvehicule"=>$vehicule['idvehicule'],
    ];
    $exec=$this->unPdo->prepare($requete);
    $exec->execute($donnees);
}
public function delete_vehicule($idvehicule){
    $requete="delete from vehicule where idvehicule =:idvehicule";
    $donnees=[
        ":idvehicule"=> $idvehicule  
    ];
    $exec=$this->unPdo->prepare($requete);
    $exec->execute($donnees);
}
public function insert_formule($formule){
    $requete="INSERT INTO formule (nomformule,prix,descriptionformule) values(:nomformule,:prix,:descriptionformule); ";
    $donnees=[
    ":nomformule"=>$formule['nomFormule'],
    ":prix"=>$formule['prix'],
    ":descriptionformule"=>$formule['descriptionformule']   
    ];
    $exec=$this->unPdo->prepare($requete);
    $exec->execute($donnees);
}
public function select_formule($idformule){
    $requete="select nomformule,prix,descriptionformule from formule where idformule= :idformule";
    $donnees=[
         ":idformule"=>$idformule
    ];
    $exec=$this->unPdo->prepare($requete);
    $exec->execute($donnees);
    return $exec->fetch(PDO::FETCH_ASSOC);
}
public function update_formule($formule){
    $requete = "UPDATE formule SET 
                nomformule = :nomformule,
                prix = :prix,
                descriptionformule = :descriptionformule
                WHERE idformule = :idformule";
    $donnees = [
        ":nomformule" => $formule['nomformule'],
        ":prix" => $formule['prix'],
        ":descriptionformule" => $formule['descriptionformule'],
        ":idformule" => $formule['idformule']
    ];
    $exec = $this->unPdo->prepare($requete);
    $exec->execute($donnees);
}

public function delete_formule($idformule){
    $requete = "DELETE FROM formule WHERE idformule = :idformule";
    $donnees = [":idformule" => $idformule];
    $exec = $this->unPdo->prepare($requete);
    $exec->execute($donnees);
}
 public function insert_candidat($candidat) {
        $requete = "INSERT INTO candidat (nomcandidat, prenomcandidat, date_naissance, adresse, telephone, emailcandidat, date_inscription, id_formule)
                    VALUES (:nom, :prenom, :date_naissance, :adresse, :telephone, :email, :date_inscription, :id_formule)";
        $donnees = [
            ":nom" => $candidat['nomcandidat'],
            ":prenom" => $candidat['prenomcandidat'],
            ":date_naissance" => $candidat['date_naissance'],
            ":adresse" => $candidat['adresse'],
            ":telephone" => $candidat['telephone'],
            ":email" => $candidat['emailcandidat'],
            ":date_inscription" => $candidat['date_inscription'],
            ":id_formule" => $candidat['id_formule']
        ];
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
    }

    public function selectAll_candidat() {
        $requete = "SELECT c.*, f.nomformule 
                    FROM candidat c
                    LEFT JOIN formule f ON c.id_formule = f.idformule";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute();
        return $exec->fetchAll(PDO::FETCH_ASSOC);
    }

    public function select_candidat($idcandidat) {
        $requete = "SELECT * FROM candidat WHERE idcandidat = :idcandidat";
        $donnees = [":idcandidat" => $idcandidat];
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
        return $exec->fetch(PDO::FETCH_ASSOC);
    }

    public function update_candidat($candidat) {
        $requete = "UPDATE candidat SET 
                    nomcandidat = :nom, prenomcandidat = :prenom, date_naissance = :date_naissance,
                    adresse = :adresse, telephone = :telephone, emailcandidat = :email,
                    date_inscription = :date_inscription, id_formule = :id_formule
                    WHERE idcandidat = :idcandidat";
        $donnees = [
            ":nom" => $candidat['nomcandidat'],
            ":prenom" => $candidat['prenomcandidat'],
            ":date_naissance" => $candidat['date_naissance'],
            ":adresse" => $candidat['adresse'],
            ":telephone" => $candidat['telephone'],
            ":email" => $candidat['emailcandidat'],
            ":date_inscription" => $candidat['date_inscription'],
            ":id_formule" => $candidat['id_formule'],
            ":idcandidat" => $candidat['idcandidat']
        ];
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
    }

    public function delete_candidat($idcandidat) {
        $requete = "DELETE FROM candidat WHERE idcandidat = :idcandidat";
        $donnees = [":idcandidat" => $idcandidat];
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
    }

    public function insert_cours($cours) {
        $requete = "INSERT INTO cours (date_cours, heure, duree, idcandidat, idmoniteur, idvehicule)
                    VALUES (:date_cours, :heure, :duree, :idcandidat, :idmoniteur, :idvehicule)";
        $donnees = [
            ":date_cours" => $cours['date_cours'],
            ":heure" => $cours['heure'],
            ":duree" => $cours['duree'],
            ":idcandidat" => $cours['idcandidat'],
            ":idmoniteur" => $cours['idmoniteur'],
            ":idvehicule" => $cours['idvehicule']
        ];
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
    }

    public function selectAll_cours() {
        $requete = "SELECT c.*, ca.nomcandidat, ca.prenomcandidat, m.nommoniteur, v.modele
                    FROM cours c
                    JOIN candidat ca ON c.idcandidat = ca.idcandidat
                    JOIN moniteur m ON c.idmoniteur = m.idmoniteur
                    JOIN vehicule v ON c.idvehicule = v.idvehicule";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute();
        return $exec->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete_cours($idcours) {
        $requete = "DELETE FROM cours WHERE idcours = :idcours";
        $donnees = [":idcours" => $idcours];
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
    }
    public function insert_examen($examen) {
        $requete = "INSERT INTO examen (date_examen, resultat, idcandidat)
                    VALUES (:date_examen, :resultat, :idcandidat)";
        $donnees = [
            ":date_examen" => $examen['date_examen'],
            ":resultat" => $examen['resultat'],
            ":idcandidat" => $examen['idcandidat']
        ];
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
    }

    public function selectAll_examen() {
        $requete = "SELECT e.*, c.nomcandidat, c.prenomcandidat
                    FROM examen e
                    JOIN candidat c ON e.idcandidat = c.idcandidat";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute();
        return $exec->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete_examen($idexamen) {
        $requete = "DELETE FROM examen WHERE idexamen = :idexamen";
        $donnees = [":idexamen" => $idexamen];
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
    }
}
?>