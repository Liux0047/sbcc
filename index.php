<?php

putenv("TZ=Asia/Singapore");

/* add www
if(isset($_SERVER['HTTP_HOST']) && substr($_SERVER['HTTP_HOST'],0,4) != 'www.'){
	header('Location: http://www.sgbcc.com.sg'.$_SERVER['REQUEST_URI'],301);
	die();
}
 * 
 */

include './class/navbar.php';
include './class/page.php';
include './class/indexPage.php';

$navbar = new Navbar('./');
$page = new IndexPage("./", "Singapore Business Case Competition 2013",$navbar);

$page->generatePage();
?>
