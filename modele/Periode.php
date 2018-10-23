<?php

require_once('connectBD.php');

function getAllPeriode()
{
    $db = dbConnect();
    $periode = $db->prepare('SELECT * FROM `period`');
    $periode->execute();

    return $periode;
}

function getAllPeriodePromo()
{
    $db = dbConnect();
    $periode = $db->prepare('SELECT period.id_period, promotion.id_promo, period.label as "label_period", period.tDeb, period.tFin, promotion.label as "label_promo" FROM `period` INNER JOIN promotion ON promotion.id_promo = period.id_promo');
    $periode->execute();

    return $periode;
}