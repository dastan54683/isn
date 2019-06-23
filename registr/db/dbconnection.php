<?php
define('DB_HOST','localhost');
define('DB_NAME','idp');
define('DB_USER','root');
define('DB_PASSWORD','');


    try{
        $db = new PDO('mysql:host='.DB_HOST.'; charset=UTF8; dbname='.DB_NAME, DB_USER, DB_PASSWORD,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }     catch (PDOException $e){
        echo 'Ошибка в подключении<br>';
        echo $e;
    };
    function dd($data, $die = false){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if($die) die;
        
    }