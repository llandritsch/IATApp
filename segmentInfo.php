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
            <?php if ($loggedIn) {?>
                <p class="loggedInAs">Logged in as: <?php echo "$_SESSION[name]"?></p>
            <?php } ?>
            </div>
        </div>
        
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="segments.php">Segment Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mySegments.php">My Segments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trailInfo.html">Trail Information</a>
                    </li>
                </ul>
    
                <?php if ($loggedIn) { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="myAccount.php">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                </ul>
                <?php } else { ?>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
                <?php } ?>
            </nav>

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
                    echo "<h1>$segmentName</h1>";
                    echo "<ul><li>County: $county</li>";
                    echo "<li>Distance: $distance</li>";
                    echo "<li>Elevation Grade: $elevationGrade</li>";
                    echo "<li>Technical Grade: $technicalGrade</li>";
                    echo "<li>Water Availability: $waterAvailability";
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


