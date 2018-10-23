<?php

require_once('connectBD.php');

function getAllGroupe()
{
    $db = dbConnect();
    $groupe = $db->prepare('SELECT * FROM `groupe`');
    $groupe->execute();

    return $groupe;
}