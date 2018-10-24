<?php 
require("./model/Module.php");
class ModuleController{
  
  //Retourne tous les modules
  public function index(){
    $modules = Module::getAllModule();
      require 'vue/layout/edt.tpl';
  }
}
?>