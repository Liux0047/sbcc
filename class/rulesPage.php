<?php
class RulesPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">   
                <section id=overview">
                    <div class="page-header">                    
                      <h3>Overview</h3>
                    </div>                    
                    <p>
                        The organizers offer the following procedures and rules to provide a competition environment that is enjoyable, transparent, and fair to all teams.
                    </p>
                    <p>
                        <a href='<?php echo $this->getPathPrefix(); ?>functions/rule-download.php' class='btn btn-info'>
                            <i class="icon-file icon-white"></i> Download Rules in PDF
                        </a>
                    </p>
                </section>
                <br>
                <section id=Eligibility">
                    <div class="page-header">
                      <h3>Eligibility</h3>
                    </div>
                    <p>
                        The competition is open to all undergraduates enrolled full time in a Singapore university and students from all 5 local polytechnics. Namely, full time undergraduates from the Nanyang Technological University (NTU), National University of Singapore (NUS), Singapore Institute of Management (UniSIM), Singapore Management University (SMU) as well as full time students from Nanyang Polytechnic, Ngee Ann Polytechnic, Republic Polytechnic, Singapore Polytechnic, Temasek Polytechnic.
                    </p>              
                    <ul>
                        <li>
                            Eligible students should not have acquired more than 5 years of continuous professional experience.
                        </li>
                        <li>
                            Eligible students can come from any discipline from the above named institutions.  
                        </li>
                        <li>
                            Students are to register in teams of 3-4. Students do not have to belong to the same educational institution. Cross-institutions teams are encouraged.
                        </li>
                        <li>
                            The competition consists of 3 rounds; a preliminary round which takes place over the internet, followed by the semi-final and final round which will be held at Nanyang Business School, Singapore.
                        </li>
                    </ul>
                    <p>
                        <span class="font-underline">Preliminary Round</span><br>
                        Case Release:  15 February 2013, 0900hrs <br>
                        Preliminary Round Deliverables Submission:  22 February 2013, 0900hrs                        
                    </p>
                    <p>
                        <span class="font-underline">Semi-finals and Finals</span><br>
                        Competition:  2 March 2013                                   
                    </p>
                    <p>
                        By registering for SBCC 2013, participants have consented to their availability for the dates listed.
                    </p>
                </section>
                <br>
                <section id=TeamComposition">
                    <div class="page-header">
                      <h3>Team Composition</h3>
                    </div>
                    <p>
                        Once a team is registered, no modification in its composition is allowed. In the event of unforeseen circumstances, the organisers have to be notified of any changes and the reasons for doing so. Changes will be assessed on a case by case basis. The organisers are contactable at 
                        <a href ="competition@sgbcc.com.sg">competition@sgbcc.com.sg</a>.
                    </p>
                </section>                              
                <br>
                <section id=FairPlay">
                    <div class="page-header">
                      <h3>Fair Play</h3>
                    </div>
                    <ul>
                        <li>
                            Teams will only submit their own original work for all deliverables. All sources must be specified and identified clearly.
                        </li>
                        <li>
                            The team is not allowed to receive any coaching from their faculty advisor or have any contact with other faculty or external experts during the competition that will result in an unfair advantage.
                        </li>
                        <li>
                            Teams are not allowed to include anything in all their deliverables that would enable judges to identify their education institutions
                        </li>
                    </ul>
                </section>
                <br>
                <section id="Registration">
                    <div class="page-header">
                      <h3>Registration</h3>
                    </div>
                    <ul>
                        <li>
                            To register, students should log onto <a href="www.sgbcc.com.sg">www.sgbcc.com.sg</a>. Registration ends on 21st  February 2013, 2359hrs.
                        </li>
                        <li>
                            In selecting team names, teams are not allowed to indicate or suggest their education institution. 
                        </li>
                        <li>
                            After registration, no changes to the team’s name can be made.
                        </li>
                        <li>
                            Teams are to furnish the organizers with a valid email and contact number.
                        </li>
                        <li>
                            Upon registration, teams will receive an email confirming the validity of the email address provided. Emails will be the main communication channel between teams and the organizers. The onus is on all teams to ensure receipt of the confirmation email. 
                        </li>
                        <li>
                            In the event no confirmation email is received, teams are to notify the organizers promptly at <a href="competition@sgbcc.com.sg">competition@sgbcc.com.sg</a>.
                        </li>
                        <li>
                            By registering, competitors consent to having their information published on <a href="www.sgbcc.com.sg">www.sgbcc.com.sg</a>.
                        </li>
                    </ul>                    
                </section>
                <br>
                <section id="Judging">
                    <div class="page-header">
                        <h3>Judging</h3>
                    </div>
                    <ul>
                        <li>
                            All deliverables will be evaluated on the basis of clarity, accuracy of issue identification and analysis, the relevance and viability of proposals and recommendations, and creativity.
                        </li>
                    </ul>                    
                </section>
                <br>
                <section id="PreliminaryRound">
                    <div class="page-header">
                        <h3>Preliminary Round</h3>
                    </div>
                    <p>
                        <strong>Case Release</strong>
                    </p>
                    <ul>
                        <li>
                            The preliminary round case will be released on 15 February 2013 0900 hrs. Teams can find the case uploaded on <a href="www.sgbcc.com.sg">www.sgbcc.com.sg</a> after logging in to the Competitor’s page.
                        </li>
                    </ul>
                    
                    <p>
                        <strong>Deliverables</strong>
                    </p>
                    <ul>
                        <li>                            
                            <p>
                                Teams are to submit a two page executive summary and a six slides powerpoint presentation that encompasses their solution to the case problem in one PDF file by 22 February 2013, 0900hrs. 
                            </p>                        
                            <p>
                                The executive summary submitted should abide to the following specifications:
                            </p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Executive Summary format</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="span2">Font</td>
                                        <td>
                                            Headings : Arial, 12pt, bold <br>
                                            Body : Arial, 11pt
                                        </td>
                                    </tr>                                  
                                    <tr>
                                        <td>Layout</td>
                                        <td>
                                            Justified, single spacing, 1 inch margin on all sides
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Header</td>
                                        <td>
                                            Include team name and team email only
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Content guidelines</td>
                                        <td>
                                            Teams should include a description of the issues and your solutions
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Limit</td>
                                        <td>
                                            <strong>1 page maximum</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Format</td>
                                        <td>
                                            MS Word or PDF format only
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>File name</td>
                                        <td>
                                            PR_teamname_Executive_Summary
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>
                                The presentation slides submitted should abide to the following specifications:
                            </p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Powerpoint Slides format</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="span2">
                                            Introduction
                                        </td>
                                        <td>
                                            Include team name only
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Layout
                                        </td>
                                        <td>
                                            Slide numbers must be included
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Content guidelines
                                        </td>
                                        <td>
                                            Teams should be mindful of using animations. Some animations may obscure slide content when printed
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Limit
                                        </td>
                                        <td>
                                            6 Slides maximum <strong>including cover slide if any</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Format
                                        </td>
                                        <td>
                                            All presentations must be submitted in MS PowerPoint 2007 or PDF format (1 slide per page) only
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            File name
                                        </td>
                                        <td>
                                            PR_teamname_Presentation
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            Contents in the presentation slides submitted should not deviate from the solution suggested by the team in the executive summary.
                        </li>
                    </ul>
                    <p>
                        <strong>Submission</strong>
                    </p>
                    <ul>
                        <li>                            
                            Submission will be done via the upload link on the Competitor’s page. Teams are encouraged to submit early to avoid possible network problems.
                        </li>
                        <li>
                            Teams are allowed to submit multiple times. Only the latest submission will be considered.
                        </li>
                        <li>
                            Upon successful receipt of the executive summary, SBCC will notify each team via email.
                        </li>
                        <li>
                            In the event of submission delay due to a documented failure in network infrastructure or the lack of a receipt acknowledgement email, teams must promptly notify SBCC 2013 organisers at <a href="competition@sgbcc.com.sg">competition@sgbcc.com.sg</a> so that organisers can provide an alternative avenue for submission.
                        </li>
                    </ul>
                    <p>
                        <strong>External Support</strong>
                    </p>
                    <ul>                        
                        <li>                            
                            After receiving the case, teams are not allowed to receive any assistance from any external parties in preparing the executive summary.                            
                        </li>
                    </ul>
                    <p>
                        <strong>Anonymity</strong>
                    </p>
                    <ul>
                        <li>                            
                            Teams are not allowed to include anything in their executive summary that would enable judges to identify their education institution.
                        </li>
                    </ul>
                    <p>
                        <strong>Judging</strong>
                    </p>
                    <ul>
                        <li>                            
                            The executive summaries will be evaluated on the basis of clarity, accuracy of issue identification and analysis, the relevance and viability of proposals and recommendations, and creativity.
                        </li>
                    </ul>                    
                </section>
                <br>
                <section>
                    <div class="page-header">
                        <h3>Semi-finals</h3>
                    </div>
                    <p>
                        <strong>Notification of Semi-Finalist</strong>
                    </p>
                    <ul>
                        <li>                            
                            The result of the preliminary round will be announced by 26 February 2013 2359 hrs.
                        </li>
                    </ul>
                    <p>
                        <strong>Order and Grouping of Teams</strong>
                    </p>
                    <ul>
                        <li>                            
                            A random ballot will be conducted to determine the order of presentation and grouping of teams.
                        </li>
                        <li>
                            There will be 4 groups of 5 teams. Of which, only the top team of each group will proceed to the Finals.
                        </li>
                    </ul>
                    <p>
                        <strong>Case Release</strong>
                    </p>
                    <ul>
                        <li>                            
                            The case will be released on 2 March 2013, at the competition venue. Teams will have 5 hours to work on the case and prepare their presentation slides.
                        </li>
                    </ul>
                    <p>
                        <strong>Resources</strong>
                    </p>
                    <ul>
                        <li>                            
                            No laptops or writing materials will be provided. All teams are to bring their own working materials.
                        </li>
                        <li>
                            All teams will have access to the internet during case preparation.
                        </li>
                    </ul>
                    <p>
                        <strong>Submission</strong>
                    </p>
                    <ul>
                        <li>                            
                            Teams will have to submit their semi-finals slides at the time and location specified by the Competition Director during case release.
                        </li>
                        <li>
                            <p>
                                The presentation slides submitted should abide to the following specifications:
                            </p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Powerpoint Slides format</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="span2">
                                            Introduction
                                        </td>
                                        <td>
                                            Include team name only
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Layout
                                        </td>
                                        <td>
                                            Slide numbers must be included
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Content guidelines
                                        </td>
                                        <td>
                                            Teams should be mindful of using animations. Some animations may obscure slide content when printed. 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Format
                                        </td>
                                        <td>
                                            •	All presentations must be submitted in MS PowerPoint 2007 version or PDF format only
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            File name
                                        </td>
                                        <td>
                                            GroupX_teamname_Presentation
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                    <p>
                        <strong>Presentation</strong>
                    </p>
                    <ul>
                        <li>                            
                            Teams will have 10 minutes to present their analysis of the case, followed by 10 minutes of question and answer. When a team finishes its presentation, it will proceed immediately to the Q&A session. Upon reaching time limits, a presenter may complete only the current sentence.
                        </li>
                    </ul>
                    <p>
                        <strong>Presentation Materials</strong>
                    </p>
                    <ul>
                        <li>                            
                            The organisers of SBCC 2013 will prepare copies of each team’s PowerPoint slides and distribute them to the judges.<br>
                            Teams are not permitted to give the judges any other supplementary material.
                        </li>
                    </ul>
                    <p>
                        <strong>Judging</strong>
                    </p>
                    <ul>
                        <li>                            
                            Presentations will be evaluated on the basis of clarity, accuracy of issue identification and analysis, the relevance and viability of proposals and recommendations, and creativity.
                        </li>
                    </ul>
                    <p>
                        <strong>Audience participation</strong>
                    </p>
                    <ul>
                        <li>                            
                            Except for faculty advisors, no team will be allowed to watch the presentations of other teams during the Semi-finals. 
                        </li>
                    </ul>
                    <p>
                        <strong>Anonymity</strong>
                    </p>
                    <ul>
                        <li>                            
                            Teams are not allowed to include anything in their presentation slides that would enable judges to identify their education institution.
                        </li>
                    </ul>                    
                </section>
                <br>
                <section id="GrandFinal">
                    <div class="page-header">
                        <h3>Grand Final</h3>
                    </div>
                    <p>
                        <strong>Notification of Grand-Finalist</strong>
                    </p>
                    <ul>
                        <li>                            
                            The result of the semi-finals will be announced prior to the commencement of the finals. 
                        </li>
                        <li>
                            Upon announcement of the finalists, the finalists are to return to their holding rooms until it is their turn to present. 
                        </li>
                    </ul>
                    <p>
                        <strong>Order and Grouping of Teams</strong>
                    </p>
                    <ul>
                        <li>                            
                            A random ballot will be conducted to determine the order of presentation and grouping of teams.
                        </li>
                    </ul>
                    <p>
                        <strong>Presentation</strong>
                    </p>
                    <ul>
                        <li>                            
                            Finalists will present the same presentation they have prepared for the semi-finals.
                        </li>
                        <li>
                            Teams will have 10 minutes to present their analysis of the case, followed by 10 minutes of question and answer. When a team finishes its presentation, it will proceed immediately to the Q&A session. Upon reaching time limits, a presenter may complete only the current sentence.
                        </li>
                    </ul>
                    <p>
                        <strong>Presentation Slides</strong>
                    </p>
                    <ul>
                        <li>                            
                            Teams will not be allowed to edit their slides between the semi-finals and finals.
                        </li>
                    </ul>
                    <p>
                        <strong>Presentation Materials</strong>
                    </p>
                    <ul>
                        <li>                            
                            The organisers of SBCC 2013 will prepare copies of each team’s PowerPoint slides and distribute them to the judges.
                        </li>
                        <li>
                            Teams are not permitted to give the judges any other supplementary material.
                        </li>
                    </ul>
                    <p>
                        <strong>Judging</strong>
                    </p>
                    <ul>
                        <li>                            
                            Presentations will be evaluated on the basis of clarity, accuracy of issue identification and analysis, the relevance and viability of proposals and recommendations, and creativity.
                        </li>
                    </ul>
                    <p>
                        <strong>Audience participation</strong>
                    </p>
                    <ul>
                        <li>                            
                            After the finalists have presented, they will be allowed to watch the presentations of other teams.
                        </li>
                    </ul>
                </section>
                <section id="Others">
                    <div class="page-header">
                        <h3>Others</h3>
                    </div>
                    <ul>
                        <li>
                            Any other rules or information will be posted on the official competition website <a href="www.sgbcc.com.sg">www.sgbcc.com.sg</a>. Teams are responsible for checking the website regularly for the latest updates.
                        </li>
                        <li>
                            SBCC 2013 organisers reserve the right to disqualify or penalize any teams found to be in breach of the competition rules.
                        </li>
                        <li>
                            The organisers also reserve the right to make changes to the rules with sufficient notice to the competitors.
                        </li>
                    </ul>
                    <p>
                        <a href='<?php echo $this->getPathPrefix(); ?>functions/rule-download.php' class='btn btn-info'>
                            <i class="icon-file icon-white"></i> Download Rules in PDF
                        </a>
                    </p>
                </section>                
            </div>
        </div>

        <?php
    }
}
?>
