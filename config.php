<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'test');
    define('DB_PASSWORD', 'test123!');
    define('DB_NAME', 'cruddb');

    //db start
    $db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($db->connect_error){
        die("Connection failed:" .$db->connect_error);
    }
?>