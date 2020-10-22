<?php
 session_start();
 if (isset($_SESSION['name'])) { 
     $loggedIn = true;
     require_once("configFiles/config.php");
     $sql = "SELECT* FROM userinfo WHERE username = '$_SESSION[name]'";
 } else $loggedIn = false;


    //declare and initialize all user variables   
    $segmentID = $_GET['segmentID'];
    $segment = $_GET['segmentName'];
    $date = "";
    $distance = "";
    $time = "";
    $pace = "";
    $elevationGain = "";
    $elevationLoss = "";
    $comments = "";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Segment</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <div class="jumbotron">
            <h1 class="display-4">Add Completed Segment</h1>
        </div>
        
        <?php require_once("Views/Navbar.php"); ?>

        <div id="form-container">
            <div > 
                <h2>Fill out the following to add a completed segment.</h2>
                <form name="addSegment" action="configFiles/confirmAddSegment.php" method="post">
                    <input name="segmentID" type="hidden" value="<?php echo $segmentID ?>"/>
<!-- this portion is auto filled by the segment pg and is disabled for the user -->
                    <div class="form-group">
                        <label for="segment">Segment Name</label>
                        <input class="form-control" type="text" id="segment" name="segment" value="<?php echo $segment ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="date">Date Completed</label>
                        <input class="form-control" type="text" id="date" name="date" value="<?php echo $distance; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="distance">Recorded Distance</label>
                        <input class="form-control" type="text" id="distance" name="distance" value="<?php echo $distance; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Recorded Time</label>
                        <input class="form-control" type="text" id="time" name="time" value="<?php echo $time; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="pace">Pace</label>
                        <input class="form-control" type="text" id="pace" name="pace" value="<?php echo $pace; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="elevationGain">Recorded Elevation Gain</label>
                        <input class="form-control" type="text" id="elevationGain" name="elevationGain" value="<?php echo $elevationGain; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="elevationLoss">Recorded Elevation Loss</label>
                        <input class="form-control" type="text" id="elevationLoss" name="elevationLoss" value="<?php echo $elevationLoss; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="comments">Segment Comments</label>
                        <textarea class="form-control" id="comments" name="comments" value="<?php echo $comments; ?>">Your comments here</textarea>
                    </div>

                    <input type="submit" class="btn btn-dark" value="Submit" />
                    <input type="reset" class="btn btn-dark" value="Clear" />
                </form>
            </div>
        </div>
    </body>
</html>