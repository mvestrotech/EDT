<?php
require("./model/Periode.php");
class PeriodeController{

  //Retourne toutes les périodes
  public function index(){
    $periodes = Periode::getAllPeriodes();
    while($periode = $periodes -> fetch()){
      var_dump($periode);
    }
  }
}
?>