
        <html>
    <head>
        <meta charset="UTF-8">
        <title>Create Account</title>
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
                    <a class="nav-link" href="index.html">Home</a>
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
        <form action="authenticate.php" method="POST" >
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" id="username" name="username" />
            </div>
            <div class="form-group">
                <label for="username">Password</label>
                <input class="form-control" type="password" id="password" name="password" />
            </div>
            <input type="submit" class="btn btn-dark" id="loginBtn" name="login" value="Login" />
        </form>
        </div>
    </body>
</html>


