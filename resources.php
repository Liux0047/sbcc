<?php
include './class/navbar.php';
include './class/page.php';
include './class/resourcesPage.php';

$navbar = new Navbar('./');
$page = new ResourcesPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
