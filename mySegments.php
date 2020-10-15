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
        
        <!-- Nabvar -->
        <?php require_once("Views/Navbar.php"); ?>

        <main>
            <div class="mainContainer">
                <h2>My Segments</h2>

                <a href="addSegmentCounty.php"><button class="btn btn-dark account" id="addSegment" type="button">Add Segment</button></a>

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