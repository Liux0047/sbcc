<?php
class SponsorsPage extends Page{
    public function generateContent(){
        ?>
        <div class="row">
            <div class="span3">
                <?php  $this->generateLeftCol(); ?>
            </div>
            <div class="span7">    
                <img src="<?php echo $this->getPathPrefix(); ?>img/page-header/sponsors.jpg">
                <br><br>
                <h4>Official Diamond Sponsor</h4>
                <img src="<?php echo $this->getPathPrefix(); ?>img/Keppel-Corporation.jpg">
                <br><br>
                <p>
                    With a global footprint in over 30 countries, Keppel Corporation leverages its international network, resources and talents to grow its key businesses. It aims to be the provider of choice for solutions to the offshore and marine industries, and sustainable environment and urban living. The Keppel Group of Companies includes Keppel Offshore & Marine (O&M), Keppel Integrated Engineering (KIE), Keppel Energy, Keppel Telecommunications & Transportation (Keppel T&T) and Keppel Land, among others.
                </p>
                <p>
                    <a href="http://www.keppelom.com/en/"><strong>Keppel O&M</strong></a> is the leader in offshore rig design, construction and repair, ship repair and conversion, and specialised shipbuilding, with a global network of 20 yards and offices.
                </p>
                <p>
                    <a href="http://www.kie.com.sg/"><strong>Keppel Integrated Engineering</strong></a> is a leading global provider of environmental solutions and engineering services, offering a complete range of water and thermal technologies. <a href="http://www.keppelenergy.com/"><strong>Keppel Energy</strong></a> has a track record of developing, owning and operating power plants in Singapore, Asia and Latin America. <a href="http://www.keppeltt.com.sg/"><strong>Keppel Telecommunications & Transportation</strong></a> is a leading service provider in Southeast Asia and Europe with businesses in logistics and data centres.
                </p>
                <p> 
                    <a href="http://www.keppelland.com.sg/"><strong>Keppel Land</strong></a> contributes to changing cityscapes across Asia as a choice developer with a sterling portfolio of award-winning residential developments, integrated townships and investment-grade commercial properties.
                </p>
                <p>
                    As Keppel continues to expand its global presence and penetrate new frontiers, it is committed to its three corporate thrusts of Sustaining Growth in its key businesses, Empowering Lives through continuous training and development, and Nurturing Communities in the countries and regions where it operates.
                </p>
                <p>
                    For more information, please visit <a href="http:\\www.kepcorp.com"><strong>www.kepcorp.com</strong></a>
                </p>
                <br><br>
                    
                <h4>Official Platinum Sponsor</h4>
                <img src="<?php echo $this->getPathPrefix(); ?>img/leefoundation-logo.jpg">
                <p>
                    The Lee Foundation was set up in Singapore in 1952 and in Malaya in 1960 by the late businessman and philanthropist Lee Kong Chian (1893-1967). The Foundation has granted hundreds of millions of dollars to various causes, regardless of race, language, religion, nationality, geographical location, and with no conditions attached. The Lee Foundation supports the development of case writing and teaching in Singapore through support of the Asian Business Case Centre at Nanyang Business School.
                </p>
                <br><br>
                
                <h4>Other Sponsors</h4>
                <img src="<?php echo $this->getPathPrefix(); ?>img/SOE new logo.png">
                <p>
                    Now in its eleventh year, the Spirit of Enterprise – an IPC approved charity, promotes and advances entrepreneurial spirit in Singapore by a variety of efforts honouring local self-reliant entrepreneurs operating small and medium-sized businesses and serves to inspire Singaporeans, especially the young, to become entrepreneurs by facilitating interaction, communication and knowledge dissemination between students, the entrepreneurs and the general public. Students, entrepreneurs who are interested in the activities or the awards process of SOE can write to <a href="mailto:secretariat@soe.org.sg">secretariat@soe.org.sg</a>.
                </p>
                <br><br>
                
                <h4>Sponsorship Opportunity</h4>                
                <p>
                    Your generosity will give you the opportunity to identify potential business leaders and show your corporate support for cultivating the next generation of sustainable businesses. Some of our sponsors' packages also allow you to interact with the most talented undergraduates in Singapore and build a network for the future. In sponsoring SBCC, you are choosing to partner a reputable business school and a prestigious competition. 
                </p>
                <p>
                    If you wish to promote your company and products in cooperation with SBCC or if you have any further questions, please contact the SBCC Sponsorship Team at sponsorship@sgbcc.com.sg
                </p>
                
            </div>
        </div>
        <?php
    }
}
?>
