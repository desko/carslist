<!doctype html>
<?php include('register.php') ?>
<?php include('errors.php') ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Cars List</title>
</head>
<body>
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
			<div class="loginContainer">
			<h2>Log in:</h2>
				<form method="post" action="login.php">
					<ul class="vertList">
						<li><input type="text" id="username" name="username" placeholder="username" class="signupInputs"></li>
						<li><input type="password" id="password" name="password" placeholder="password" class="signupInputs"></li>
						<li><a href=""><input type="submit" id="loginButton" name="loginButton" value="Log In" class="signupInputs"></a></li>
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
