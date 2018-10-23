<?php

require_once('connectBD.php');

function getAllProf()
{
    $db = dbConnect();
    $prof = $db->prepare('SELECT * FROM `prof`');
    $prof->execute();

    return $prof;
}