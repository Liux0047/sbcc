<?php
$GLOBALS['localhost'] = true;
$siteUrl = 'http://localhost/sbcc2013';

//database info
function getDBConfig(){
    $DBInfo = array (
        'host' => 'localhost',
        'username' => 'root',
        'password' => 'password',
        'database' => 'sbcc_2013'
        );
    return $DBInfo;
}

?>
