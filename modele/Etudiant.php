<?php

require_once('connectBD.php');

function getAllEtudiant()
{
    $db = dbConnect();
    $etudiant = $db->prepare('SELECT * FROM `etudiant`');
    $etudiant->execute();

    return $etudiant;
}