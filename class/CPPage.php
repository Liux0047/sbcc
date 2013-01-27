<?php
class CPPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <h3>Competition Portal</h3>
                <h4>Watch out for future updates!</h4>
            </div>
        </div>
        <?php
    }
}
?>
