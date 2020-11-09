
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="segments.php">Segment Information</a>
                    </li>
                </ul>
    
                <?php if ($loggedIn) { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="mySegments.php">My Segments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myAccount.php">My Account(<?php echo "$_SESSION[name]"?>)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                </ul>
                <?php } else { ?>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
                <?php } ?>
            </nav>