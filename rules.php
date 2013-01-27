<?php

include './functions/core-functions.php';

startSession();

include './class/navbar.php';
include './class/page.php';
include './class/rulesPage.php';

$navbar = new Navbar('./');
$page = new RulesPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
