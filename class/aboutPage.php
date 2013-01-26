<?php

class AboutPage extends Page{
    public function generateContent(){
        ?>        
        <div class="row">            
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">     
                <img src="<?php echo $this->getPathPrefix(); ?>img/page-header/about-sbcc.jpg">
                <h2>
                    About The Singapore Business Case Competition 2013
                </h2>
                <hr>
                <p>
                    Once again, Business Solutions extends our initiatives to the students in Singapore, giving local tertiary students the opportunity to enjoy an unrivalled case competition experience. Competitors will not only be provided with a platform to pit their business skills and acumens against their peers on a bigger stage, but also to forge lasting friendships across various institutions. 
                </p>
                <p>
                    SBCC is a business case competition that simulates a real world environment. Competitors will work in teams to come up with effective and realistic solutions to tackle the challenges faced by an actual company, presented in the form of a case study.
                </p>
                <p>
                    Your analytical, communication and persuasion skills will be put to the test against other competitors across different universities and specializations. You will have a chance to present your work to industry professionals from diverse backgrounds, such as personnel from the Financial industry, Entrepreneurs and Senior Management executives. Teamwork will also play an important role, as your team will have work closely together under severe time constraints.
                </p>
                <p>
                    It will be a case experience you will never forget!
                </p>
            </div>
        </div>

        <?php
    }
}
?>
