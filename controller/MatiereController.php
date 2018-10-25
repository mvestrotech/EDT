<?php
require("./model/Module.php");

class MatiereController{

  //Retourne tous les matières
  public function index(){
    $periodes = Periode::getAllMatieres();
    $array_json = array();

    while ($periode = $periodes->fetch()){
      $obj_json = array('id' => utf8_encode($periode['id_mat']),
      'ue' => utf8_encode($periode['id_ue']),
      'module' => utf8_encode($periode['id_mod']),
      'periode' => utf8_encode($periode['id_period']),
      'nom' => utf8_encode($periode['nom']),
      'prenom' => utf8_encode($periode['label']),
      'nb Heure' => utf8_encode($periode['nbH']),
      'couleur' => utf8_encode($periode['couleur'])
      'theme' => utf8_encode($periode['themes'])
      'type' => utf8_encode($periode['typeEns'])
    
    );
      array_push($array_json,$obj_json);
    }
    echo  json_encode($array_json);
  }
}
?>