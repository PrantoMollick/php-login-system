<?php
    //If there is no constant defined called __config__, do not load this file
    if(!defined('__CONFIG__')) {
        exit("You do not have a config file");
    }

    //Out config is below


    //Include the DB.php file.
    $path = dirname(dirname(__file__));
    include_once "{$path}/classes/db.php";
    $conn = Database::getConnection();


?>