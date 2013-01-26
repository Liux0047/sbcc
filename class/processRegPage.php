<?php
class ProcessRegPage extends Page {
    private $regRef = "SGB0000";
    public function generateContent() {
        ?>
        <div class="page-header">
            <h2>Thank You</h2>
        </div>        
        <p>
            Thank you and Congratulations on your successful registration for Ernst & Young Singapore Business Case Competition
            An email with your registration details have been send to your team's email address. A seperate email containing the login username and password for your team to access the case portal will be sent to you shortly after your registration have been verified.
        </p>
        <p>
            Your registration reference is <?php echo $regRef; ?>.
        </p>
        <?php
    }
    
    public function setRegRef($regRef){
        $this->regRef = $regRef;
    }
    
    public function getRegRef(){
        return $this->regRef;
    }
}

?>
