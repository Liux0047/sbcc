<?php

class SubmissionPage extends AdminPage{
    public function generateContent() {
        $db = $this->getDB();
        
        $sql = "SELECT registration.registration_id AS registration_id, team_name, file_name, time_uploaded FROM registration LEFT JOIN ".
                "(SELECT * FROM submission WHERE is_latest=1) AS latest_submission ".
                "on latest_submission.registration_id=registration.registration_id ".
                "ORDER BY registration.registration_id";
        $result = $db->query($sql);
        $numRows = $result->num_rows;
        echo "<h3>All Files submitted</h3>";
        echo "<table class='table table-striped'><thead><tr>";
        echo "<td><strong>Team ID</strong></td><td><strong>Team Name</strong></td><td><strong>Latest Case Submission</strong></td><td><strong>Time Submitted</strong></td></tr>";
        echo "<tbody>";
        for ($i=0; $i<$numRows; $i++){
            $row = $result->fetch_assoc();
            echo "<tr>";
            echo "<td>".$row['registration_id']."</td>";
            echo "<td>".$row['team_name']."</td>";
            //encode the filename which will be sent to the donwload function
            if ( $row['file_name'] != null){
                $fileName = urlencode($row['file_name']);
                echo "<td><a href='".$this->getPathPrefix()."functions/case-download.php?fileName=$fileName"."' class='btn btn-info'>";
                echo "<i class='icon-file icon-white'></i> ".$row['file_name']."</a></td>";
                $timeSubmitted = convertTimeZone($row['time_uploaded']);
                echo "<td>".$timeSubmitted."</td>";
            }
            else{
                echo "<td>No submission</td><td></td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    }
}
?>

