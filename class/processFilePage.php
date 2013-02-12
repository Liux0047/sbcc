<?php
class ProcessFilePage extends Page {
    private $errorMessage = '';
    public function generateContent() {
        echo "<div class='span10'>";
        //if the error msg has not been set
        if ( $this->errorMessage != ''){
            echo "<div class='alert alert-error'>";
            echo "<h3>Error:</h3>";
            echo "<h6>".$this->errorMessage."</h6>";
            echo "</div>";
        }
        else{
            ?>
            <div class="page-header">
                <h2>Thank You</h2>
            </div>        
            <p>
                We have received your submission.
            </p>
            <p>
                A confirmation email will be sent to you.
            </p>
            <?php
            echo "</div>";
        }
    } 
    
    public function setErrorMessage($message){
        $this->errorMessage = $message;
    }
}
?>
