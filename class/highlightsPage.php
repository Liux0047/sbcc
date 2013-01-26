<?php

class HighlightsPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <img src="<?php echo $this->getPathPrefix(); ?>img/page-header/highlights.jpg">
                <h4>Watch out for future updates!</h4>
            </div>
        </div>
        <?php
    }
}
?>
