<?php
class LoginPage extends Page{
    private $isFalied = false;
    
    public function generateContent(){        
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>  
            <div class="span7">  
                <div class="page-header">
                    <h3>Log in</h3>
                </div>
                <div class="row">
                    <div class="span4">
                        <?php 
                        if ($this->isFalied){
                            ?>
                            <div class="alert alert-block alert-error" >                                
                                <h4 class="alert-heading">Sorry, your logging in has failed</h4>
                                <p>Invalid email or password</p>
                                <p>
                                  <a class="btn btn-danger" href="<?php echo $this->getPathPrefix(); ?>forget-pwd.php">Forget password?</a> 
                                </p>
                            </div>
                            <?php
                        }
                        ?>
                        <form id="login" action="./login.php" method="POST">
                            <label for="userEmail" >   
                                <input class="span3" id="userEmail" name="userEmail" type="text" placeholder="Email Address"/>
                            </label>                                
                            <label for="password">           
                                <input class="span3" id="password" name="password" type="password" placeholder="password"/>
                            </label>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                            or
                            <a href="<?php echo $this->getPathPrefix(); ?>registration.php">
                                Register here
                            </a>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
        <?php
    }    
    
    public function setFailed($isFalied){
        $this->isFalied = $isFalied;
    }
}
?>
