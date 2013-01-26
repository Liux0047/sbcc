<?php

include './class/navbar.php';
include './class/page.php';
include './class/judgesPage.php';

$navbar = new Navbar('./');
$page = new JudgesPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
