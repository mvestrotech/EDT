<?php

require_once('connectBD.php');

function getAllModule()
{
    $db = dbConnect();
    $module = $db->prepare('SELECT * FROM `uemodule`');
    $module->execute();

    return $module;
}

function getAllModuleFormation()
{
    $db = dbConnect();
    $module = $db->prepare('SELECT uemodule.id_uemod, uemodule.classif, uemodule.nom as "nom_module", uemodule.label, formation.id_form, formation.nom as "nom_form", formation.label FROM `uemodule` INNER JOIN formation ON formation.id_form = uemodule.id_form');
    $module->execute();

    return $module;
}