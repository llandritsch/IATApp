<?php

    class County {

       public $county;

       function set_county ($county) {
           $this->county = $county;
       }
       function get_county() {
           return $this->$county;
       }

       function getCountySegments($county) {
            $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
            $segments = "";
            $countyQuery = "SELECT ID, segmentName FROM segmentinfo WHERE county = '$county'";
            $result = $dbc->query($countyQuery)
                    or die(mysqli_error($dbc));
            while ($row = mysqli_fetch_array($result)) {
                $segments .= "<a href='segmentInfo.php?id=$row[ID]'>$row[segmentName]</a>";
            }
            return $segments;
        }

        function createCountyButtons() {
            $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
            $countyQuery = "SELECT DISTINCT county FROM segmentinfo";
            $result = $dbc->query($countyQuery)
                    or die(mysqli_error($dbc));
            while ($row = mysqli_fetch_array($result)) {
                echo "<button class=\"btn btn-dark ml-2 ml-2 mt-2\">$row[0]</button>";
            }
        }
        
    }
?>
