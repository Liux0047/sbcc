<?php

class HighlightsPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <img src="<?php echo $this->getPathPrefix(); ?>img/page-header/highlights.jpg">
                <h3>SBCC 2013 Highlights </h3>
                <h4>Case Workshop @ NBS (15th Feb 2013)</h4>
                <p>
                    As one of the highlight events leading up to the Singapore Business Case Competition 2013, Business Solutions will be conducting a case workshop to share some tips and strategies in tackling a business case study.
                </p>
                <p>
                    At the workshop, you will gain exclusive insight on the methodology that has been used by the competing teams from Business Solutions that have participated and excelled in international case competitions worldwide. 
                    <strong>*The workshop is only open to participants of the SBCC 2013.</strong>
                </p>
                <p>
                    The following topics will be covered during the Case Workshop:
                </p>
                <ol>
                    <li>
                        Introduction to the case method
                    </li>
                    <li>
                        What to include in your presentation (both Semi Finals and Prelim Round)?
                    </li>
                    <li>
                        How should you spend your 5 hours of case cracking time?
                    </li>
                </ol>
                <p>
                    <strong>Event Details:</strong>
                </p>
                <p>
                    Date: 15th February 2013, Friday<br>
                    Time: 1630 - 1730 hrs<br>
                    Venue: Nanyang Business School, <strong>Block S3 Level B4, Conference Room 1</strong><br>
                    Attire: Casual
                </p>
                <br>
                                
                <h4>Grand-Finals Cash Prizes</h4>
                <p>The top 3 teams in this year’s competition stand to win the following cash prizes:</p>
                <p>
                    Champion: $1500<br>
                    1st Runner-up: $1000<br>
                    2nd Runner-up: $600
                </p>
                <br>
                
                <h4>Networking Session (2nd Mar 2013)</h4>
                <p>
                    All 80 Semi-Finalists will get the chance to be part of an exclusive closed-doors networking session with professionals who have excelled in their various respective fields, including Auditing, Investment Banking, Entrepreneurship, Consulting, Off-shore & Marine and many more. 
                </p>
                <p>
                    This will be a rare opportunity for you, a potential Semi-Finalist, to impress, broaden your professional network and open doors to an internship of your choice!
                </p>
                <br>
                
                <h4>Event Day Lucky Draw (2nd Mar 2013)</h4>
                <p>
                    <strong>All Semi-Finalists and audience members</strong> will get a chance to win attractive prizes during a lucky draw right before the prize presentation on the event day! 
                </p>
                <p>
                    Prizes include an <strong>Ipad Mini, Ipod Nano, Presentation Clickers</strong> and more! So come on down and be part of the Grand Finals on the 2nd Mar! 
                </p>
            </div>
        </div>
        <?php
    }
}
?>
