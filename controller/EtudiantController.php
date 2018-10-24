<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 24/10/2018
 * Time: 20:13
 */

class EtudiantController extends Etudiant {

    public function index(){
        $etudiants = Etudiant::getAllEtudiant();
        require('vue/layout/edt.html');
    }
}