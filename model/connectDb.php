<?php
class connectDb{
    public static function dbConnect()
    {
        $hostname = "localhost";	//ou localhost
        $base= "proj";
        $loginBD= "root";	//ou "root"
<<<<<<< HEAD
        $passBD="";
=======
        $passBD= "";
>>>>>>> 2c952d425d13d2ea3c8393f6db0a5c01da67cb82

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
