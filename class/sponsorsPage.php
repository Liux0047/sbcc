<?php
class SponsorsPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <img src="<?php echo $this->getPathPrefix(); ?>img/page-header/sponsors.jpg">
                <br><br>
                <h4>Official Platinum Sponsor</h4>
                <img src="<?php echo $this->getPathPrefix(); ?>img/leefoundation-logo.jpg">
                <p>
                    The Lee Foundation was set up in Singapore in 1952 and in Malaya in 1960 by the late businessman and philanthropist Lee Kong Chian (1893-1967). The Foundation has granted hundreds of millions of dollars to various causes, regardless of race, language, religion, nationality, geographical location, and with no conditions attached. The Lee Foundation supports the development of case writing and teaching in Singapore through support of the Asian Business Case Centre at Nanyang Business School.
                </p>
                <br>
                <h4>Sponsorship Opportunity</h4>                
                <p>
                    Your generosity will give you the opportunity to identify potential business leaders and show your corporate support for cultivating the next generation of sustainable businesses. Some of our sponsors' packages also allow you to interact with the most talented undergraduates in Singapore and build a network for the future. In sponsoring SBCC, you are choosing to partner a reputable business school and a prestigious competition. 
                </p>
                <p>
                    If you wish to promote your company and products in cooperation with SBCC or if you have any further questions, please contact the SBCC Sponsorship Team at sponsorship@sgbcc.com.sg
                </p>
                
            </div>
        </div>
        <?php
    }
}
?>
