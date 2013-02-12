<?php

abstract class AdminPage extends Page{        
    private $db;
    
    public function __construct($pathPrefix, $title, $navbar, $db) {
        parent::__construct($pathPrefix, $title, $navbar);
        $this->db = $db;
    }
    
    public function getDB(){
        return $this->db;
    }
    
    public function isLoggedIn(){
        return isset($_SESSION['account']);
    }

    public function generatePage() {
        //the header
        echo "<!DOCTYPE html><html lang='en'>";
        $this->generateHeader();
        //the body
        ?>        
        <body>
            <div class="container">
                <div class="row">
                    <div class="span2">
                        <img src="<?php echo $this->getPathPrefix(); ?>img/SBCC-logo.png">
                        <?php 
                        $this->getNavbar()->generateNavbar();                          
                        if ($this->isLoggedIn()){
                            echo "<br>";
                            echo "<a href='./logout.php' class='btn btn-warning'>Log out</a>";
                        }
                        ?>                         
                    </div>
                    <div class="span10">        
                         <?php $this->generateContent(); ?>     
                    </div>                            
                </div>
            </div>
        </body>
        
        <?php $this->generateScript();?>
        </html>
        <?php
        $this->db->close();
    }
}
?>
