<?php
 session_start();
 require_once("configFiles/config.php");

 $sql = "SELECT* FROM userinfo WHERE username = '$_SESSION[name]'";


    //declare and initialize all user variables   
    $segment = "";
    $distance = "";
    $time = "";
    $elevationGain = "";
    $elevationLoss = "";
    $comments = "";

    // Process form data when form is submitted
    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /*
        //validate username
        if (empty($username)) {
            echo "Please enter a username.";
        } else {
            $userNameQuery = "SELECT ID FROM userInfo WHERE username = '$username'";
            $result = $dbc->query($userNameQuery)
                    or die(mysqli_error($dbc));
            if (mysqli_num_rows($result) !== 0) {
                $userNameTaken = true;
            } else {
                //validate confirm password
                if (empty($confirmPassword)) {
                    echo "Please confirm your password.";
                } else if ($confirmPassword != $password) {
                    $passwordsDontMatch = true;
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $insertQuery = "INSERT INTO userInfo (UserName, Password, FirstName, LastName, Email) VALUES ('$username', '$password', '$firstName', '$lastName', '$email')";
                    $addResult = $dbc->query($insertQuery)
                            or die(mysqli_error($dbc));
                    header("location:login.php");
                }
            }
        } 

    }
    */
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
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="segments.html">Segment Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mySegments.html">My Segments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trailInfo.html">Trail Information</a>
                </li>
            </ul>
        </nav>
        <div id="form-container">
            <div > 
                <h2>Fill out the following to add a completed segment.</h2>
                <form name="createAccount" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<!-- what is the best way to get the segment name since there are so many? -->
                    <div class="form-group">
                        <label for="Segment">Segment Name</label>
                        <input class="form-control" type="text" id="segment" name="segment" value="<?php echo $segment; ?>" required/>
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
                        <label for="elevationGain">Recorded Elevation Gain</label>
                        <input class="form-control" type="text" id="elevationGain" name="elevationGain" value="<?php echo $elevationGain; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="elevationLoss">Recorded Elevation Gain</label>
                        <input class="form-control" type="text" id="elevationLoss" name="elevationLoss" value="<?php echo $elevationLoss; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="comments">Recorded Elevation Gain</label>
                        <input class="form-control" type="textarea" id="comments" name="comments" value="<?php echo $comments; ?>"/>
                    </div>

                    <input type="submit" class="btn btn-dark" value="Submit" />
                    <input type="reset" class="btn btn-dark" value="Clear" />
                </form>
            </div>
        </div>
    </body>
</html>