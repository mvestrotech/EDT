<?php 
require("../modele/Module.php");
class ModuleController{
  
  //Retourne tous les modules
  public function index(){
    $service = new ModuleService();
    $modules = $service->getAll();
    return json_encode($modules);
  }
}
?>