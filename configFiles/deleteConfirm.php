<?php
    session_start();
    require_once('config.php');

    $username = $_SESSION['name'];

    //DELETE FROM `userinfo` WHERE `userinfo`.`ID` = 17;
    
        $stmt = $dbc->prepare("SELECT * FROM userinfo WHERE Username = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute() 
                or die(mysqli_error($dbc));
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $password = $row['Password'];
        
    /*
        $sql = "SELECT Password FROM userinfo WHERE Username = '$username'";
        $password = $dbc->query($sql)
                or die(mysqli_error($dbc));
    */
        
    
        if (password_verify($_POST['password'], $password)) {
            $stmt = $dbc->prepare("DELETE FROM userinfo WHERE Username = ?");
            $stmt->bind_param('s', $username);
            $stmt->execute()
                or die(mysqli_error($dbc));
                session_destroy();
                //echo "deleted";
                header('Location: ../confirmDelete.php');
        } else {
            //echo "unsuccessful";
            header('Location: ../deleteAccount.php?pwIncorrect=1');
        }
     

    //$stmt->close();
     
?>