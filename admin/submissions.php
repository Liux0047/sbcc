<?php
include '../functions/core-functions.php';
startSession();

include '../config.php';
include '../includes/db-connect.php';
include '../class/navbar.php';
include '../class/page.php';
include '../class/admin/adminNavbar.php';
include '../class/admin/adminPage.php';
include '../class/admin/submissionPage.php';


$db = DBConnect();

$navbar = new AdminNavbar('../');
$page = new SubmissionPage("../", "Singapore Business Case Competition 2013",$navbar,$db);

//redirect to log in page if not logged in
if (!$page->isLoggedIn()){
    header("Location:./login.php");
}

$page->generatePage();
?>
