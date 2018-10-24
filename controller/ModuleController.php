<?php 
require("./model/Module.php");
class ModuleController{
  
  //Retourne tous les modules
  public function index(){
    $modules = Module::getAllModule();
    var_dump($modules->fetch());
    while ($module = $modules->fetch()){
      echo $module['nom'] . "</br>";
    }
    
  }
}
?>