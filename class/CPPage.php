<?php
class CPPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <section>
                    <div class="page-header">
                        <h3>SBCC 2013 Competition Portal</h3>
                    </div>
                    <h4>Download the Preliminary Case now!</h4>
                    <p>                        
                        <a href='
                            <?php 
                            $fileName = urlencode("SBCC Preliminary Case 2013.pdf");
                            echo $this->getPathPrefix()."functions/file-download.php?fileName=$fileName"; ?>
                           ' class='btn btn-warning'>
                            <i class="icon-file icon-white"></i> 2013 Preliminary Case
                        </a>
                    </p>    
                    <br>
                    <h4>Preliminary Submission Portal</h4>
                    <p>
                        Upload your <strong>.zip</strong> file containing your <strong>1-Page Executive Summary (PDF)</strong> and <strong>6-Slides PPT (PDF)</strong> below (Deadline 22nd Feb 2013, 1200hrs):
                    </p>
                    <p>
                        The submission period for the Preliminary Round has ended. Thank you for taking part in SBCC 2013. 
                    </p>
                    <p>
                        Teams will be notified through the team email on the status of their submissions by 26 Feb 2013, 2359hrs.
                    </p>
                    <!-- submission portal closed
                    <p>
                        <strong>Multiple submissions allowed</strong>
                    </p>
                    <form enctype="multipart/form-data" action="<?php $this->getPathPrefix(); ?>processFile.php" method="POST">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />                    
                    Submit your file here: <input name="userfile" type="file" />
                    <input class="btn btn-primary" type="submit" value="Send File" />
                    <br>
                    <small>*File size should not exceed 10M</small>
                    </form>                                       
                    -->
                </section>    
                <br>
                <section>
                    <div class="page-header">
                        <h3>Case Preparation Reference Material</h3>
                    </div>
                    <h4>SBCC Case Workshop</h4>
                    <ul>
                        <li>
                            <h5 class="font-black">SBCC 2013 Case Workshop Print Version</h5>
                            <a class="btn " href="
                            <?php
                            $fileName = "SBCC Case Workshop Print Version.pdf";
                            echo $this->getPathPrefix()."functions/file-download.php?fileName=$fileName";
                            ?>">PDF Download
                        </a>
                        </li>
                    </ul>
                    <br>
                    <h4>Case Preparation Kit</h4>
                    <ul>
                        <li>
                            <h5 class="font-black">Case Preparation Slides: Business Solutions' Methodology and Financial Analysis</h5>
                            <a class="btn " href="
                               <?php
                               $fileName = "SBCC 2013 Preparation Kit.pdf";
                               echo $this->getPathPrefix()."functions/file-download.php?fileName=$fileName";
                               ?>">PDF Download
                            </a>
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
                </section>
                
            </div>
        </div>
        <?php
    }
}
?>
