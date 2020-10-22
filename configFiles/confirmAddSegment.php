<?php
    session_start();
        if (isset($_SESSION['name'])) { 
            $loggedIn = true;
            //$userID = $_SESSION['id'];
            require_once("config.php");
            $sql = "SELECT* FROM userinfo WHERE username = '$_SESSION[name]'";
       } else {
            $loggedIn = false;
       }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $stmt = $dbc->prepare('INSERT INTO usersegments (userID, segmentID, DateCompleted, distance, time, Pace, elevationGain, elevationLoss, comments) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param("sssssssss", $userID, $segmentID, $date, $distance, $time, $pace, $elevationGain, $elevationLoss, $comments);
        
        $segmentID = $_POST['segmentID'];
        $segment = $_POST['segment'];
        $userID = $_SESSION['id'];
        $date = $_POST['date'];
        $distance = $_POST['distance'];
        $time = $_POST['time'];
        $pace = $_POST['pace'];
        $elevationGain = $_POST['elevationGain'];
        $elevationLoss = $_POST['elevationLoss'];
        $comments = $_POST['comments'];

        $stmt->execute();
                print_r($dbc->error);
        $stmt->close();

        header("Location: ../mySegments.php");
    }
?>

