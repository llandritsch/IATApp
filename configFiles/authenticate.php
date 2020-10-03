<?php
    include("config.php");
    session_start();

    // check to make sure user entered info into both fields
    if (!isset($_POST['username'], $_POST['password']) ) {
        exit('Please enter username and password');
    }

    if ($stmt = $dbc->prepare('SELECT ID, password FROM userinfo WHERE username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($ID, $password);
            $stmt->fetch();
    
            if (password_verify($_POST['password'], $password)) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $ID;
                header('Location: ../myAccount.php');
            } else {
                header('Location: ../login.php?pwIncorrect=1');
            }
        } else {
            header('Location: ../login.php?userIncorrect=1');
        }

        $stmt->close();
    }  
?>