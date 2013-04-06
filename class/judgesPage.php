<?php
class JudgesPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <img src="<?php echo $this->getPathPrefix(); ?>img/page-header/judges.jpg">
                <h3>SBCC 2013 Judges</h3>
                <p><i>
                    We would like to express our sincere gratitude and appreciation to the following judges, without whom this competition would not be possible:
                </i></p>
                <br>
                <h4>Grand-Finals</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Gerald Teo</td>
                            <td>Chief Executive Officer, Citispa</td>
                        </tr>
                        <tr class="info">
                            <td>Ho Kuen Loon</td>
                            <td>Chief Financial Officer, Keppel Integrated Engineering</td>
                        </tr>
                        <tr>
                            <td>Malcom Wong</td>
                            <td>Head of Commercial, SingPost eCommerce</td>
                        </tr>
                        <tr class="info">
                            <td>Samuel Yik</td>
                            <td>Managing Director, Dian Xiao Er</td>
                        </tr>
                        <tr>
                            <td>Tan Chian Khong</td>
                            <td>Partner, Ernst and Young</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                
                <h4>Semi-Finals</h4>
                <table class="table">
                    <tobdy>
                        <tr>
                            <td>Aloysius Cheong</td>
                            <td>Managing Director, Olive Green Pte Ltd</td>
                        </tr>
                        <tr class="info">
                            <td>Ang Yuit</td>
                            <td>Vice President, Strategies and Development, Association of Small & Medium Enterprises</td>
                        </tr>
                        <tr>
                            <td>Cheang Pei Jing Corinna</td>
                            <td>Head (People), Jetstar Asia</td>
                        </tr>
                        <tr class="info">
                            <td>Daryl Neo</td>
                            <td>Founding Director, Handshakes</td>
                        </tr>
                        <tr>
                            <td>Eugene Zhuang</td>
                            <td>Analyst, Corporate Finance, Deutsche Bank</td>
                        </tr>
                        <tr class="info">
                            <td>Ho Chan Chan</td>
                            <td>Manager (Property Management), Keppel Land</td>
                        </tr>
                        <tr>
                            <td>Jesica Lee</td>
                            <td>Manager, KPMG Services Pte Ltd</td>
                        </tr>
                        <tr class="info">
                            <td>Leow Chee Hwee Willy</td>
                            <td>Partner (Risk Advisory), BDO LLP</td>
                        </tr>
                        <tr>
                            <td>Lim Beng Kiat</td>
                            <td>Project Manager (Operations), Keppel Shipyard</td>
                        </tr>
                        <tr class="info">
                            <td>Ong Li Qin</td>
                            <td>Manager, KPMG Services Pte Ltd</td>
                        </tr>
                        <tr>
                            <td>Tan Jit Khoon</td>
                            <td>Chief Executive Officer, Winson Press Pte Ltd</td>
                        </tr>
                        <tr class="info">
                            <td>Tay Woon Teck</td>
                            <td>Managing Director, RSM Chio Lim</td>
                        </tr>
                        <tr>
                            <td>Uantchern Loh</td>
                            <td>Chief Executive Officer, Pro-Tem Singapore Accountancy Council</td>
                        </tr>
                        <tr class="info">
                            <td>Vincent Ng</td>
                            <td>MD & Head (Financial Institutions Coverage, SEA), BNP Paribas Singapore</td>
                        </tr>
                        <tr>
                            <td>Zwee</td>
                            <td>CEO, Savant Degrees Pte Ltd</td>
                        </tr>
                    </tobdy>
                    
                </table>
            </div>
        </div>
        <?php
    }
}
?>

