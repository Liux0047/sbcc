<?php
include './functions/core-functions.php';

startSession();

include './class/navbar.php';
include './class/page.php';
include './class/OCPage.php';

$navbar = new Navbar('./');
$page = new OCPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
