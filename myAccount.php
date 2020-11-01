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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
</head>
<body> 
    <div id="bodyContainer">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="display-4">Account Information</h1>
            </div>
        </div>
        
        <!-- Nabvar -->
        <?php require_once("Views/Navbar.php"); ?>
        
    </div>
    <main>
        <div class="mainContainer">
            <h2>My Account</h2>
                <table class="table">
                <?php 
                    $result = $dbc->query($sql)
                            or die(mysqli_error($dbc));
                    $row = mysqli_fetch_array($result);
                    $username = $row['UserName'];
                    $firstName = $row['FirstName'];
                    $lastName = $row['LastName'];
                    $email = $row['Email'];
                ?>
                        <tr scope="row"><td>UserName</td><td><?php echo $username?></td></tr>
                        <tr scope="row"><td>First Name</td><td contentEditable="true" class="edit" id="firstName"><?php echo $firstName?></td></tr>
                        <tr scope="row"><td>Last Name</td><td contentEditable="true" class="edit" id="lastName"><?php echo $lastName?></td></tr>
                        <tr scope="row"><td>Email</td><td contentEditable="true" class="edit" id="email"><?php echo $email?></td></tr>
                    </div>
                </table>
        
                <small class="btn btn-dark accountButton"><a href="deleteAccount.php">Delete Account</a></small>
        </div>
    </main>
    <script src="JSFiles/editableTable.js"></script>
</body>
</html>