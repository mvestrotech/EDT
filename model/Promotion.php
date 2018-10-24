<?php
require_once('connectBD.php');

class Promotion extends connectDb {
    private $id_promo;
    private $id_form;
    private $num;
    private $label;

    public function __construct($id_promo, $id_form, $num, $label) {
        $this->id_promo = $id_promo;
        $this->id_form = $id_form;
        $this->num = $num;
        $this->label = $label;
    }

    function getAllPromotions()
    {
        $db = connectDb::dbConnect();
        $promotions = $db->prepare('SELECT * FROM `promotion`');
        $promotions->execute();

        return $promotions;
    }
}