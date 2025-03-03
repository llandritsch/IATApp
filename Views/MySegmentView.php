<?php
    require('classes/County.php');
    
    function getCompletedSegments(){
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $userQuery = "SELECT * FROM usersegments u JOIN segmentinfo s ON u.segmentID = s.ID WHERE u.userID = $_SESSION[id] ORDER BY DateCompleted desc";
        $result = $dbc->query($userQuery)
                or die(mysqli_error($dbc));
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr scope='row'><td>".$row[3]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td><a href='completedSegment.php?completedId=".$row[0]."'>See Data</a></tr>";               
        }
    }

    function getSegmentsByCounty() {
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $userQuery = "SELECT * FROM usersegments u JOIN segmentinfo s ON u.segmentID = s.ID WHERE u.userID = $_SESSION[id]";
        $result = $dbc->query($userQuery)
                    or die(mysqli_error($dbc));

        /* A map of counties and all segments for the county
        // Ex: array(
            "Some County" => array("Segment 1", "Segment 2"),
            "Another County => array("Segment 3")
        )
        */
        $segmentsByCounty = array();

        while ($row = mysqli_fetch_array($result)) {
            $countyName = $row[11];
            $segmentName = $row[12];

            if (array_key_exists($countyName, $segmentsByCounty)) {
                array_push($segmentsByCounty[$countyName], $segmentName);
            } else {
                $segmentsByCounty[$countyName] = [$segmentName];
            }
            // Remove any duplicate segments in the list of segments for this county
            $segmentsByCounty[$countyName] = array_unique($segmentsByCounty[$countyName]);
        }

        createStatusBarsForCounty($segmentsByCounty);        
    }

    function createStatusBarsForCounty($segmentsByCounty) {
        foreach ($segmentsByCounty as $county => $segments) {
            $count = count($segments);
            $percent = getCountyPercent($county, $count);
            echo $county;
        
            $statusBar = 
                    '<div class="progress" style="height: 25px">
                        <div class="progress-bar" role="progressbar" style="width: '. $percent .'%;">' . $percent . '%</div>
                    </div>';
            
            echo $statusBar;
        }
    }

    function getCountyPercent($county, $numberComplete) {
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $countQuery = "SELECT COUNT(ID) FROM segmentinfo WHERE county = '$county'";
        $result = $dbc->query($countQuery)
                or die(mysqli_error($dbc));
        $row = $result->fetch_row();
        $count = $row[0];
        $calcPercent = ($numberComplete / $count) * 100; 
        $percentComplete = round($calcPercent, 2);

        return $percentComplete;
    }

    // Completed Segment View
    function getCompletedSegment($segmentId) {
        $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
        $segmentQuery = "SELECT * FROM usersegments WHERE completedID = $segmentId";
        $result = $dbc->query($segmentQuery)
                or die(mysqli_error($dbc));
        $tableInfo = '';
        while ($row = mysqli_fetch_array($result)) {
            $tableInfo .= "<tr><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td><a href='deleteSegment.php?segmentId=".$segmentId."'>Delete Segment</a></td></tr>";
        }
        return $tableInfo;
    }

    function createStatusBarsForFullTrail($percentComplete) {
        $statusBar = 
                '<div class="progress" style="height: 25px">
                    <div class="progress-bar" role="progressbar" style="width: '. $percentComplete .'%;">' . $percentComplete . '%</div>
                </div>';
        
        echo $statusBar;
    }
    
    
?>



