<?php
require 'model/connectDb.php';
class Groupe extends connectDb {

    private $id_grpe;
    private $id_promo;
    private $type_grpe;
    private $num_grpe;

    public function __construct($id_grpe, $id_promo, $type_grpe, $num_grpe)
    {
        $this->id_grpe = $id_grpe;
        $this->id_promo = $id_promo;
        $this->type_grpe = $type_grpe;
        $this->num_grpe = $num_grpe;
    }


    function getAllGroupe()
    {
        $db = connectDb::dbConnect();
        $groupes = $db->prepare('SELECT * FROM `groupe`');
        $groupes->execute();

        return $groupes;
    }
}
