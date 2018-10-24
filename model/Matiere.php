<?php

require_once('connectBD.php');

function getAllMatiere()
{
    $db = dbConnect();
    $matiere = $db->prepare('SELECT * FROM `matiere`');
    $matiere->execute();

    return $matiere;
}