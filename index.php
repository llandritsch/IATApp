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
        <!-- Nabvar -->
        <?php require_once("Views/Navbar.php"); ?>

        <main>

            <div id="mainFlex">
                <div id="about" class="container p-2 mb-4">
                    <h2>A note from the author:</h2>
                    <p>Thank you all for your support in this application! I initially designed it for a school project competition and did not expect it to become what it has!
                            I will be making updates and releasing new features as I have time, but for the time being, please make you enter all information in the form while
                            completing segments or they will not show up in your segment log!  I hope to have this fixed before the next semester starts!  If you notice any bugs 
                            please drop me a line.  Happy Trails!</p>
                    <p>All images are from the Ice Age Trail Guidebook and Atlas. They are being used with permission from the Ice Age Tail Alliance.  Please note that the
                    IAT is is under construction and this site may not reflect the most recent changes.  For the most up to date information, please visit <a href="https://www.iceagetrail.org/">Ice Age Trail Alliance Site</a></p>
                    <p>
                    <h2>About the Ice Age Trail</h2>
                        More than 12,000 years ago, an immense flow of glacial ice sculpted a landscape of remarkable beauty across Wisconsin. 
                        As the glacier retreated, it left behind a variety of unique landscape features. These glacial remnants are now considered 
                        among the world’s finest examples of how continental glaciation sculpts our planet.
                    </p>
                    <p>
                        The Ice Age National Scenic Trail is a thousand-mile footpath that highlights these landscape features as it travels through 
                        some of the state’s most beautiful natural areas. The Trail is entirely within Wisconsin and is one of only eleven National 
                        Scenic Trails.
                    </p>
                    <div id="signUp" class="mb-4"> 
                        <a href="createAccount.php"><button class="btn btn-dark account" id="createAccount" type="button">Create Account</button></a>
                        <a href="login.php"><button class="btn btn-dark account" id="signIn" type="button">Sign In</button></a>
                    </div>
                </div>
                <div id="wiMap">
                    <img src="images/IAT-wi.png" alt="ice age trail map through wi">
                </div>
            </div>
        </main>
    </div>
    <?php require_once("Views/Footer.php"); ?>

</body>
</html>