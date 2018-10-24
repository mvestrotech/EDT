<?php
ini_set('display_errors', 1);
//hypothèse 2 paramètres d'entrée, controle et action, avec l'url de index.php
// exmple : index.php?controle=c1&action=a12

if (isset($_GET['controle']) & isset($_GET['action'])) {
		$controle = $_GET['controle'];
		require ('./controller/' . $controle . '.php');
		$cont = new $controle();
		$action= $_GET['action'];
		$cont->{$action}(); 
	}
else {
	// $controle = "ModuleController";
	// require ('./controller/' . $controle . '.php');	
	// $cont = new ModuleController();
	// $action= "index";
	require("vue/layout/edt.html");
	}
?>
