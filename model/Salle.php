<?php
require_once('connectBD.php');

class Salle extends connectDb{
    private $id_Salle;
    private $nom;
    private $label;
    private $batiment;
    private $type_salle;
    private $nb_postes;

    public function __construct($id_Salle, $nom, $label, $batiment, $type_salle, $nb_postes) {
        $this->id_Salle = $id_Salle;
        $this->nom = $nom;
        $this->label = $label;
        $this->batiment = $batiment;
        $this->type_salle = $type_salle;
        $this->nb_postes = $nb_postes;
    }

    function getAllSalles()
    {
        $db = connectDb::dbConnect();
        $salles = $db->prepare('SELECT * FROM `salle`');
        $salles->execute();

        return $salles;
    }

}

