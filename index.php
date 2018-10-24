<?php
ini_set('display_errors', 1);
//hypothèse 2 paramètres d'entrée, controle et action, avec l'url de index.php
// exmple : index.php?controle=c1&action=a12

if (isset($_GET['controle']) & isset($_GET['action'])) {
 	$controle = $_GET['controle'];
	$action= $_GET['action'];
	}
else { //absence de paramètres : prévoir des valeurs par défaut
	$controle = "ModuleController";
	require ('./controller/' . $controle . '.php');	
	$cont = new ModuleController();
	$action= "index";
	}
	
//inclure le fichier php de contrôle 
//et lancer la fonction-action issue de ce fichier.

	$cont->{$action}(); 
?>
