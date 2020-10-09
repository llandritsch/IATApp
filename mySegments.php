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
                <h2>My Segments</h2>

                <a href="addSegment.php"><button class="btn btn-dark account" id="addSegment" type="button">Add Segment</button></a>

                <table class="table">
                    <tr scope="row">
                        <th>Number of Completed Segments</th>
                        <th>Number of unique Completed Segments</th>
                        <th>Percentage of trail Completed</th>
                    </tr>
                </table>
            </div>
            
        </main>
    </div>
</body>
</html>