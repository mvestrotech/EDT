<?php

require_once('connectBD.php');

function getAllFormation()
{
    $db = dbConnect();
    $formation = $db->prepare('SELECT * FROM `formation`');
    $formation->execute();

    return $formation;
}