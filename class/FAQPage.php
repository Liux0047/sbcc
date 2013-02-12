<?php

class FAQPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <img src="<?php echo $this->getPathPrefix(); ?>img/page-header/faq.jpg">
                <h2>Frequently Asked Questions</h2>
                
                <section id="general">
                    <h3>General</h3>
                    <table class="table table-striped">
                        <tr>
                            <td class="span1">
                                <span class="badge badge-warning">Q</span>:
                            </td>
                            <td>
                                I am a student from Ukraine with a team that regularly participates in international competitions. We are keen to join SBCC, are we eligible?
                            </td>
                        </tr>
                        <tr>
                            <td class="span1">
                                <span class="badge badge-info">A</span>:
                            </td>
                            <td>
                                Unfortunately, the competition is only open to students attending a Singapore University or Polytechnic (NTU, NUS, SMU, SIM, SUTD, NP, NYP, SP, RP , TP). However, Business Solutions also organises an international case competition called the Asian Business Case Competition. You are welcome to participate in this competition! For more information, please check <a href="http://www.abcc.com.sg/">http://www.abcc.com.sg/</a>
                                <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="span1">
                                <span class="badge badge-warning">Q</span>:
                            </td>
                            <td>
                                I am a Exchange Student currently attending a Singapore University. Am I eligible to compete?
                            </td>
                        </tr>
                        <tr>
                            <td class="span1">
                                <span class="badge badge-info">A</span>:
                            </td>
                            <td>
                                Yes you are! We encourage diversity and you will be a great addition to the competition. Simply form a team of 3-4 with undergraduates attending a Singapore University from any disciplines to join! Please note that eligible undergraduates must not have acquired more than 5 years of continuous professional experience. We want a level playing field with an interesting mix of participants. Expect a fun and challenging competition!
                                <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="span1">
                                <span class="badge badge-warning">Q</span>:
                            </td>
                            <td>
                                One of my team members will not be able to make it for one of the competition rounds (e.g. QF, SF, GF). Can we present with 1 member less?
                            </td>
                        </tr>
                        <tr>
                            <td class="span1">
                                <span class="badge badge-info">A</span>:
                            </td>
                            <td>
                                Yes you can. However, please write in to competition@sgbcc.com.sg to inform us of your valid reason. We strongly encourage all members to present as a case experience does not only involve preparing a solution, but also persuading the stakeholders to buy your idea.
                                <br><br>
                            </td>
                        </tr>
                    </table> 
                    <br>
                    <h3>Qualifying Case</h3>
                    <p>
                        Watch this space for future updates!
                    </p>
                    <p>
                        For any queries with regards to competition, write in to us at <a href="competition@sgbcc.com.sg">competition@sgbcc.com.sg</a>.
                    </p>
                </section>
            </div>
        </div>
        <?php
    }
}
?>
