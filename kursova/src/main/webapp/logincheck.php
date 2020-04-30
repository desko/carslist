<<<<<<< HEAD
<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (isset($_SESSION['username'])) 
{    ?>
        <li class="navItem"><a class="navLink" href="logout.php">Log out</a></li>
    <?php }
else{?>
    <li class="navItem"><a class="navLink" href="login.php">Log in</a></li>
    <li class="navItem"><a class="navLink" href="signup.php">Sign up</a></li>
    <?php }
=======
<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (isset($_SESSION['username'])) 
{    ?>
        <li class="navItem"><a class="navLink" href="logout.php">Log out</a></li>
    <?php }
else{?>
    <li class="navItem"><a class="navLink" href="login.php">Log in</a></li>
    <li class="navItem"><a class="navLink" href="signup.php">Sign up</a></li>
    <?php }
>>>>>>> branch 'master' of https://github.com/desko/carslist.git
    ?>