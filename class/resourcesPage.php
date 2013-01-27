<?php

class ResourcesPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <h2>Resources</h2>
                <p>
                    From the feedback we have gathered, we understand that many of you are facing difficulties with the case. However, we encourage you to strive on and distinguish yourselves. It is only through a tough case can we differentiate the top teams. For many of you without prior case experiences, you may find the links below useful in sharpening your analysis and presentations. We hope SBCC will prove to be a steep but worthwhile learning experience.
                </p>
                <section id="Preparation">
                    <div class="page-header">
                        <h3>Preparation</h3>
                    </div>
                    <p>
                        <a href="http://www.management.umb.edu/master/master_framework.php">Step by step guide to case analysis</a>
                    </p>
                    <p>
                        <a href="http://blog.guykawasaki.com/2006/04/the_art_of_the_.html#axzz1FN9df6N2">Guy Kawasaki on writing executive summaries </a>
                    </p>
                    <p>
                        <a href="http://mmicc.org/index.php?option=com_content&view=article&id=100&Itemid=55">Some excellent examples of quality presentations</a>
                    </p>
                </section>
                <section id="Presentation">
                    <div class="page-header">
                        <h3>Presentation</h3>
                    </div>
                    <p>
                        <a href="http://www4.caes.hku.hk/epc/presentation/content_and_structure.htm">Content and Structure</a>
                    </p>
                    <p>
                        <a href="http://www.experiential.sg/archives/1316">The Art of Persuasion</a>
                    </p>
                    <p>
                        <a href="http://www.wired.com/wired/archive/11.09/ppt2.html">Tufte on Evil Powerpoints</a>
                    </p>
                </section>
                
            </div>
        </div>
        <?php
    }
}
?>
