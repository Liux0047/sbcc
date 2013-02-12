<?php

class TeamsPage extends AdminPage{
    private $isDeleted = false;
    private $isDelteError = false;
    
    public function generateContent() {
        
        $db = $this->getDB();
        
        //if delete successful
        if ($this->isDeleted){
            echo "<div class='alert alert-success'>";
            echo "Team ".$_REQUEST['deleteId']." was successfully deleted";
            echo "</div>";
        }
        if ($this->isDelteError){        
            echo "<div class='alert alert-error'>";
            echo "Error in deleting Team ".$_REQUEST['deleteId'];
            echo "</div>";
        }
        
        echo "<h3>Teams Registered</h3>";
        echo "<table class='table table-hover'><tbody>";
        //query for all team register
        $sqlTeam = "SELECT * FROM registration";
        $resultTeam = $db->query($sqlTeam);
        $numTeamRows = $resultTeam->num_rows;
        for ($i=0; $i<$numTeamRows; $i++){
            $rowTeam =  $resultTeam->fetch_assoc();
            echo "<tr>";            
            //team id
            echo "<td rowspan='".$rowTeam['team_size']."'><span class='badge badge-info'>".$rowTeam['registration_id']."</span>";
            echo "<br><br>";
            //delete button
            echo "<a href='./teams.php?deleteId=".$rowTeam['registration_id']."' class='deleteBtn'>";
            echo "<i class='icon-trash'></i></a></td>";
            //team ref No. & name & contact $ email 
            echo "<td rowspan='".$rowTeam['team_size']."'>";
            echo generateRegRef($rowTeam['registration_id'], $rowTeam['team_size']);
            echo "<br>";
            echo $rowTeam['team_name']."<br>";
            echo $rowTeam['team_email']."<br>";
            echo $rowTeam['contact_no']."<br>";
            echo "<br>";
            echo "Registered on<br>";
            echo convertTimeZone($rowTeam['time_registered']);
            echo "</td>";
            //display info for each member
            $sqlmember = "SELECT * FROM member WHERE registration_id=".$rowTeam['registration_id'];
            $resultMember = $db->query($sqlmember);
            for($j=0; $j<$rowTeam['team_size']; $j++){
                //format the table
                if ($j != 0){
                    echo "<tr>";
                }
                //display info for each member
                $rowMember = $resultMember->fetch_assoc();                
                //if member is leader
                if ($rowMember['is_leader']==1){
                    echo "";
                    echo "<td><strong>*".$rowMember['name']."</strong></td>";
                }
                else{                    
                    echo "<td>".$rowMember['name']."</td>";
                }
                echo "</td>";
                echo "<td>".$rowMember['email']."</td>";
                echo "<td>".$rowMember['institution']."</td>";
                echo "<td>".$rowMember['course']."</td>";
                echo "</tr>";
            }  
        }        
        echo "</tbody></table>";
    }
    
    public function generateScript() {
        parent::generateScript();
        ?>
        <script type="text/javascript">            
            $('.deleteBtn').on('click', function () {
                return confirm('Are you sure you want to delete this team?');
            });            
        </script>
        <?php
    }
    
    public function setIsDeleted($isDeleted){
        $this->isDeleted = $isDeleted;
    }
    
    public function setIsDelteError ($isDelteError){
        $this->isDelteError = $isDelteError;
    }
}
?>
