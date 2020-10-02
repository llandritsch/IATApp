<?php
    session_start();
    require_once('config.php');

    $username = $_SESSION['name'];

        $stmt = $dbc->prepare("SELECT password FROM userinfo WHERE username = '$username'");
        $stmt->execute()
            or die(mysqli_error($dbc));
        $stmt->store_result();
        $stmt->bind_result($password);
    
        if (password_verify($_POST['password'], $password)) {
            $stmt = $dbc->prepare("DELETE * FROM userinfo WHERE username = '$username'");
            $stmt->execute()
                or die(mysqli_error($dbc));
                header('Location: ../confirmDelete.php');
        } else {
            header('Location: ../deleteAccount.php?pwIncorrect=1');
        }
     

    //$stmt->close();
     
?>