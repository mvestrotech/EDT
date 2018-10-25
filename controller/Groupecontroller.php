<?php
require("./model/Module.php");

class GroupeController{

  //Retourne tous les groupes
  public function index(){
    $periodes = Periode::getAllGroupes();
    require('vue/layout/edt.html');
  }
}
?>