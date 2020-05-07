<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Cars List</title>
</head>
<body>
<?php include('register.php')?>
<?php include('errors.php')?>

<div class="pageContainer">
	<div class="env">
		<header>
			<h1>Cars List</h1>
			<nav class="navBar">
				<ul class="navList">
					<li class="navItem"><a class="navLink" href="index.php">Home</a></li>
					<li class="navItem"><a class="navLink" href="search.php">Search</a></li>
					
					<li class="navItem"><a class="navLink" href="post.php">Post</a></li>
					<?php include('logincheck.php')?>
				</ul>
			</nav>
		</header>
		<div class="main">
			<div class="signupContainer">
				<h2>Please fill out the form to sign up!</h2>
				<form action="signup.php" method="POST">

					<ul class="vertList">
						<li><input type="text" id="uname" name="uname" placeholder="user name" class="signupInputs"></li>
						<li><input type="text" id="email" name="email" placeholder="email" class="signupInputs"></li>
						<li><input type="password" id="password" name="password" placeholder="password" class="signupInputs"></li>
						<li><input type="password" id="confPassword" name="confPassword" placeholder="confirm password" class="signupInputs"></li>
						<li><a href=""><input type="submit" id="signupButton" name="signupButton" value="Sign Up" class="signupInputs"></a></li>
					</ul>

				</form>
			</div>
		</div>
	</div>
	<footer>
		<div>
			<ul class="footerList">
				<li class="footItem"><a class="footLink" href="contact.php">Contact us</a></li>
				<li class="footItem"><a class="footLink" href="info.php">Information</a></li>
				<li class="footItem"><a class="footLink" href="login.php">Log in</a></li>
				<li class="footItem"><a class="footLink" href="signup.php">Sign up</a></li>
			</ul>
		</div>
	</footer>
</div>
</body>
</html>
