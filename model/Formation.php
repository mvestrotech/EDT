<?php
require 'model/connectDb.php';
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
        $db = connectDb::dbConnect();
        $formations = $db->prepare('SELECT * FROM `formation`');
        $formations->execute();

        return $formations;
    }
}