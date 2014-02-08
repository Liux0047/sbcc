<?php
//registration closed on 22th Feb
header("Location: https://docs.google.com/spreadsheet/viewform?formkey=dE82bXBlSWl3QWRvdjJsM291Q0w5ZVE6MQ");

include './functions/core-functions.php';

startSession();

include './class/navbar.php';
include './class/page.php';
include './class/registrationPage.php';

$navbar = new Navbar('./');
$page = new RegistrationPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();

?>
