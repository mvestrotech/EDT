<?php
require("./model/Module.php");

class ProfController{

  //Retourne tous les profs
  public function index(){
    $periodes = Periode::getAllProfs();
    require('vue/layout/edt.html');
  }
}
?>