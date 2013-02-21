<?php
include './functions/core-functions.php';
startSession();
//include config file and database
include './config.php';
include './includes/db-connect.php';
$db = DBConnect();

//sent password to competitior's email addresss


include './class/navbar.php';
include './class/page.php';
include './class/forgetPwd.php';

$navbar = new Navbar('./');
$page = new ForgetPwd("./", "Singapore Business Case Competition 2013",$navbar);

//if email has been entered
if (isset($_GET['userEmail'])){
    $userEmail = $_GET['userEmail'];
    generateEmail($db,$userEmail);
    $page->setPwdSent(true);
}

$page->generatePage();


function generateEmail($db, $userEmail){
    //query database to get the team name
    $sql = "SELECT team_name, password FROM registration WHERE team_email='".$userEmail."'";
    $result = $db->query($sql);
    $rowPwd = $result->fetch_assoc();
    $pwd = $rowPwd['password'];
    $teamName = $rowPwd['team_name'];
    
    /* sending email  */
    include './plug-in/swift-mailer/lib/swift_required.php';
    //read the template from file
    $filePath = "./templates/forget-pwd.html";
    $emailContent = getContentFromFile($filePath);
    //replace with tean name
    $emailContent = str_replace('{TEAM_NAME}', $teamName ,$emailContent);
    $emailContent = str_replace('{PASSWORD}', $pwd ,$emailContent);
    //send out the email
    $transport = Swift_MailTransport::newInstance();
    $mailer = Swift_Mailer::newInstance($transport);
    $message = Swift_Message::newInstance('SBCC - Case Submission Confirmation')
            ->setFrom(array('info@sgbcc.com.sg' => 'SBCC Organising Committee'))
            ->setTo(array($userEmail => $teamName))
            ->setBody($emailContent,'text/html')
    ;
    $resultEmail = $mailer->send($message);    
}
?>
