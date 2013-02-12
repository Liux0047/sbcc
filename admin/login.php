<?php
include '../functions/core-functions.php';

startSession();

include '../config.php';
include '../class/navbar.php';
include '../class/page.php';
include '../class/admin/adminNavbar.php';
include '../class/admin/adminPage.php';
include '../class/admin/loginPage.php';
include '../includes/db-connect.php';

$db = DBConnect();

$navbar = new AdminNavbar('../');

$page = new AdminLoginPage("../", "Singapore Business Case Competition 2013",$navbar, $db);

/* if user has input the login info */
if (isset($_POST['account']) && isset($_POST['password'])){
    $db = DBConnect();
    $account = $_POST['account'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE account = '$account' AND password='$password'";
    
    //query db to get the match
    $result = $db->query($sql);
    $numRows = $result->num_rows;
    if ($numRows){
        //create session for admin
        $_SESSION['account'] = $account;
        //redirect to competition portal
        header("Location:./index.php");
    }
    else{
        $page->setFailed(true);
    }
}

$page->generatePage();

?>
