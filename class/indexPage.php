<?php
class IndexPage extends Page{
    public function generateContent(){      
        ?>        
        <br>
        <div class="span10 well well-small">            
            <div class="row">
                <div class="span2">
                </div>
                <div class="span8">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <?php 
                            for ($i=1; $i<=5; $i++){
                                //first item needs to have active class
                                echo "<div class='item";
                                if ($i == 1){
                                    echo " active";
                                }
                                echo "'>";      
                                echo "<img src='".$this->getPathPrefix()."img/carousel/$i.jpg' alt=''>";
                                echo "</div>";
                            }
                            ?>                            
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span3">
                <?php echo $this->generateLeftCol(); ?>
            </div>
            <div class="span7">
                <h2>Welcome to the Singapore Business Case Competition 2013 </h2>
                <p>
                    The highly anticipated Singapore Business Case Competition is open to all undergraduates from the four universities as well as 5 selected polytechnics in Singapore: National University of Singapore (NUS), Nanyang Technological University (NTU), Singapore Management University (SMU) and Singapore Institute of Management (SIM), Nanyang Polytechnic (NYP), Ngee Ann Polytechnic (NP), Republic Polytechnic (RP), Singapore Polytechnic (SP) and Temasek Polytechnic (TP).
                </p>
                <p>
                    The catch is: we bring to you more than just a case competition; we bring to you the ultimate case experience that you will not forget.
                </p>
                <p>
                    To encourage synergy and diversity in the competition, we allow teams consisting of 3-4 members to be formed across all four universities and faculties. We will also be incorporating other non-competition elements to ensure that our participants have a good time and the opportunity to build lasting friendships across universities.
                </p>
                <p>
                    The theme for SBCC is business sustainability. Participants will not only put their business skills and acumens to test, but also be engaged in the analysis and development of sustainable practices and strategies to tackle the real world challenges that SMEs today face.
                </p>
                <p>
                    Teams will first submit an executive summary and a PowerPoint presentation of the case. Following that, teams that qualify for the semi-finals will undergo intensive preparation on a different case for 5 hours on the main event day (2nd March), and the top teams will make it into the finals of the competition where attractive prizes and opportunities are up for grabs.
                </p>
                <p>
                    Hesitate no further. Register before 21 February to receive the case early! The ultimate case experience awaits you.
                </p>
            </div>
        </div>
        <?php
    }
}
?>
