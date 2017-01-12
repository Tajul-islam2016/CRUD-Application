<?php

include 'config.php';

class DB{
    private static $pdo;
    private static $dsn = "mysql:dbname=".DB_NAME."; host=".DB_HOST;
    
    public static function connection(){
        if(!isset(self::$pdo)){
            try{
                 self::$pdo = new PDO(self::$dsn, DB_USER, DB_PASS);
            } catch (PDOException $ex) {
                echo "Connection Failed.".$ex->getMessage()."<br/>";
            }
        }
        return self::$pdo;
    }
    
    public static function prepare($sql){
        return self::connection()->prepare($sql);
    }
}
?>
