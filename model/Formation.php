<?php

require_once('connectBD.php');

class Formation extends connectDb {

    private $id_form;
    private $nom;
    private $label;


    public function __construct($id_form, $nom, $label)
    {
        $this->id_form = $id_form;
        $this->nom = $nom;
        $this->label = $label;
    }


    function getAllFormation()
    {
        $db = dbConnect();
        $formation = $db->prepare('SELECT * FROM `formation`');
        $formation->execute();

        return $formation;
    }
}