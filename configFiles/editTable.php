<?php
    session_start();
    require_once('config.php');

    $field = $_POST['field'];
    $value = $_POST['value'];
    $username = $_SESSION['name'];

    $sql = "UPDATE userinfo SET $field ='$value' WHERE Username = '$username'";
    $dbc->query($sql)
            or die(mysqli_error($dbc));

    echo $sql;
?>