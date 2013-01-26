<?php

include './class/navbar.php';
include './class/page.php';
include './class/sponsorsPage.php';

$navbar = new Navbar('./');
$page = new SponsorsPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
