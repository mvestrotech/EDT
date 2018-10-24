<?php
require("./model/Module.php");
class PeriodeController{

  //Retourne toutes les périodes
  public function index(){
    $periodes = Periode::getAllPeriode();
    require('vue/layout/edt.html');
  }
}
?>