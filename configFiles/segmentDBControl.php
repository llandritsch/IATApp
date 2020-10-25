<?php
    //Get user Segments
    function getUserSegments() {
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $userID = $_SESSION['id'];
        $stmt = $dbc->prepare("SELECT * FROM usersegments WHERE userID = $userID");
        $stmt->execute();
        $result = $stmt->get_result();
        $totalMiles =  getTotalMiles($result);
        $numberOfSegments =  getNumberOfSegments($result);
        $uniqueSegments = getUniqueSegments($result);
        $percentComplete = getPercentageComplete($uniqueSegments);
        $tableArray = array($totalMiles, $numberOfSegments, $uniqueSegments, $percentComplete);

        echo $tableArray;
    }

    function getNumberOfSegments($result) {
        $numberOfSegments = mysqli_num_rows($result);
        return $numberOfSegments;
    }

    function getUniqueSegments($result) {
        $miles = 0;
        $UniqueSegments = array();
        while($row = $result->fetch_array()) {
            if (!in_array($row['segmentID'], $UniqueSegments)) {
                array_push($UniqueSegments, $row['segmentID']);
                $miles += $row['distance'];
            }
        }
        echo $miles;
        return count($UniqueSegments);
    }

    function getPercentageComplete($uniqueSegments) {
        $percentageComplete = round($uniqueSegments / 188, 2);
        return $percentageComplete; 
    }

    function getTotalMiles($result) {
        $miles = 0;
        $UniqueSegments = array();
        while($row = $result->fetch_array()) {
            if (!in_array($row['segmentID'], $UniqueSegments)) {
                array_push($UniqueSegments, $row['segmentID']);
                $miles += $row['distance'];
            }
        }
        return $miles;
    }
    
    
?>