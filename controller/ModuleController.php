<?php 
require("./model/Module.php");
class ModuleController {
  
  //Retourne tous les modules
  public function index(){
    $modules = Module::getAllModules();
    $array_json = array();
    while ($module = $modules->fetch()){
      $obj_json = array('id' => $module['id_uemod'],
      'nom' => $module['nom']);
      array_push($array_json,$obj_json);
    }
    echo  json_encode($array_json);
  }
}
?>