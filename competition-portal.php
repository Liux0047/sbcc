<?php
include './functions/core-functions.php';

startSession();

include './class/navbar.php';
include './class/page.php';
include './class/CPPage.php';

$navbar = new Navbar('./');
$page = new CPPage("./", "Singapore Business Case Competition 2013",$navbar);

if (!$page->isLoggedIn()){
    header("Location:./index.php");
}

$page->generatePage();
?>
