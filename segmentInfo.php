<?php

$dbc = mysqli_connect("localhost", "lisa", "bacon", "iceage")
    or die(mysqli_error("dbc"));
/*
$segmentQuery = "SELECT * FROM segmentinfo";
$result = $dbc->query($segmentQuery)
    or die(mysqli_error("dbc")); 

    while($row = mysqli_fetch_array($result)) {
        echo "id: " . $row["ID"] . " Segment Name: " . $row["SegmentName"] . " Distance: " . $row["Distance"];
    }
*/
// Get segment ID from index.html
$ID = $_GET["id"];

// get segment info from db using id and set variables 
$infoQuery = "SELECT * FROM segmentinfo WHERE ID = $ID";
$result = $dbc->query($infoQuery)
        or die(mysqli_error("dbc"));
$row = mysqli_fetch_array($result);
$county = $row["county"];
$segmentName = $row["SegmentName"];
$distance = $row["Distance"];
$elevationGrade = $row["ElevationGrade"];
$technicalGrade = $row["TechnicalGrade"];
$water = $row["WaterAvailable"];
if ($water == "1") {
    $waterAvailability = "available";
} else {
    $waterAvailability = "not available";
}

// display segment information
echo "<h1>$segmentName</h1>";
echo "<ul><li>County: $county</li>";
echo "<li>Distance: $distance</li>";
echo "<li>Elevation Grade: $elevationGrade</li>";
echo "<li>Technical Grade: $technicalGrade</li>";
echo "<li>Water Availability: $waterAvailability";
echo '<li><img src="images/stCroixSeg.jpg" /></li></ul>';
?>