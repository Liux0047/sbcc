<?php
class OCPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">  
                <img src="<?php echo $this->getPathPrefix(); ?>img/page-header/organising-committee.jpg">
                <br><br>
                <h2>Organising Committee</h2>
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/1.jpg">
                        </td>
                        <td>
                            <p><strong>Tay Zi Xuan</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy and Bachelor of Business (Banking and Finance)<br>
                                <i class="icon-user"></i> Organizing Chairperson
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/2.jpg">
                        </td>
                        <td>
                            <p><strong>Wilbert Tedja</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy<br>
                                <i class="icon-user"></i> Organising Committee Advisor
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/3.jpg">
                        </td>
                        <td>
                            <p><strong>Kenny Ong</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy<br>
                                <i class="icon-user"></i> Competition Director
                            </p>
                        </td>
                    </tr><tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/4.jpg">
                        </td>
                        <td>
                            <p><strong>David Koh</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy and Bachelor of Business <br>
                                <i class="icon-user"></i> Finance Director
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/5.jpg">
                        </td>
                        <td>
                            <p><strong>Cristine Xu</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy and Bachelor of Business <br>
                                <i class="icon-user"></i> Marketing Director
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/6.jpg">
                        </td>
                        <td>
                            <p><strong>Eunice Tan</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy<br>
                                <i class="icon-user"></i> Marketing Director
                            </p>
                        </td>
                    </tr><tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/7.jpg">
                        </td>
                        <td>
                            <p><strong>Gabriel Chee </strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy and Bachelor of Business <br>
                                <i class="icon-user"></i> Operations Director
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/8.jpg">
                        </td>
                        <td>
                            <p><strong>Leong Shi Harn</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy and Bachelor of Business<br>
                                <i class="icon-user"></i> Operations Director
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/9.jpg">
                        </td>
                        <td>
                            <p><strong>Samuel Cheng </strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Business<br>
                                <i class="icon-user"></i> Public Relations and Liaison Director
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/10.jpg">
                        </td>
                        <td>
                            <p><strong>Tan Chee Yang</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy<br>
                                <i class="icon-user"></i> Public Relations and Liaison Director
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/11.jpg">
                        </td>
                        <td>
                            <p><strong>Benjamin Goh</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy and Bachelor of Business (Banking and Finance)<br>
                                <i class="icon-user"></i> Sponsorship Director
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/12.jpg">
                        </td>
                        <td>
                            <p><strong>Tham Ying Ling</strong></p>
                            <p>
                                <i class="icon-book"></i> Bachelor of Accountancy and Bachelor of Business (Banking and Finance)<br>
                                <i class="icon-user"></i> Sponsorship Director
                            </p>
                        </td>
                    </tr>
                    
                    
                    
                </table>
            </div>
        </div>

        <?php
    }
}
?>
