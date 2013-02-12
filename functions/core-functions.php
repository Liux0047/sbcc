<?php

function getContentFromFile($path){
    // get contents of a file into a string
    $filename = $path;
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    return $contents;
}

function startSession(){
    //start sesstion
    if(session_id() == '') {
        session_start(); 
    }
}

function generateRegRef($nextId,$teamSize){
    $regRef = str_pad($nextId,4,"0",STR_PAD_LEFT );       //produce 0001
    switch($teamSize){
        case '3':
            $regRef = 'SGB'.$regRef;
            break;	
        case '4':
            $regRef = 'SGC'.$regRef;
            break;	
    }
    return $regRef;
}   //produces SGB0001

function convertTimeZone($date){
    return date("F j, Y, g:i a", strtotime("$date + 16 hours"));
}
?>
