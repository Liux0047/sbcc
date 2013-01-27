<?php
include './functions/core-functions.php';

startSession();

include './class/navbar.php';
include './class/page.php';
include './class/registrationPage.php';

$navbar = new Navbar('./');
$page = new RegistrationPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();

?>
