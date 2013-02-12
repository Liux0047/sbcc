<?php
include './functions/core-functions.php';

startSession();

include './config.php';
include './class/navbar.php';
include './class/page.php';
include './class/loginPage.php';
include './includes/db-connect.php';

$navbar = new Navbar('./');
$page = new LoginPage("./", "Singapore Business Case Competition 2013",$navbar);

/* if user has input the login info */
if (isset($_POST['userEmail']) && isset($_POST['password'])){
    $db = DBConnect();
    $userEmail = $_POST['userEmail'];
    $password = $_POST['password'];
    $sql = "select * from registration where team_email = '$userEmail' and password='$password'";
    
    //query db to get the match
    $result = $db->query($sql);
    $numRows = $result->num_rows;
    if ($numRows){
        //create session for user
        $row = $result->fetch_assoc();
        $_SESSION['userEmail'] = $userEmail;
        $_SESSION['registrationId'] = $row['registration_id'];
        //redirect to competition portal
        header("Location:./competition-portal.php");
    }
    else{
        $page->setFailed(true);
    }
    $db->close();
}

$page->generatePage();

?>
