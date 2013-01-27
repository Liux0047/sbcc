<?php
class ProcessRegPage extends Page {
    private $regRef = "SGB0000";
    public function generateContent() {
        ?>
        <div class="page-header">
            <h2>Thank You</h2>
        </div>        
        <p>
            Thank you and congratulations on your successful registration for Singapore Business Case Competition.
        </p>
        <p>
            A confirmation email with your registration details has been send to your team's email address. Please log in to the competition portal with your team's email and password.
        </p>
        <p>
            Your registration reference is <?php echo $this->regRef; ?>.
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
