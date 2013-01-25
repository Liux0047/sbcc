<?php
class Navbar {
    //initialize all elements in the navbar list
    private $menu = array( 
        'home' => array ('displayMenuName' => 'Home', 'items'=> array(), 'link'=>'index.php'),     
        'about' => array (
            'displayMenuName' => 'About SBCC', 
            'items'=> array(
                'aboutSBCC' => array('displayItemName' => 'About SBCC','link'=>'about-sbcc.php'),
                'organizingCom'=> array('displayItemName' => 'Organising Committee','link'=>'Organising-Committee.php'),
                'businessSol'=> array('displayItemName' => 'Business Solution','link'=>'Business-Solutions.php')
                ),
            'link'=>'#'
            ),
        'competiton' => array (
            'displayMenuName' => 'The Competition', 
            'items'=> array(
                'results' => array('displayItemName' => 'Results','link'=>'results.php'),
                'judges'=> array('displayItemName' => 'Judges','link'=>'judges.php'),
                'registration'=> array('displayItemName' => 'Online Registration','link'=>'registration.php'),
                'rules'=> array('displayItemName' => 'Rules','link'=>'rules.php'),
                'faq' => array('displayItemName' => 'FAQ','link'=>'faq.php'),
                'resources'=> array('displayItemName' => 'Resources','link'=>'resources.php'),
                'triviaChallenge'=> array('displayItemName' => 'SME-Trivia-Challenge','link'=>'sme-trivia-challenge.php')
                ),
            'link'=>'#'
            ),
        'highlights' => array ('displayMenuName' => 'Highlights', 'items'=> array(),'link'=>'highlights.php'),
        'sponsors' => array ('displayMenuName' => 'Sponsors', 'items'=> array(), 'link'=>'sponsors.php')        
    );
    
    private $pathPrefix = './';
    
    function __construct($pathPrefix) {
        $this->pathPrefix = $pathPrefix; 
    }
    
    function getMenu (){
        return $this->menu;
    }
    
    function generateNavbar(){
        echo "<ul class='nav nav-pills'>";
        foreach ($this->menu as $key => $item){
            //if there is a dropdown list
            if (count($item['items'])){
                echo "<li class='dropdown'>".
                        " <a class='dropdown-toggle' data-toggle='dropdown' href='#'>".
                        $item['displayMenuName'].
                        "<b class='caret'></b>".
                        "</a>".
                        "<ul class='dropdown-menu'>";
                foreach ($item['items'] as $key => $listItem){
                    echo "<li><a href='".$this->pathPrefix.$listItem['link']."'>".$listItem['displayItemName']."</a></li>";
                }
                echo "</ul></li>";     
            }
            else{
                echo "<li><a href='".$this->pathPrefix.$item['link']."'>".$item['displayMenuName']."</a></li>";
            }
        }
        echo "<div class='pull-right'><a class='btn btn-primary' href='#'>Log in</a></div>";
        echo "</ul>";
  
    }
}

?>
