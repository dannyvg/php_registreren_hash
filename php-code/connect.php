<?php

require_once 'config.php';

class connection
{
    public static function make($host, $db, $user, $password)
    {
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        try{
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            return new PDO($dsn, $user, $password, $options);
        }

        catch(PDOException $e)
        {
            die($e->getMessage());
        }

    }
}

return connection::make($host, $db, $user, $password);
?>