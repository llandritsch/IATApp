<?php
    session_start();
    if (isset($_SESSION['name'])) { 
        $loggedIn = true;
        require_once("configFiles/config.php");
        $sql = "SELECT* FROM userinfo WHERE username = '$_SESSION[name]'";
    } else $loggedIn = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
</head>
<body>
    <div id="bodyContainer">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="display-4">Ice Age Segment Tracker</h1>
            <p class="lead">Segment information and personal data collection</p>
            </div>
        </div>
        <?php require_once("Views/Navbar.php"); ?>

        <main>

            <div class="mainContainer">
                <?php
                    require_once("configFiles/config.php");
                
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
                    $image = $row["imageName"];


                    // display segment information
                    echo "<h1 style='text-align: center'>$segmentName</h1>";
                    if ($loggedIn) {
                        echo "<a href=\"addSegment.php?segmentName={$segmentName}&segmentID={$ID}\"><button class=\"btn btn-dark mb-4\">Add to Completed Segments</button></a>";
                    }
                    
                    ?><table class="table">
                        <thead><th>County</th><th>Distance</th><th>Elevation Grade</th><th>Technical Grade</th><th>Water Availability</th></thead>
                        <tr><td><?php echo $county?></td><td><?php echo $distance?></td><td><?php echo $elevationGrade?></td><td><?php echo $technicalGrade?></td><td><?php echo $waterAvailability?></td></tr>
                    </table>

                    <?php
                    echo '<li><img src="images/SegmentImages/' . $image .'" /></li></ul>';
                    if ($row['secondaryImageName']) {
                        $secondaryImage = $row['secondaryImageName'];
                        echo '<li><img src="images/SegmentImages/' . $secondaryImage .'" /></li></ul>';
                    }
                    
                    if ($row['tertiaryImageName']) {
                        $tertiaryImage = $row['tertiaryImageName'];
                        echo '<li><img src="images/SegmentImages/' . $tertiaryImage .'" /></li></ul>';
                    }
                ?>
            </div>
        </main>
    </div>
</body>
</html>


