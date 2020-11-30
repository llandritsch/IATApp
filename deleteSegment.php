<?php
    $segmentId = $_GET['segmentId'];
    $dbc = mysqli_connect('localhost', 'lisa', 'bacon', 'iceage');
    $stmt = $dbc->prepare("DELETE FROM usersegments WHERE completedID = ?");
    $stmt->bind_param("s", $segmentId);

    $stmt->execute()

        or die(mysqli_error($dbc));
        
    header('Location: mySegments.php');      
    
?>