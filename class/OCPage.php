<?php
class OCPage extends Page{
    private $committee = array(
        'Tay Zi Xuan' => array('degree' => 'Bachelor of Accountancy and Bachelor of Business (Banking and Finance)','position'=>'Organising Chairperson' ),
        'Wilbert Tedja' => array('degree' => 'Bachelor of Accountancy','position'=>'Organising Committee Advisor' ),
        'Kenny Ong' => array('degree' => 'Bachelor of Accountancy','position'=>'Competition Director' ),
        'David Koh' => array('degree' => 'Bachelor of Accountancy and Bachelor of Business','position'=>'Finance Director cum Honourary General Secretary' ),
        'Cristine Xu' => array('degree' => 'Bachelor of Accountancy and Bachelor of Business ','position'=>'Marketing Director' ),
        'Eunice Tan' => array('degree' => 'Bachelor of Accountancy','position'=>'Marketing Director' ),
        'Gabriel Chee' => array('degree' => 'Bachelor of Accountancy and Bachelor of Business','position'=>'Operations Director' ),
        'Leong Shi Harn' => array('degree' => 'Bachelor of Accountancy and Bachelor of Business','position'=>'Operations Director' ),
        'Samuel Cheng' => array('degree' => 'Bachelor of Business','position'=>'Public Relations and Liaison Director' ),
        'Tan Chee Yang' => array('degree' => 'Bachelor of Accountancy','position'=>'Public Relations and Liaison Director' ),
        'Benjamin Goh' => array('degree' => 'Bachelor of Accountancy and Bachelor of Business (Banking and Finance)','position'=>'Sponsorship Director' ),
        'Tham Ying Ling' => array('degree' => 'Bachelor of Accountancy and Bachelor of Business (Banking and Finance)','position'=>'Sponsorship Director' )
        
    );
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
                    <?php                           
                    foreach ($this->committee as $name => $value){
                        ?>
                        <tr>
                            <td valign="middle">
                                <img src="<?php echo $this->getPathPrefix(); ?>img/committee-photos/<?php echo $name ;?>.jpg">
                            </td>
                            <td style="vertical-align: middle">
                                <p><strong><?php echo $name; ?></strong></p>
                                <p>
                                    <i class="icon-book"></i> <?php echo $value['degree']; ?><br>
                                    <i class="icon-user"></i> <?php echo $value['position'];?>
                                </p>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>            
                    
                </table>
            </div>
        </div>

        <?php
    }
}
?>
