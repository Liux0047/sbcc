<?php

class RegistrationPage extends Page{
       
    public function generateContent(){        
        ?>        
        <div class="row">            
            <div class="span3">
                <?php echo $this->generateLeftCol(); ?>
            </div>
            <div class="span7">
                <h6>
                    *For participants who have already registered for the competition, 
                    <a href="https://docs.google.com/forms/d/17hMlTH7SfnRDRxskudbPcFD6zvje818re5sm6okNDmk/viewform">CLICK HERE</a> 
                    to sign up for the 15th Feb Case Workshop.  
                </h6>
                <h3>Online Registration</h3>
                <p>
                    Registrations stay open until 21st February 2013, 2359H. However, the case will be released on 15th February and deliverables have to be submitted by 22nd February, 1200H. Register early to give yourselves more time!
                </p>
                <br>
                <form class="form-horizontal" id="registrationForm" action="<?php echo $this->getPathPrefix(); ?>processReg.php" method="POST">
                    <!-- Team Information  -->
                    <legend>Team Information</legend>    
                    <div class="control-group">
                        <label class="control-label" for="teamName">Team Name</label>
                        <div class="controls">
                            <input type="text" id="teamName" name="teamName" placeholder="Team Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="teamEmail">Team Email Address</label>
                        <div class="controls">
                            <input type="email" id="teamEmail" name="teamEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="confirmPassword">Confirm Password</label>
                        <div class="controls">
                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="contact">Team Contact No.</label>
                        <div class="controls">
                            <input type="text" id="contact" name="contact" placeholder="Team Contact No">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="teamSize">Team Size</label>
                        <div class="controls">
                            <select id="teamSize" name="teamSize" onchange="changeTeamSize();">
                                <option value="3">3</option>
                                <option value="4" selected="true">4</option>
                            </select>
                        </div>
                    </div>                    
                    <!-- end of Team Information  -->
                    
                    <!-- Team members -->
                    <?php 
                    for ($memberId=1; $memberId<=4; $memberId++){
                        //hide team member 4 at first
                        if ($memberId == 4){
                            echo "<div id='member$memberId' class=''>";
                        }
                        else {
                            echo "<div id='member$memberId'>";
                        }
                        //member 1 is the leader
                        if ($memberId == 1){
                            echo "<legend>Team Leader</legend>";                            
                        }
                        else{
                            echo "<legend>Team Member $memberId</legend>";
                        }                        
                        ?>      
                            <div class="control-group">                                                
                                <label class="control-label" for="member<?php echo $memberId; ?>Name">Name</label>
                                <div class="controls">
                                    <input type="text" id="member<?php echo $memberId; ?>Name" name="member<?php echo $memberId; ?>Name" placeholder="Name">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="member<?php echo $memberId; ?>Email">Email Address</label>
                                <div class="controls">
                                    <input type="email" id="member<?php echo $memberId; ?>Email" name="member<?php echo $memberId; ?>Email" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="member<?php echo $memberId; ?>Inst">Name of Institution</label>
                                <div class="controls">
                                    <select id="member<?php echo $memberId; ?>Inst" name="member<?php echo $memberId; ?>Inst">
                                        <option value="">--</option>
                                        <option value="NTU">NTU - Nanyang Technological University</option>                
                                        <option value="NUS">NUS - National University of Singapore</option>                
                                        <option value="SMU">SMU - Singapore Management University</option>                
                                        <option value="SIM">SIM - Singapore Institute of Management</option> 
                                        <option value="SUTD">SUTD – Singapore University of Technology and Design</option> 
                                        <option value="NYP">NYP - Nanyang Polytechnic</option>                
                                        <option value="NP">NP - Ngee Ann Polytechnic</option>                
                                        <option value="RP">RP - Republic Polytechnic</option>                
                                        <option value="SP">SP - Singapore Polytechnic</option>   
                                        <option value="TP">TP - Temasek Polytechnic</option>   
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="member<?php echo $memberId; ?>Course">Course Title</label>
                                <div class="controls">
                                    <input type="text" id="member<?php echo $memberId; ?>Course" name="member<?php echo $memberId; ?>Course" placeholder="Course Title">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="member<?php echo $memberId; ?>YOG">Year of Graduation</label>
                                <div class="controls">
                                    <select id="member<?php echo $memberId; ?>YOG" name="member<?php echo $memberId; ?>YOG">         
                                        <option value="">--</option>
                                        <option value="2013">2013</option>                
                                        <option value="2014">2014</option>                
                                        <option value="2015">2015</option> 
                                        <option value="2016">2016</option> 
                                        <option value="2017">2017</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="member<?php echo $memberId; ?>DR">Dietary Restrictions</label>
                                <div class="controls">
                                    <input type="text" id="member<?php echo $memberId; ?>DR" name="member<?php echo $memberId; ?>DR" value="N.A">
                                </div>
                            </div>
                    
                        </div>
                        <?php
                    }
                    ?>
                    <!-- end of Team members  -->
                    
                    <legend>Agreement</legend>
                    <div class="control-group">
                        <label class="checkbox" for="terms">
                            <input type="checkbox" id="terms" name="terms">We solemnly agree to play by the <a href="<?php echo $this->getPathPrefix(); ?>rules.php">rules</a> and are ready for the ultimate case experience!                            
                        </label>
                                           
                    </div>
                    <legend></legend>
                    <button type="submit" class="btn btn-primary">
                        <i class="icon-pencil icon-white"></i> Register Now
                    </button>    
                    
                </form>
            </div>
        </div>
        <?php
    }
    
    public function generateScript() {
        parent::generateScript();
        ?>
        <script src="<?php echo $this->getPathPrefix(); ?>js/jquery.validate.js"></script>
        <script type="text/javascript">
        //validating the form
        $(document).ready(function() {
            validateForm();
            // validate signup form on keyup and submit            
        });
        
        //change number of members
        function changeTeamSize(){
            var teamSize = document.getElementById("teamSize").value;
            if (teamSize == 3){
                $("#member4").addClass("hide");  
            }
            else{
                $("#member4").removeClass("hide");  
            }
        }
        
        function validateForm(){            
            $("#registrationForm").validate({
                rules: {
                    teamName: {
                        required: true
                    },
                    teamEmail:{
                        required: true
                    },
                    contact:{
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirmPassword:{
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    terms: {
                        required: true
                    }
                    <?php 
                    //for 4 members
                    for ($memberId=1; $memberId<=4; $memberId++){
                        echo ",";
                        echo "member".$memberId."Name:{required: true},";
                        echo "member".$memberId."Email:{required: true},";
                        echo "member".$memberId."Inst:{required: true},";                        
                        echo "member".$memberId."Course:{required: true},";
                        echo "member".$memberId."YOG:{required: true},";
                        echo "member".$memberId."DR:{required: true}";
                    }
                    echo "},";
                    echo " messages: {
                            teamName:'*Team name is compulsory and can contain only alphanumeric values.',
                            teamEmail: '*Please enter a valid contact email address for your team.',
                            contact:'*Please enter a valid numeric contact detail.',
                            password: {
                                required: '*Please provide a password',
                                minlength: '*Your password must be at least 5 characters long'
                            },
                            confirmPassword: {
                                required: '*Repeat your password',
                                equalTo: '*Enter the same password as above'
                            },
                            terms:{
                                required: '*You must agree with our rules'
                            }
                        "
                    ?>
               
                    <?php
                    for ($memberId=1; $memberId<=4; $memberId++){
                        echo ",";
                        echo "member".$memberId."Name:'*Please enter your name.',";
                        echo "member".$memberId."Email:'*Please enter a valid contact email address.',";
                        echo "member".$memberId."Inst:'*Please enter your institution.',";                        
                        echo "member".$memberId."Course:'*Please enter your course title.',";
                        echo "member".$memberId."YOG:'*Please select your year of graduation from the dropdown list.',";
                        echo "member".$memberId."DR:'*Please indicate your dietary preference, or N.A for none.'";
                    }
                    echo "},";
                    echo "errorClass: 'warning',";
                    echo "onkeyup: false";
                    echo "});  "
                    ?>       
        }
        </script>
        <?php        
    }
}
?>
