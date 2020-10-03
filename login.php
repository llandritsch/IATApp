
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <div class="jumbotron">
            <h1>Login</h1>
        </div>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="segments.html">Segment Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mySegments.html">My Segments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trailInfo.html">Trail Information</a>
                </li>
            </ul>
        </nav>

        <div id="form-container">
        <form action="configFiles/authenticate.php" method="POST" >
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" id="username" name="username" required/>
            </div>
            <?php if (isset($_GET['userIncorrect'])) { ?> 
                <p class="usernameError">Unrecognized Username.  Do you need to <a href="createAccount.php">create an account</a>?</p>
            <?php }?>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" required/>
            <?php if(isset($_GET['pwIncorrect'])) { ?>
                <p class="usernameError">Incorrect Password</p>
            <?php }?>
            </div>
            <input type="submit" class="btn btn-dark" id="loginBtn" name="login" value="Login" />
        </form>
        </div>
    </body>
</html>


