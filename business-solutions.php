<?php
include './class/navbar.php';
include './class/page.php';
include './class/BSPage.php';

$navbar = new Navbar('./');
$page = new BSPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
