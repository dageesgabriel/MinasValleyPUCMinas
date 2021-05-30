<?php

class dbconnection {

    public static $con;

    public static function conexao(){

        if(!isset(self::$con)){

            $host = 'localhost';
            $user = 'ti2cc';
            $pass = 'ti@ccc';
            $db = 'minasvalley';

            try{
                self::$con = new PDO("pgsql:host=$host;dbname=$db;", $user, $pass);
                self::$con->exec('SET CHARSET utf8');
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
        }
        return self::$con;
    }
}