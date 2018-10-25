<?php
class connectDb{
    public static function dbConnect()
    {
        $hostname = "localhost";	//ou localhost
        $base= "proj";
        $loginBD= "root";	//ou "root"
        $passBD="";

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
}

?>
