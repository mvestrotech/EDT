<?php

require_once('connectBD.php');

function getAllPeriode()
{
    $db = dbConnect();
    $periode = $db->prepare('SELECT * FROM `period`');
    $periode->execute();

    return $periode;
}