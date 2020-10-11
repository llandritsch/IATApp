<?php
    session_start();
    require_once("configFiles/config.php");

    $sql = "SELECT* FROM userinfo WHERE username = '$_SESSION[name]'";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
</head>
<body>
    <div id="bodyContainer">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="display-4">Delete Account</h1>
            <p class="loggedInAs">Logged in as: <?php echo "$_SESSION[name]"?></p>
            </div>
        </div>
        
        <?php require_once("Views/Navbar.php"); ?>
        
    </div>
    <main>
        <div class="mainContainer">
            <p>Enter password to delete account</p>
            <form name="createAccount" method="post" action="configFiles/deleteConfirm.php">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password">
                    <?php if(isset($_GET['pwIncorrect'])) { ?>
                        <p class="usernameError">Incorrect Password</p>
                    <?php }?>
                </div>
            </form>
                
        
        </div>
    </main>
    <script src="JSFiles/editableTable.js"></script>
</body>
</html>