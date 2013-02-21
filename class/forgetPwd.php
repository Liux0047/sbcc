<?php
class ForgetPwd extends Page {
    private $isPwdSent = false;
    
    public function generateContent() {
        ?>
        <div class="span6">
            <div class="page-header">
                <h3>Retrieve your password</h3>
            </div>
            <?php
            //if password is sent to the email
            if ($this->isPwdSent){
                ?>                    
                <p>
                    Your password has been sent to your registered email address.
                </p>
                <p>
                    Please log in to your email to retrieve your password.
                </p>
                <?php
            }
            else{
                ?>
                <form id="inputEmail" action="<?php echo $this->getPathPrefix(); ?>forget-pwd.php" method="GET">
                    Enter your team email here:  
                    <label for="userEmail" > 
                        <input class="span3" id="userEmail" name="userEmail" type="text" placeholder="Email Address"/>
                    </label>    
                    <button type="submit" class="btn btn-primary">Retrieve my password</button>
                </form> 
                <?php            
            }
        echo "</div>";
    }
    
    public function setPwdSent ($isPwdSent){
        $this->isPwdSent = $isPwdSent;
    }
}
?>
