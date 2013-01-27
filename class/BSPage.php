<?php
class BSPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <h2>Business Solutions</h2>
                <p>
                    <img src="<?php echo $this->getPathPrefix(); ?>img/Business-Solutions.jpg">
                </p>                
                <p>
                    Founded in 2005, Business Solutions is a student-driven initiative that promotes the business case culture and trains students in analyzing and providing solutions to real-world business problems. Business Solutions is enthusiastically supported by the faculty at the Nanyang Business School and the Asian Business Case Centre, the school's very own research centre which houses the largest repository of Asian cases in the world.
                </p>
                <p>
                    Members of Business Solutions represent the school to compete with the world's best in international case competitions. Business Solutions has left its global footprint in countries including the United States of America, Canada, Thailand, Mexico, India, Indonesia, Cambodia, Netherlands, Bangladesh, New Zealand, Hong Kong and Latvia, and has garnered remarkable accolades by winning the top prizes in many of these competitions. 
                </p>
                <p>
                    Business Solutions also organizes its very own international case competition, the Asian Business Case Competition. This is the third year that Business Solutions is launching the Singapore Business Case Competition.
                </p>
            </div>
        </div>
        <?php
    }
}
?>
