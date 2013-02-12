<?php

class AdminIndexPage extends AdminPage{
    public function generateContent() {
        echo "<h2>Dashboard</h2>";
        $db = $this->getDB();
        //query database to get the number of teams registered
        $sql = "SELECT COUNT(*) AS num_rows FROM registration";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        $numRows = $row['num_rows'];
        echo "<h4>Total Registrations</h4>";
        echo "$numRows Teams<br><br>";
        
        //query db to get the number of cases submitted
        $sql = "SELECT COUNT(*) AS num_rows FROM submission";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        $numRows = $row['num_rows'];
        echo "<h4>Total Case Submissions Received</h4>";      
        echo "$numRows files<br><br>";
        
        //query DB to get dietary restrictions
        echo "<h4>Dietary Restrictions</h4>";
        $sql = "SELECT * FROM member WHERE dietary_restriction != 'N.A'";
        $result = $db->query($sql);
        $num_rows = $result->num_rows;
        echo "<table><thead><tr><td><strong>Team ID</strong></td><td><strong>Name</strong></td><td><strong>Restriction</strong></td></tr></thead>";
        echo "<tbody>";
        for ($i=0; $i<$num_rows; $i++){
            $row = $result->fetch_assoc();
            echo "<tr><td>";
            echo "<span class='span1'>".$row['registration_id']."</span>";
            echo "</td>";
            echo "<td>";
            echo "<span class='span2'>".$row['name']."</span>";
            echo "</td>";
            echo "<td>";
            echo "<span class='span6'>".$row['dietary_restriction']."</span>";
            echo "</td></tr>";
        }
        echo "</tr></table>";
        
        
        
    }
}
?>
