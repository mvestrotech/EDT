<?php
require("./model/Module.php");

class PromotionController{

  //Retourne tous les promotions
  public function index(){
    $periodes = Periode::getAllPromotions();
    require('vue/layout/edt.html');
  }
}
?>