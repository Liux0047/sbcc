<?php
include './functions/core-functions.php';
startSesstion();
session_unset();
setcookie ("valid_member_id", "", time() - 3600);
setcookie ("valid_email", "", time() - 3600);
header('Location: ./index.php');
?>
