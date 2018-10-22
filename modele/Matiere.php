<?php

require_once('connectBD.php');

function getAllMatiere()
{
    $db = dbConnect();
    $matiere = $db->prepare('SELECT id_uemod, nom FROM `uemodule`');
    $matiere->execute();

    return $matiere;
}
