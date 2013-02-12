<?php
include '../functions/core-functions.php';

startSession();

include '../config.php';
include '../includes/db-connect.php';
include '../class/navbar.php';
include '../class/page.php';
include '../class/admin/adminNavbar.php';
include '../class/admin/adminPage.php';
include '../class/admin/teamsPage.php';

$db = DBConnect();

$navbar = new AdminNavbar('../');
$page = new TeamsPage("../", "Singapore Business Case Competition 2013",$navbar,$db);

//redirect to log in page if not logged in
if (!$page->isLoggedIn()){
    header("Location:./login.php");
}

//if page is called from a delete action
if (isset($_REQUEST['deleteId'])){
    $sqlValidate = "SELECT * FROM registration WHERE registration_id=".$_REQUEST['deleteId'];
    $resultValidate = $db->query($sqlValidate);
    $numRows = $resultValidate->num_rows;
    $sql = "DELETE FROM registration WHERE registration_id=".$_REQUEST['deleteId'];
    $result = $db->query($sql);
    if ($result && $numRows){
        $page->setIsDeleted(true);
    }
    else{
        $page->setIsDelteError(true);
    }
}
$page->generatePage();
?>
