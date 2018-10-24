<?php

require_once('connectBD.php');

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

    public function __construct($id_mat, $id_ue, $id_mod, $id_period, $nom, $label, $nbH, $couleur, $themes, $typeEns)
    {
        $this->id_mat = $id_mat;
        $this->id_ue = $id_ue;
        $this->id_mod = $id_mod;
        $this->id_period = $id_period;
        $this->nom = $nom;
        $this->label = $label;
        $this->nbH = $nbH;
        $this->couleur = $couleur;
        $this->themes = $themes;
        $this->typeEns = $typeEns;
    }


    function getAllMatiere()
    {
        $db = dbConnect();
        $matiere = $db->prepare('SELECT * FROM `matiere`');
        $matiere->execute();

        return $matiere;
    }
}