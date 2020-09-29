<?php
    session_start();
    require_once("config.php");

    $sql = "SELECT* FROM userinfo WHERE username = '$_SESSION[name]'";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
</head>
<body>
    <div id="bodyContainer">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="display-4">Account Information</h1>
            <p class="loggedInAs">Logged in as: <?php echo "$_SESSION[name]"?></p>
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
                    <a class="nav-link" href="mySegments.html">My Segments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trailInfo.html">Trail Information</a>
                </li>
            </ul>

            <?php if ($_SESSION['loggedin']) { ?>
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
    </div>
    <main>
        <div class="form-container">
            <h2>My Account</h2>

        </div>
    </main>
</body>
</html>