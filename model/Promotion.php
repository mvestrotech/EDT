<?php

require_once('connectBD.php');

function getAllPromotion()
{
    $db = dbConnect();
    $promotion = $db->prepare('SELECT * FROM `promotion`');
    $promotion->execute();

    return $promotion;
}