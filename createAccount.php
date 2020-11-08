<?php
    session_start();
    require_once('configFiles/config.php');

    //declare and initialize all user variables   
    $username = "";
    $password = "";
    $confirmPassword = "";
    $firstName = "";
    $lastName = "";
    $email = "";
    $userNameTaken = false;
    $passwordsDontMatch = false;

    // Process form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstName = trim($_POST['firstName']);
        $lastName = trim($_POST['lastName']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $confirmPassword = trim($_POST['confirmPassword']);
        $email = trim($_POST['email']);

        //validate username
        if (empty($username)) {
            echo "Please enter a username.";
        } else {
            $userNameQuery = "SELECT ID FROM userinfo WHERE username = '$username'";
            $result = $dbc->query($userNameQuery)
                    or die(mysqli_error($dbc));
            if (mysqli_num_rows($result) !== 0) {
                $userNameTaken = true;
            } else {
                //validate confirm password
                if (empty($confirmPassword)) {
                    echo "Please confirm your password.";
                } else if ($confirmPassword != $password) {
                    $passwordsDontMatch = true;
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $insertQuery = "INSERT INTO userinfo (UserName, Password, FirstName, LastName, Email) VALUES ('$username', '$password', '$firstName', '$lastName', '$email')";
                    $addResult = $dbc->query($insertQuery)
                            or die(mysqli_error($dbc));
                    header("location:login.php");
                }
            }
        } 

    }

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Account</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <div class="jumbotron">
            <h1 class="display-4">Create Your Account</h1>
        </div>
        <?php require_once("Views/Navbar.php"); ?>
        
        <div id="form-container">
            <div > 
                <h2>Fill out the following information to create your account.</h2>
                <form name="createAccount" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" onsubmit="return validateForm();">

                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input class="form-control" type="text" id="firstName" name="firstName" value="<?php echo $firstName; ?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input class="form-control" type="text" id="lastName" name="lastName" value="<?php echo $lastName; ?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" id="email" name="email" value="<?php echo $email; ?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username" value="<?php echo $username; ?>" required/>
                    </div>
                        <?php if ($userNameTaken) {?>
                        <p class="usernameError">Username is already taken</p>
                        <?php } ?>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password" required/>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Retype Password</label>
                        <input class="form-control" type="password" id="confirmPassord" name="confirmPassword" required/>
                    </div>
                        <?php if ($passwordsDontMatch) {?>
                        <p class="usernameError">Passwords do not match</p>
                        <?php } ?>

                    <input type="submit" class="btn btn-dark" value="Submit" />
                    <input type="reset" class="btn btn-dark" value="Clear" />
                </form>
            </div>
        </div>
        <script src="validation.js"></script>
    </body>
</html>