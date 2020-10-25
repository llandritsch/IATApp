<?php

    //Get user Segments
    function getUserSegments() {
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $userID = $_SESSION['id'];
        $stmt = $dbc->prepare("SELECT * FROM userinfo WHERE id = $userID");
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array();
        echo getNumberOfSegments($row);
        //echo getUniqueSegments($result);
    }

    function getNumberOfSegments($row) {
        $numberOfSegments = count($row);
        return $numberOfSegments;
    }

    function getUniqueSegments($result) {
        $row = $result->fetch_assoc();
        $UniqeSegments = array();
        while($row = $result) {
            if (!in_array($row['segmentID'])) {
                $UniqeSegments->array_push($row);
            }
        }
    }
?>