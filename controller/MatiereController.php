<?php
require("./model/Module.php");

class MatiereController{

  //Retourne tous les matières
  public function index(){
    $periodes = Periode::getAllMatieres();
    require('vue/layout/edt.html');
  }
}
?>