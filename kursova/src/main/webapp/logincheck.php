<?php 
if(!isset($_SESSION)) //checks if user is logged and displays  either login and register or logout button
{ 
    session_start(); 
} 
if (isset($_SESSION['username'])) 
{    ?>
        <li class="navItem"><a class="navLink" href="mylistings.php">My Listings</a></li>
        <li class="navItem"><a class="navLink" href="logout.php">Log out</a></li>
    <?php }
else{?>
    <li class="navItem"><a class="navLink" href="login.php">Log in</a></li>
    <li class="navItem"><a class="navLink" href="signup.php">Sign up</a></li>
    <li class="navItem"><a class="navLink" href="mylistings.php">My Listings</a></li>
    <?php }
    ?>