<?php
    require('classes/County.php');
    
    function getCompletedSegments(){
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $userQuery = "SELECT * FROM usersegments u JOIN segmentinfo s ON u.segmentID = s.ID WHERE u.userID = $_SESSION[id] ORDER BY DateCompleted desc";
        $result = $dbc->query($userQuery)
                or die(mysqli_error($dbc));
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr scope='row'><td>".$row[3]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td><a href='completedSegment.php'>See Data</a></tr>";               
        }
    }

    function getSegmentsByCounty() {
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $userQuery = "SELECT * FROM usersegments u JOIN segmentinfo s ON u.segmentID = s.ID WHERE u.userID = $_SESSION[id]";
        //$countyquery = "SELECT DISTINCT county FROM segmentinfo s JOIN usersegments u ON s.ID = u.segmentID WHERE u.userID = $_SESSION[id]";
        $result = $dbc->query($userQuery)
                    or die(mysqli_error($dbc));
    
        $countyList = array();

        while ($row = mysqli_fetch_array($result)) {
            //add county, segmentname and set count to 1 if the county is not already in the countyList
            $countyName = $row[11];
            if (!array_search($countyName, array_column($countyList, 'county'))) {
                $county = array('county' => $row[11], 'segment' => $row[12], 'count' => 1);
                array_push($countyList, $county);
            // if the county is already in the list but the segment is not, then add segment and increase count by 1
            } else if (!($county = array_search($row[11], array_column($countyList, $row[12])))) {
                echo "segment not in the array";
            }
        }

        echo count($countyList);
        
        
    }

    function getCountyPercent($county) {
        $dbc =mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $countyQuery;
    }
?>



