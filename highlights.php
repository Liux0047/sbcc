<?php

include './functions/core-functions.php';

startSession();

include './class/navbar.php';
include './class/page.php';
include './class/highlightsPage.php';

$navbar = new Navbar('./');
$page = new HighlightsPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
