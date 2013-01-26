<?php
include './class/navbar.php';
include './class/page.php';
include './class/FAQPage.php';

$navbar = new Navbar('./');
$page = new FAQPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
