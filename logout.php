<?php
include './functions/core-functions.php';
startSession();
session_unset();
header('Location: ./index.php');
?>
