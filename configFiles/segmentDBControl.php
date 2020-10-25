<?php

    //Get user Segments
    function getUserSegments() {
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $userID = $_SESSION['id'];
        $stmt = $dbc->prepare("SELECT * FROM usersegments WHERE userID = $userID");
        $stmt->execute();
        $result = $stmt->get_result();
        echo getNumberOfSegments($result);
        echo "<hr/>";
        $uniqueSegments = getUniqueSegments($result);
        echo "<hr/>";
        echo getPercentageComplete($uniqueSegments);
        echo getNumberOfMiles($result);
    }

    function getNumberOfSegments($result) {
        $numberOfSegments = mysqli_num_rows($result);
        return $numberOfSegments;
    }

    function getUniqueSegments($result) {
        $UniqueSegments = array();
        while($row = $result->fetch_array()) {
            if (!in_array($row['segmentID'], $UniqueSegments)) {
                array_push($UniqueSegments, $row['segmentID']);
            }
        }
        return count($UniqueSegments);
    }

    function getPercentageComplete($uniqueSegments) {
        $percentageComplete = round($uniqueSegments / 188, 2);
        return $percentageComplete; 
    }

    function getNumberOfMiles($result) {
        $numberOfMiles = 0;
        while($row = $result->fetch_array()) {
            echo $row['distance'];
            echo "sup";
            $numberOfMiles += $row['distance'];
        }
        return $numberOfMiles;
    }
?>