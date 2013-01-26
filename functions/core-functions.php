<?php

function getContentFromFile($path){
    // get contents of a file into a string
    $filename = $path;
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    return $contents;
}
?>
