<?php

//If there is no constant defined called __config__, do not load this file
if(!defined('__CONFIG__')) {
    exit("You do not have a config file");
}

class Database{
    protected static $conn;

    private function __construct()
    {
        try {
            self::$conn = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_system', 'root', '');
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn->setAttribute(PDO::ATTR_PERSISTENT, false);
        } catch (PDOException $e) {
            echo "Could not connect to database";
            exit;
        }
    }

    public static function getConnection() {
        //If this instance was not been started, start it
        if (!self::$conn) {
            new Database();
        }

        //return the writeable db connection
        return self::$conn;
    }

}



?>