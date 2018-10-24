<?php

  class Module extends connectDB{
    private $id_uemod;
    private $id_form;
    private $classif;
    private $nom;
    private $label;

      public function __construct($id_uemod, $id_form, $classif, $nom, $label)
      {
          $this->id_uemod = $id_uemod;
          $this->id_form = $id_form;
          $this->classif = $classif;
          $this->nom = $nom;
          $this->label = $label;
      }




//    public function __construct(){
//      parent::__construct();
//    }

    public static function getAllModule()
    {
      $db = connectDb::dbConnect();
      $module = $db->prepare('SELECT * FROM `uemodule`');
      $module->execute();
      return $module;
    }
    
  }

?>