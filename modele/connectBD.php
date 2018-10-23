<?php
function dbConnect()
{
    $hostname = "vs-wamp";	//ou localhost
    $base= "pweb18_";
    $loginBD= "econtact";	//ou "root"
    $passBD="econtact";

    try
    {
        $db = new PDO("mysql:server=$hostname; dbname=$base", "$loginBD", "$passBD");
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

?>
