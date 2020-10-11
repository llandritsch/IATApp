<?php
    session_start();
    if (isset($_SESSION['name'])) { 
        $loggedIn = true;
        require_once("configFiles/config.php");
        $sql = "SELECT* FROM userinfo WHERE username = '$_SESSION[name]'";
        echo "Joel is a sock";
    } else $loggedIn = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Segments</title>
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
        
        <?php require_once("Views/Navbar.php"); ?>

        <main>

            <div class="mainContainer">
                <div id="counties">
                    <h2>Counties</h2>
                    
<?php
    require_once("configFiles/config.php");
    /* This code gets all segments 
    $segmentQuery = "SELECT county, segmentName FROM segmentinfo";
    $result = $dbc->query($segmentQuery)
            or die(mysqli_error("dbc"));
    $tableRows = "";
    while ($row = mysqli_fetch_array($result)) {

        $tableRows .= "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        
    }
    echo $tableRows;
    

    //Get Segments by county using class
    require('classes/County.php');
    $polkAndBurnett = new County();
    echo $polkAndBurnett -> getCountySegments("Polk & Burnett");

    */
    
?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm"><a class="btn btn-outline-dark" data-toggle="collapse" href="#Polk" role="button" aria-expanded="false">Polk & Burnett</a>
                            <div class="collapse" id="Polk">
                                <div class="card card-body">
                                    <?php    
                                    require('classes/County.php');
                                    $polkAndBurnett = new County();
                                    echo $polkAndBurnett -> getCountySegments("Polk & Burnett");
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $barronAndWashburn = new County();
                        //echo $barronAndWashburn -> createCountyDiv("Barron & Washburn"); 
                        ?>
                        <p class="col-sm">Barron & Washburn</P>
                        <p class="col-sm">Rusk</p>
                    </div>
                    <div class="row">
                        <p class="col-sm">Chippewa</p>
                        <p class="col-sm">Taylor</p>
                        <p class="col-sm">Lincoln</p>
                    </div>
                    <div class="row">
                        <p class="col-sm">Langlade</p>
                        <p class="col-sm">Marathon</p>
                        <p class="col-sm">Portage & Waupaca</p>
                    </div>
                    <div class="row">
                        <p class="col-sm">Waushara</p>
                        <p class="col-sm">Marquette</p>
                        <p class="col-sm">Northern Columbia</p>
                    </div>
                    <div class="row">
                        <p class="col-sm">Sauk</p>
                        <p class="col-sm">Southern Columbia</p>
                        <p class="col-sm">Dane</p>
                    </div>
                    <div class="row">
                        <p class="col-sm">Green</p>
                        <p class="col-sm">Rock</p>
                        <p class="col-sm">Walworth & Jefferson</p>
                    </div>
                    <div class="row">
                        <p class="col-sm">Waukesha</p>
                        <p class="col-sm">Washington</p>
                        <p class="col-sm">Fond du Lac & Sheboygan</p>
                    </div>
                    <div class="row">
                        <p class="col-sm">Manitowoc</p>
                        <p class="col-sm">Kewaunee & Door</p>
                        <div class="col-sm">
                    </div>
       
                </div>

            </div>
            
        </main>
    </div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>