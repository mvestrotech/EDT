<?php
require("./model/Module.php");

class SalleController{

  //Retourne tous les salles
  public function index(){
    $periodes = Periode::getAllSalles();
    require('vue/layout/edt.html');
  }
}
?>