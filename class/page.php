<?php

abstract class Page{
    
    private $pathPrefix = './';
    private $navbar;
    private $title;
    private $step = 1;


    public function __construct($pathPrefix, $title, $navbar) {
        $this->pathPrefix = $pathPrefix; 
        $this->navbar = $navbar;
        $this->title = $title;
    }
    
    public function setStep($step){
        if ($step>=1 && $step<=3){
            $this->step = $step;
        }        
    }
    
    public function getPathPrefix(){
        return $this->pathPrefix;
    }
    
    public function generateStepImg(){
        for ($i=1; $i<=3; $i++){
            echo "<img src='".$this->pathPrefix."img/steps/".$i;
            if ($this->step < $i){
                echo "-disable";
            }
            echo ".png'>";
        }
    }
    
    public function generateHeader(){
        echo "<head>";
        //meta
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
        echo "<meta name='keywords' content='Singapore Business Case Competition, Business Case Competition, Case Competition, Business Case, Nanyang Business School, Nanyang University, NTU, NBS, SBCC' />";
        echo "<meta name='Author' content='Business Solutions' />";
        echo "<meta name='Publisher' content='RegisterTheWorld.com' />";
        echo "<meta name='ROBOTS' content='ALL' />";
        echo "<meta name='revisit-after' content='1 days' />";
        echo "<meta name='distribution' content='local' />";
        echo "<meta name='rating' content='General' /><meta name='Content-Language' content='English' />";
        echo "<meta property='og:title' content='Singapore Business Case Competition' />";
        echo "<meta property='og:description' content='The highly anticipated Singapore Business Case Competition, is open to all undergraduates from the four universities in Singapore: National University of Singapore (NUS), Nanyang Technological University (NTU), Singapore Management University (SMU) and Singapore Institute of Management (SIM).' />";
        echo "<meta property='og:image' content='http://www.sgbcc.com.sg/2013/images/linkshare.png' />";
        echo "<meta property='fb:admins' content='813070246' />";
        
        //link css
        echo "<link href='".$this->pathPrefix."bootstrap/css/bootstrap.css' rel='stylesheet'>";        
        echo "<link href='".$this->pathPrefix."bootstrap/css/bootstrap-responsive.min.css' rel='stylesheet'>";
        echo "<link href='".$this->pathPrefix."css/style.css' rel='stylesheet'>";
        echo "<link rel='shortcut icon' type='image/x-icon' href='".$this->pathPrefix."img/favicon.png'> ";
        
        //title
        echo "<title>".$this->title."</title>";
        
        echo "</head>";

    }
    
    public function generateScript (){
        ?>
        <script type="text/javascript" src="./js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>   
        <script type="text/javascript">      
            $(document).ready( function() {       
                //enables the dropdown menu 
                $('.dropdown-toggle').dropdown();      
            });
        </script>
        <?php
    }
    
    public function generateFooter(){
        $tempList = array();
        ?>
        <hr>
        <div class="row">
            <div class="span10 well">
                <div class="row">
                    <div class="span4">
                        Organized by:<br>
                        <ul class="list-style-none">
                            <li><a href="<?php echo $this->pathPrefix; ?>Business-Solutions.php">Business Solutions</a></li>
                            <li><a href="http://www.nbs.ntu.edu.sg">Nanyang Business School</a></li>
                            <li><a href="http://www.ntu.edu.sg">Nanyang Technological University</a></li>
                        </ul>                
                    </div>
                    <div class="span6">
                        <p>
                            &copy; Copyright <a href="http://www.sgbcc.com.sg/2012/">2012</a>, <a href="http://www.sgbcc.com.sg/2013/">2013</a> Singapore Business Case Competition. All Rights Reserved.<br>
                            Made with <a href="http://twitter.github.com/bootstrap/index.html">Twitter Bootstrap</a>
                        </p>            
                        <div class="row">
                            <?php
                            $menu = $this->navbar->getMenu();                              
                            foreach ($menu as $key => $item){                        
                                //if there are submenus
                                if (count($item['items'])){          
                                    echo "<ul class='list-style-none span2'>";
                                    if (count($tempList)){
                                        foreach ($tempList as $key => $tempItem){
                                            echo "<li><a href='".$this->pathPrefix.$tempItem['link']."'>".$tempItem['displayMenuName']."</a></li>";
                                            unset($tempList[$key]);
                                        }
                                    }
                                    foreach ($item['items'] as $key => $listItem ){
                                        echo "<li><a href='".$this->pathPrefix.$listItem['link']."'>".$listItem['displayItemName']."</a></li>";
                                    }
                                    echo "</ul>";
                                }
                                else{
                                    //if no submenus, add this link to a templist and display next time
                                    array_push($tempList,$item);                                    
                                }                               

                            }
                            //display the remaining elements in tempList
                            if (count($tempList)){
                                echo "<ul class='list-style-none span2'>";
                                foreach ($tempList as $key => $item){
                                    echo "<li><a href='".$this->pathPrefix.$item['link']."'>".$item['displayMenuName']."</a></li>";
                                    unset($tempList[$key]);                                    
                                }
                                echo "</ul>";
                            }
                            ?>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    
    public function generateLeftCol(){
        ?>
        <div class="span3">
            <h3 class="font-blue align-middle">SUBMIT CASE NOW!</h3>
            <p class="font-blue align-middle">Multiple submissions allowed</p>
            <?php $this->generateStepImg(); ?>
            <h4>Organized by:</h4>
            <img src='<?php echo $this->getPathPrefix(); ?>img/Business-Solutions.jpg'>
            <br>
            <br>
            <img src='<?php echo $this->getPathPrefix(); ?>img/logo_nbs.png'>
        </div>
        <?php
    }

    abstract public function generateContent();
    
    public function generatePage (){      
        //the header
        echo "<!DOCTYPE html><html lang='en'>";
        $this->generateHeader();
        
        //the body
        echo "<body>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<div class='span1'></div>";   //leave space on the left
        echo "<div class='span10'>";
        echo "<div class='row'>";
        echo "<div class='span2'>";
        echo "<img src='".$this->pathPrefix."img/SBCC-logo.jpg'>";
        echo "</div>";
        
        echo "<div class='span8'>";
        //dates on the top right corner
        echo "<br>";
        echo "<div class='align-right'>";
        echo "<h4> Semi-Final & Grand Final</h4>";
        echo "<h4>2 March 2013</h4>";
        echo "</div>";
        echo "<br><br>";
        //the navbar
        $this->navbar->generateNavbar();    
        echo "</div>";
    
        //generate content
        $this->generateContent();            

        $this->generateFooter();
        echo "<div class='span1'></div>";   //leave space on the right
        echo "</div>";
        echo "</body>";
        
        $this->generateScript();
        echo "</html>";
    }
}
?>
