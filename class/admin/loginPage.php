<?php

class AdminLoginPage extends AdminPage{
    private $isFalied = false;
    
    public function generateContent(){        
        ?>
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
                    </div>
                    <?php
                }
                ?>
                <form id="login" action="./login.php" method="POST">
                    <label for="account" >   
                        <input class="span3" id="account" name="account" type="text" placeholder="Account"/>
                    </label>                                
                    <label for="password">           
                        <input class="span3" id="password" name="password" type="password" placeholder="password"/>
                    </label>
                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>                        
            </div>
        </div>
        <?php
    }    
    
    public function setFailed($isFalied){
        $this->isFalied = $isFalied;
    }
}
?>
