<?php
    session_start();
    if (isset($_SESSION['name'])) { 
        $loggedIn = true;
        require_once("config.php");
        $sql = "SELECT* FROM userinfo WHERE username = '$_SESSION[name]'";
        echo "Joel is a sock";
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
                        <a class="nav-link" href="mySegments.html">My Segments</a>
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

            <div id="mainFlex">
                <div id="about">
                    <h2>About the Ice Age Trail</h2>
                    <p>
                        More than 12,000 years ago, an immense flow of glacial ice sculpted a landscape of remarkable beauty across Wisconsin. 
                        As the glacier retreated, it left behind a variety of unique landscape features. These glacial remnants are now considered 
                        among the world’s finest examples of how continental glaciation sculpts our planet.
                    </p>
                    <p>
                        The Ice Age National Scenic Trail is a thousand-mile footpath that highlights these landscape features as it travels through 
                        some of the state’s most beautiful natural areas. The Trail is entirely within Wisconsin and is one of only eleven National 
                        Scenic Trails.
                    </p>
                </div>

                <div id="wiMap">
                    <img src="images/IAT-wi.png" alt="ice age trail map through wi">
                </div>
            </div>

            <div id="signUp">
                <a href="createAccount.php"><button class="btn btn-dark account" id="createAccount" type="button">Create Account</button></a>
                <a href="login.php"><button class="btn btn-dark account" id="signIn" type="button">Sign In</button></a>
            </div>
        </main>
    </div>
</body>
</html>