<?php 
/*controleur c1.php :
  fonctions-action de gestion (c1)
*/

function a11() {
	//require ("./modele/m1.php");	//accès aux fcts modèle de m1.php
    ini_set('display_errors', 1);
	//définition de variables PHP utiles pour le template
    require("././modele/Matiere.php");
    require("././modele/Periode.php");
    $matieres = getAllMatiere();
    $periodes = getAllPeriode();
	require ("./vue/layout/layout.tpl"); //layout lançant le template de vue du service
}

function a12() {
	//require ("./modele/m1.php");	
	
	require ("./vue/layout/layout.tpl"); //layout lançant le template de vue du service
}

?>
