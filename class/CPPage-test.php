<?php
class CPPageTest extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <h3>Competition Portal</h3>
                <br>                
                <div class="alert alert-info">
                    <h4>SBCC 2013 Preliminary Submissions  Portal</h4>
                    <br>
                    <p>
                        Upload your <strong>.zip</strong> file containing your <strong>1-Page Executive Summary (PDF)</strong> and <strong>6-Slides PPT (PDF)</strong> below (Deadline 22nd Feb 2013, 0900hrs):
                    </p>
                    <form enctype="multipart/form-data" action="<?php $this->getPathPrefix(); ?>processFile.php" method="POST">
                    <!-- MAX_FILE_SIZE must precede the file input field -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="8000000" />
                    <!-- Name of input element determines name in $_FILES array -->
                    Send this file: <input name="userfile" type="file" />
                    <input type="submit" value="Send File" />
                    </form>
                </div>
                <h4>Case Preparation Kit</h4>
                <ul>
                    <li>
                        <h5 class="font-black">Case Workshop Video – Kanesh Bala</h5>
                        <a class="btn " href="
                           <?php
                           $fileName = "SBCC Case Wkshp.m4v";
                           echo $this->getPathPrefix()."functions/file-download.php?fileName=$fileName";                           
                           ?>">Video Download</a>
                    </li>
                    <li>
                        <h5 class="font-black">Case Preparation Slides: Business Solutions' Methodology and Financial Analysis</h5>
                        <a class="btn " href="
                           <?php
                           $fileName = "SBCC 2013 Preparation Kit.pdf";
                           echo $this->getPathPrefix()."functions/file-download.php?fileName=$fileName";
                           ?>">PDF Download</a>
                    </li>
                </ul>
                <br>
                <h4>Past-year SBCC Qualifying Cases</h4>
                <ul>
                    <li>
                        <h5 class="font-black">Qualifying Case 2012</h5>
                        <a class="btn " href="
                           <?php
                           $fileName = "SBCC 2012 Qualifying Round Case.pdf";
                           echo $this->getPathPrefix()."functions/file-download.php?fileName=$fileName";
                           ?>">Download Case</a>  
                    </li>
                    <li>
                        <h5 class="font-black">Qualifying Case 2011</h5>
                        <p>
                            <a class="btn " href="
                                <?php
                                $fileName = "SBCC 2011 Qualifying Case.pdf";
                                echo $this->getPathPrefix()."functions/file-download.php?fileName=$fileName";
                                ?>">Download Case
                            </a>
                        </p>
                        <p>
                            <a class="btn " href="
                                <?php
                                $fileName = "SBCC 2011 Assignment Memo.pdf";
                                echo $this->getPathPrefix()."functions/file-download.php?fileName=$fileName";
                                ?>">Download SBCC Assignment Memo
                            </a> 
                        </p>
                        
                    </li>
                </ul>
                <br>
                <h4>
                    Video Presentation for Qualifying Case 2011
                </h4>
                <iframe width="420" height="315" src="http://www.youtube-nocookie.com/embed/J89hnFWcrlg?rel=0" frameborder="0" allowfullscreen></iframe><br>
                Note that this video presentation is only to be used as a guide for your team's application of case analysis.
                
            </div>
        </div>
        <?php
    }
}
?>
