<?php
/* writing to database */
//include config file and database
include './config.php';
include './includes/db-connect.php';

//$db = DBConnect();

//get all post data and 
//Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
$teamName = ($_POST['teamName']);
$teamEmail =  ($_POST['teamEmail']);
$contact =  ($_POST['contact']);
$password = $_POST['password'];      //special char in pwd should not be escaped
$teamSize = $_POST['teamSize'];

$members = array ();
for ($memberId = 1; $memberId <= $teamSize; $memberId ++){
    //for each member, get his post data
    $member = array(
        'name' => ($_POST["member".$memberId."Name"]),
        'email' => ($_POST["member".$memberId."Email"]),
        'inst' => $_POST["member".$memberId."Inst"],
        'course' => ($_POST["member".$memberId."Course"]),
        'YOG' => $_POST["member".$memberId."YOG"],
        'DR' =>  ($_POST["member".$memberId."DR"])
    );
    $members[$memberId] = $member;
}
//var_dump($members);
/*
//check if the email has already been regitered
$sqlCheckEmail = "select * from registration where team_email = '$teamEmail'";
$resultCheckEmail = $db->query($sqlCheckEmail);
//if there is a result
if ($resultCheckEmail->num_rows){
    die('The email has already been registered');
}
$resultCheckEmail->free();
/*
//get the current auto_increment Id
$result = $db->query("SHOW TABLE STATUS LIKE 'registration'");
$row = $result->fetch_assoc();
$nextId = $row['Auto_increment'];
$result->free();
 * 
 */

//write team info into database
$sqlTeam = "insert into registration (team_name, team_email, password, contact_no, team_size, time_registered, isqf, issf, isgf) values(".
        "'$teamName',".
        "'$teamEmail',".
        "'$password',".
        "'$contact',".
        "$teamSize,".
        "NOW(),".
        "0,0,0)";
/*
$resultTeam = $db->query($sqlTeam);
if (!$resultTeam){
    die('Error in writing team info to database.');
}
echo "<br>";
 * 
 */
//echo $sqlTeam;
/*
//write member info into database
for ($memberId = 1; $memberId <= $teamSize; $memberId ++){
    $isLeader = 0;
    if ($memberId == 1){
        $isLeader = 1;
    }    
    $sqlMember = "insert into member (registration_id, is_leader, name, email, institution, course, YOG, dietary_restriction) values(".
            "$nextId,".
            "$isLeader,".
            "'".$members[$memberId]['name']."',".
            "'".$members[$memberId]['email']."',".
            "'".$members[$memberId]['inst']."',".
            "'".$members[$memberId]['course']."',".
            "'".$members[$memberId]['YOG']."',".
            "'".$members[$memberId]['DR']."'".
            ")";
    //echo $sqlMember;
    $resultMember = $db->query($sqlMember);
    if (!$resultMember){
        die('Error in writing member info to database.');
    }        
}
/* end of writing to database */

/* sending email  */
include './plug-in/swift-mailer/lib/swift_required.php';
include './functions/core-functions.php';

//generate a regRef
$regRef = generateRegRef(1,$teamSize);

//read the template from file
$filePath = "./templates/confirmation.html";
$emailContent = getContentFromFile($filePath);

//generate member part content
$memEmail = '';
for($index=2; $index<=$teamSize; $index++){
    $filePath = "./templates/confirmation_member.html";
    $memEmailContent = getContentFromFile($filePath);   
    $memEmailContent = str_replace('{COUNT}', $index ,$memEmailContent);
    $memEmailContent = str_replace('{Member_Name}', $members[$index]['name'] ,$memEmailContent);
    $memEmailContent = str_replace('{Member_EmailAddress}', $members[$index]['email'] ,$memEmailContent);
    $memEmailContent = str_replace('{Member_Institution}', $members[$index]['inst'] ,$memEmailContent);
    $memEmailContent = str_replace('{Member_Course}', $members[$index]['course'] ,$memEmailContent);
    $memEmailContent = str_replace('{Member_YOG}', $members[$index]['YOG'] ,$memEmailContent);
    $memEmailContent = str_replace('{Member_Dietary}', $members[$index]['DR'] ,$memEmailContent);
    $memEmail .= $memEmailContent;
}

//generate leader and overall part of email
$emailContent = str_replace('{Registration_Ref}', $regRef ,$emailContent);
$emailContent = str_replace('{Team_Name}', $teamName ,$emailContent);
$emailContent = str_replace('{Team_EmailAddress}',$teamEmail ,$emailContent);
$emailContent = str_replace('{Team_ContactNo}',$contact ,$emailContent);
$emailContent = str_replace('{Leader_Name}', $members[1]['name'] ,$emailContent);
$emailContent = str_replace('{Leader_EmailAddress}' , $members[1]['email'] ,$emailContent);
$emailContent = str_replace('{Leader_Institution}', $members[1]['inst'] ,$emailContent);
$emailContent = str_replace('{Leader_Course}',  $members[1]['course'] ,$emailContent);
$emailContent = str_replace('{Leader_YOG}', $members[1]['YOG'] ,$emailContent);
$emailContent = str_replace('{Leader_Dietary}', $members[1]['DR'] ,$emailContent);
$emailContent = str_replace('{MEMBERS}', $memEmail ,$emailContent);


$transport = Swift_MailTransport::newInstance();
$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance('SBCC - Registration Confirmation')
        ->setFrom(array('info@sgbcc.com.sg' => 'SBCC Organising Committee'))
        ->setTo(array($teamEmail => $teamName))
        ->setBody($emailContent,'text/html')
        ->attach(Swift_Attachment::fromPath('./downloads/SBCC Preliminary Case 2013.pdf'))
;
//attache rules
$message->attach(Swift_Attachment::fromPath('./downloads/SBCC 2013 Rules and Regulations.pdf'));
$result = $mailer->send($message);
/* end of sending email  */

//$db->close();

/* generate the page */
include './class/navbar.php';
include './class/page.php';
include './class/processRegPage.php';

$navbar = new Navbar('./');
$page = new ProcessRegPage("./", "Singapore Business Case Competition 2013",$navbar);
$page->setRegRef($regRef);

$page->generatePage();

?>
