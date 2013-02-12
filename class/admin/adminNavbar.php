<?php
class AdminNavbar extends Navbar{
    private $menu = array(
        'Dashboard' => 'index.php',
        'Teams' => 'teams.php',
        'Submissions' => 'submissions.php',
        'All Team Email' => 'emails.php'       
    );   
    
    function generateNavbar(){
        echo "<ul class='nav nav-list'>";
        foreach ($this->menu as $name => $url){
            echo "<li><a href='./$url'>$name</a></li>";
        }
        echo "</ul>";        
    }
}
?>
