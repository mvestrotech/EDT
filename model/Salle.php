<?php

require_once('connectBD.php');

function getAllSalle()
{
    $db = dbConnect();
    $salle = $db->prepare('SELECT * FROM `salle`');
    $salle->execute();

    return $salle;
}