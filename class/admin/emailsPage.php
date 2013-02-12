<?php
class EmailsPage extends AdminPage{
    private $allEmail;
    public function generateContent() {
        $db = $this->getDB();
        $this->allEmail = '';
        
        $sql = "SELECT team_email, team_name, registration_id FROM registration";
        $result = $db->query($sql);
        $numRows = $result->num_rows;
        echo "<h3>All Teams Email Address</h3>";
        echo "<table class='table table-striped'><thead><tr>";
        echo "<td><strong>Team ID</strong></td><td><strong>Team Name</strong></td><td><strong>Team Email</strong></td></tr>";
        echo "<tbody>";
        for ($i=0; $i<$numRows; $i++){
            $row = $result->fetch_assoc();
            echo "<tr>";
            echo "<td>".$row['registration_id']."</td>";
            echo "<td>".$row['team_name']."</td>";
            echo "<td>".$row['team_email']."</td>";
            //append the eamil to the all email
            $this->allEmail.= $row['team_email']."; ";
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<h3>Combined Email String</h3>";
        echo "<div class='span6'>".$this->allEmail."</div>";
        echo "<hr>";
    }
}
?>
