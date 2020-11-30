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
        <div class="jumbotron jumbotron-fluid mt-0 pt-0">
            <div class="container">
            <h1 class="display-4">Ice Age Segment Tracker</h1>
            <p class="lead">Segment information and personal data collection</p>
            </div>
        </div>
        
        <!-- Nabvar -->
        <?php require_once("Views/Navbar.php"); ?>

        <main>
            <div class="mainContainer">
                <h2>My Segments</h2>

                <a href="addSegmentCounty.php"><button class="btn btn-dark account" id="addSegment" type="button">Add Segment</button></a>
                <div class="container">
                    <?php   
                        require_once('configFiles/segmentDBControl.php');
                        require_once("configFiles/config.php");   
                        require_once('Views/MySegmentView.php');

                        $tableArray = getUserSegments();
                    ?>
                    <table class="table">
                        <tr scope="row">
                            <th>Completed Miles</th>
                            <td>
                                <?php 
                                    echo getTotalMiles();
                                ?>
                            </td>
                        </tr>
                        <tr scope="row">
                            <th>Number of Completed Segments</th>
                            <td>
                                <?php
                                    echo getNumberOfSegments();
                                ?>
                            </td>
                        </tr>
                        <tr scope="row">
                            <th>Number of unique Completed Segments</th>
                            <td>
                                <?php
                                    echo getUniqueSegments();
                                ?>
                            </td>
                        </tr>
                        </tr>
                        <tr scope="row">
                            <th>Percentage of trail Completed</th>
                            <td>
                                <?php
                                    echo getPercentageComplete();
                                ?>%
                            </td>
                        </tr>
                    </table>
                    <div id="overAllStatusBar">
                        <?php echo createStatusBarsForFullTrail(getPercentageComplete()) ?>
                    </div>
                </div>
                <div class="row p-3">
                    <div id="counties" class="col-sm-6">
                        <h2>Completed Segments</h2>
                        <div class="container">
                            <?php
                            ?>  <table class="table table-striped"> 
                                <thead><tr><th>Date Completed</th><th>County</th><th>Segment</th></tr></thead>
                                <tbody>
                            <?php getCompletedSegments();?>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- Generate County Completion Status Bars -->
                    <div class="container col-sm-6">
                        <h2>County Completion</h2>
                        <div class="statusBars">
                            <?php  getSegmentsByCounty();?>
                        </div>
                    </div>
                </div>
        </main>
    </div>
    <?php require_once("Views/Footer.php"); ?>
</body>
</html>