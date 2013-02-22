<?php
include './functions/core-functions.php';
//if not logged in, redirect to login page
startSession();
if (!isset($_SESSION['registrationId'])){
    header("Location:./index.php");
}

//include config file and database
include './config.php';
include './includes/db-connect.php';

/* include classes to generate the page */
include './class/navbar.php';
include './class/page.php';
include './class/processFilePage.php';
include './class/UploadException.php';

$navbar = new Navbar('./');
$page = new ProcessFilePage("./", "Singapore Business Case Competition 2013",$navbar);

$db = DBConnect();

//check if file has been posted to this page
if( isset($_FILES['userfile'])){
    try{    
        $uploaddir = './uploads/';        
        $uploadFileName = 'SBCC2013-'.$_SESSION['registrationId'];
        //get the suffix of file
        $baseName = basename($_FILES['userfile']['name']);
        $suffix = substr($baseName, (strrpos($baseName, ".") - strlen($baseName)));
        //append the ID to the next file submitted
        $uploadFile = $uploaddir.$uploadFileName.$suffix;

        //if file upload has no error
        if ($_FILES['userfile']['error'] === UPLOAD_ERR_OK) { 
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile)) {
                //write into database
                //set the 'is_latest' attribute of other attempts to 0
                $sql = "UPDATE submission SET is_latest=0 WHERE registration_id=".$_SESSION['registrationId'];
                $result = $db->query($sql);
                //insert the latest submission
                $sql = "INSERT INTO submission (time_uploaded, registration_id, is_latest, file_name) VALUES(".
                        "NOW(),".
                        $_SESSION['registrationId'].",".
                        "1,".
                        "'".$uploadFileName.$suffix."')";
                $result = $db->query($sql);
                if ($result){
                    generateEmail($db);
                }
                else{
                     $page->setErrorMessage("Error in writing to datbase");
                }
            } else {
                $page->setErrorMessage("Possible file upload attack!\n");
            }
        } 
        else { 
            throw new UploadException($_FILES['userfile']['error']); 
        } 
    }
    catch (UploadException $e){
        $page->setErrorMessage($e->getMessage());
    }    
}
else{
    $page->setErrorMessage("No file being uploaded");    
}

$page->generatePage();
$db->close();

function generateEmail($db){
    //query database to get the team name
    $sqlTeamName = "SELECT team_name FROM registration WHERE registration_id=".$_SESSION['registrationId'];
    $resultTeamName = $db->query($sqlTeamName);
    $rowTeamName = $resultTeamName->fetch_assoc();
    $teamName = $rowTeamName['team_name'];
    
    /* sending email  */
    include './plug-in/swift-mailer/lib/swift_required.php';
    //read the template from file
    $filePath = "./templates/submission.html";
    $emailContent = getContentFromFile($filePath);
    //replace with tean name
    $emailContent = str_replace('{TEAM_NAME}', $teamName ,$emailContent);
    //send out the email
    $transport = Swift_MailTransport::newInstance();
    $mailer = Swift_Mailer::newInstance($transport);
    $message = Swift_Message::newInstance('SBCC - Case Submission Confirmation')
            ->setFrom(array('info@sgbcc.com.sg' => 'SBCC Organising Committee'))
            ->setTo(array($_SESSION['userEmail'] => $teamName))
            ->setBody($emailContent,'text/html')
    ;
    $result = $mailer->send($message);
    
}
?>
