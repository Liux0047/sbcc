<?php

function DBConnect (){    
    $db_info = getDBConfig();
    $host = $db_info['host'];
    $username = $db_info['username'];
    $password = $db_info['password'];
    $database = $db_info['database'];
    @ $db = new mysqli($host, $username, $password, $database);

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database. Please try again later.';
        exit();
    }

    if (!$db->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $db->error);
    } 
    return $db;
}
?>
