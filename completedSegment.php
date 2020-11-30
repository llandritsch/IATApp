<?php
    session_start();
    if (isset($_SESSION['name'])) { 
        $loggedIn = true;
        require_once("configFiles/config.php");
        $sql = "SELECT* FROM userinfo WHERE username = '$_SESSION[name]'";
    } else {
        $loggedIn = false;
    }
    $segmentId = $_GET['completedId'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Completed</title>
</head>
<body>
    <div id="bodyContainer">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="display-4">Ice Age Segment Tracker</h1>
            <p class="lead">Segment information and personal data collection</p>
            </div>
        </div>
        <!-- Nabvar -->
        <?php require_once("Views/Navbar.php"); ?>

        <main>

            <div id="mainFlex">
                <div id="about" class="container p-2">
                    <?php 
                        require_once('Views/mySegmentView.php');
                    ?>
                        <h2><?php//put segment name here   ?></h2>
                        <table class="table table-striped">
                            <thead><th>Date Completed</th><th>Distance</th><th>Time</th><th>Pace</th><th>Elevation Gain</th><th>Elevation Loss</th><th>Comments</th><th></th></thead>
                            <?php echo getCompletedSegment($segmentId)?>
                        </table>
                </div>
            </div>
        </main>
    </div>
    <?php require_once("Views/Footer.php"); ?>
</body>
</html>