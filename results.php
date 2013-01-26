<?php
include './class/navbar.php';
include './class/page.php';
include './class/resultsPage.php';

$navbar = new Navbar('./');
$page = new ResultsPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
