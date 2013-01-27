<?php
class Navbar {    
    //initialize all elements in the navbar list
    private $menu = array( 
        'home' => array ('displayMenuName' => 'Home', 'items'=> array(), 'link'=>'index.php'),     
        'about' => array (
            'displayMenuName' => 'About SBCC', 
            'items'=> array(
                'aboutSBCC' => array('displayItemName' => 'About SBCC','link'=>'about-sbcc.php'),
                'OrganisingCom'=> array('displayItemName' => 'Organising Committee','link'=>'organising-committee.php'),
                'businessSol'=> array('displayItemName' => 'Business Solutions','link'=>'business-solutions.php')
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
                'resources'=> array('displayItemName' => 'Resources','link'=>'resources.php')
                ),
            'link'=>'#'
            ),
        'highlights' => array ('displayMenuName' => 'Highlights', 'items'=> array(),'link'=>'highlights.php'),
        'sponsors' => array ('displayMenuName' => 'Sponsors', 'items'=> array(), 'link'=>'sponsors.php'),
        'faq' => array('displayMenuName' => 'FAQ', 'items'=> array(),'link'=>'faq.php'),
    );
    
    private $pathPrefix = './';
    
    function __construct($pathPrefix) {
        $this->pathPrefix = $pathPrefix; 
    }
    
    function getMenu (){
        return $this->menu;
    }
    
    function generateLoginModal(){
        ?>
        <div id="login_panel" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="login_header" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="login_header">Log in</h3>
            </div>                            
            <div class="modal-body" id="login_input">                 
                <div class="alert alert-block alert-error fade hide" id="login_fail_alert">                                
                    <h4 class="alert-heading"><?php echo SORRY_LOGIN_FAILED; ?>.</h4>
                    <p><?php echo INVALID_EMAIL_OR_PASSWORD; ?></p>
                    <p>
                      <a class="btn btn-danger" href="#"><?php echo FORGET_PASSWORD; ?>?</a> 
                    </p>
                </div>                
                <div>                    
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary inline" onclick="auth_login()">
                    Sign in
                </button>
            </div>
        </div>
        <?php
    }
    
    function generateNavbar(){
        echo "<ul class='nav nav-pills'>";
        foreach ($this->menu as $key => $item){
            //if there is a dropdown list
            if (count($item['items'])){
                echo "<li class='dropdown'>".
                        " <a class='dropdown-toggle' data-toggle='dropdown' href='#'>".
                        "<b>".$item['displayMenuName']."</b>".
                        "<b class='caret'></b>".
                        "</a>".
                        "<ul class='dropdown-menu'>";
                foreach ($item['items'] as $key => $listItem){
                    echo "<li><a href='".$this->pathPrefix.$listItem['link']."'>".$listItem['displayItemName']."</a></li>";
                }
                echo "</ul></li>";     
            }
            else{
                echo "<li><a href='".$this->pathPrefix.$item['link']."'><b>".$item['displayMenuName']."</b></a></li>";
            }
        }
        echo "<div class='pull-right btn-group'>";
        if ($this->isLoggedIn()){
            echo "<a class='btn btn-primary' href='".$this->pathPrefix."competition-portal.php'>My Portal</a>";
            echo "<a class='btn btn-primary' href='".$this->pathPrefix."logout.php'>Log out</a>";
        }
        else{            
            echo "<a class='btn btn-primary' href='".$this->pathPrefix."login.php'>Log in</a>";
            echo "<a class='btn btn-primary' href='".$this->pathPrefix."registration.php'>Sign up</a>";            
        }
        echo "</div>";
        echo "</ul>";
    }
    
    public function isLoggedIn(){
        return isset($_SESSION['userEmail']);
    }
}

?>
