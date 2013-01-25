<?php

class RegistrationPage extends Page{
       
    public function generateContent(){        
        ?>
        <div class="row">
            <div class="span4">
                <?php echo $this->generateLeftCol(); ?>
            </div>
            <div class="span6">
                <h3>Online Registration</h3>
                <p>
                    Registrations stay open until 13 February 2012, 2359H. However, the case will be released on January 30th and deliverables have to be submitted by February 13th. Register early to give yourselves more time!
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
                    for ($memberid=1; $memberid<=4; $memberid++){
                        //hide team member 4 at first
                        if ($memberid == 4){
                            echo "<div id='member$memberid' class=''>";
                        }
                        else {
                            echo "<div id='member$memberid'>";
                        }
                        //member 1 is the leader
                        if ($memberid == 1){
                            echo "<legend>Team Leader</legend>";                            
                        }
                        else{
                            echo "<legend>Team Member $memberid</legend>";
                        }                        
                        ?>      
                            <div class="control-group">                                                
                                <label class="control-label" for="member<?php echo $memberid; ?>Name">Name</label>
                                <div class="controls">
                                    <input type="text" id="member<?php echo $memberid; ?>Name" name="member<?php echo $memberid; ?>Name" placeholder="Name">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="member<?php echo $memberid; ?>Email">Email Address</label>
                                <div class="controls">
                                    <input type="email" id="member<?php echo $memberid; ?>Email" name="member<?php echo $memberid; ?>Email" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="member<?php echo $memberid; ?>Inst">Name of Institution</label>
                                <div class="controls">
                                    <select id="member<?php echo $memberid; ?>Inst" name="member<?php echo $memberid; ?>Inst">
                                        <option value="">--</option>
                                        <option value="NTU">NTU - Nanyang Technological University</option>                
                                        <option value="NUS">NUS - National University of Singapore</option>                
                                        <option value="SMU">SMU - Singapore Management University</option>                
                                        <option value="SIM">SIM - Singapore Institute of Management</option>   
                                        <option value="NYP">NYP - Nanyang Polytechnic</option>                
                                        <option value="NP">NP - Ngee Ann Polytechnic</option>                
                                        <option value="RP">RP - Republic Polytechnic</option>                
                                        <option value="SP">SP - Singapore Polytechnic</option>   
                                        <option value="TP">TP - Temasek Polytechnic</option>   
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="member<?php echo $memberid; ?>Course">Course Title</label>
                                <div class="controls">
                                    <input type="text" id="member<?php echo $memberid; ?>Course" name="member<?php echo $memberid; ?>Course" placeholder="Course Title">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="member<?php echo $memberid; ?>YOG">Year of Graduation</label>
                                <div class="controls">
                                    <select id="member<?php echo $memberid; ?>YOG" name="member<?php echo $memberid; ?>YOG">         
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
                                <label class="control-label" for="member<?php echo $memberid; ?>DR">Dietary Restrictions</label>
                                <div class="controls">
                                    <input type="text" id="member<?php echo $memberid; ?>DR" name="member<?php echo $memberid; ?>DR" value="N.A">
                                </div>
                            </div>
                    
                        </div>
                        <?php
                    }
                    ?>
                    <!-- end of Team members  -->
                    
                    <legend>Agreement</legend>
                    <div class="control-group">
                        <label class="checkbox">
                            <input type="checkbox">We solemnly agree to play by the rules and are ready for the ultimate case experience!                            
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
            validateForm(4);
            // validate signup form on keyup and submit            
        });
        
        //change number of members
        function changeTeamSize(){
            var teamSize = document.getElementById("teamSize").value;
            if (teamSize == 3){
                $("#member4").addClass("hide");  
                validateForm(3);
            }
            else{
                $("#member4").removeClass("hide");  
                validateForm(4);
            }
        }
        
        function validateForm( teamSize ){
            if (teamSize == 4){
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
                        }
                        <?php 
                        //for 4 members
                        for ($memberid=1; $memberid<=4; $memberid++){
                            echo ",";
                            echo "member".$memberid."Name:{required: true},";
                            echo "member".$memberid."Email:{required: true},";
                            echo "member".$memberid."Inst:{required: true},";                        
                            echo "member".$memberid."Course:{required: true},";
                            echo "member".$memberid."YOG:{required: true},";
                            echo "member".$memberid."DR:{required: true}";
                        }
                        ?>

                    },
                    messages: {
                        teamName:"*Team name is compulsory and can contain only alphanumeric values.",
                        teamEmail: "*Please enter a valid contact email address for your team.",
                        contact:"*Please enter a valid numeric contact detail.",
                        password: {
                            required: "*Please provide a password",
                            minlength: "*Your password must be at least 5 characters long"
                        },
                        confirmPassword: {
                            required: "*Repeat your password",
                            equalTo: "*Enter the same password as above"
                        }
                        <?php
                        for ($memberid=1; $memberid<=4; $memberid++){
                            echo ",";
                            echo "member".$memberid."Name:'*Please enter your name.',";
                            echo "member".$memberid."Email:'*Please enter a valid contact email address.',";
                            echo "member".$memberid."Inst:'*Please enter your institution.',";                        
                            echo "member".$memberid."Course:'*Please enter your course title.',";
                            echo "member".$memberid."YOG:'*Please select your year of graduation from the dropdown list.',";
                            echo "member".$memberid."DR:'*Please indicate your dietary preference, or N.A for none.'";
                        }
                        ?>

                    },
                    errorClass: "warning",                
                    onkeyup: false
                });         
            }
            else{
                //if only 3 members
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
                        }
                        <?php 
                        //for 3 members only
                        for ($memberid=1; $memberid<=3; $memberid++){
                            echo ",";
                            echo "member".$memberid."Name:{required: true},";
                            echo "member".$memberid."Email:{required: true},";
                            echo "member".$memberid."Inst:{required: true},";                        
                            echo "member".$memberid."Course:{required: true},";
                            echo "member".$memberid."YOG:{required: true},";
                            echo "member".$memberid."DR:{required: true}";
                        }
                        ?>

                    },
                    messages: {
                        teamName:"*Team name is compulsory and can contain only alphanumeric values.",
                        teamEmail: "*Please enter a valid contact email address for your team.",
                        contact:"*Please enter a valid numeric contact detail.",
                        password: {
                            required: "*Please provide a password",
                            minlength: "*Your password must be at least 5 characters long"
                        },
                        confirmPassword: {
                            required: "*Repeat your password",
                            equalTo: "*Enter the same password as above"
                        }
                        <?php
                        for ($memberid=1; $memberid<=3; $memberid++){
                            echo ",";
                            echo "member".$memberid."Name:'*Please enter your name.',";
                            echo "member".$memberid."Email:'*Please enter a valid contact email address.',";
                            echo "member".$memberid."Inst:'*Please enter your institution.',";                        
                            echo "member".$memberid."Course:'*Please enter your course title.',";
                            echo "member".$memberid."YOG:'*Please select your year of graduation from the dropdown list.',";
                            echo "member".$memberid."DR:'*Please indicate your dietary preference, or N.A for none.'";
                        }
                        ?>

                    },
                    errorClass: "warning",                
                    onkeyup: false
                });         
            }
        }
        </script>
        <?php        
    }
}
?>
