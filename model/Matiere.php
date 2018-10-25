<?php
require 'model/connectDb.php';
class Matiere extends connectDb {

    private $id_mat;
    private $id_ue;
    private $id_mod;
    private $id_period;
    private $nom;
    private $label;
    private $nbH;
    private $couleur;
    private $themes;
    private $typeEns;

    public static function getAllMatieres()
    {
        $db = connectDb::dbConnect();
        $matieres = $db->prepare('SELECT * FROM `matiere`');
        $matieres->execute();
        return $matieres;
    }

    public static function getMatieresByModule($id){
        $db = connectDb::dbConnect();
        $matieres = $db-prepare('SELECT * FROM `matiere` WHERE id_mod='.$id);
        $matieres->execute();
        return $matieres;
    }
}