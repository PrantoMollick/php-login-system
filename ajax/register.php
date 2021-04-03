<?php

    //Allow the config
    define('__CONFIG__', true);

    //required the config file
    require_once("../inc/config.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //always return reson format
        header('Content-Type: application/json');
        $dataArray = [];

        //MAKE SURE THE USER doest not exist.

        //make sure the user can be added and is added

        //Return the proper information back to javascript to redirect us
        $dataArray['redirect'] = './dashboard.php';
        $dataArray['name'] = "Kalob Taulien";

        echo json_encode($dataArray, JSON_PRETTY_PRINT);
        exit;
    } else {
        //Die. Kill the script. redireact the user, do something regardless
        exit('test');
    }



?>
