<?php
    //Get user Segments
    function getUserSegments() {
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $userID = $_SESSION['id'];
        $stmt = $dbc->prepare("SELECT * FROM usersegments WHERE userID = $userID");
        $stmt->execute();
        $result = $stmt->get_result();

        return  $result;
    }

    function getNumberOfSegments() {
        $result = getUserSegments();
        $numberOfSegments = mysqli_num_rows($result);
        return $numberOfSegments;
    }

    function getUniqueSegments() {
        $result = getUserSegments();
        $UniqueSegments = array();
        while($row = $result->fetch_array()) {
            if (!in_array($row['segmentID'], $UniqueSegments)) {
                array_push($UniqueSegments, $row['segmentID']);
            }
        }
        return count($UniqueSegments);
    }

    function getPercentageComplete() {
        $uniqueSegments = getUniqueSegments();
        $percentageComplete = round($uniqueSegments / 188, 2) * 100;
        return $percentageComplete; 
    }

    function getTotalMiles() {
        $result = getUserSegments();
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