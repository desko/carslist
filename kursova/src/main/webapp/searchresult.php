<?php
session_start();
$make;
$model;
$maxPrice;
$db = mysqli_connect('localhost', 'root', 'root', 'carsdb');
$row = array();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/main.css">
	<title>Cars List</title>
</head>
<body>
<div class="pageContainer card">
	<div class="card-body">
		<header>
			<h1>Cars List</h1>
			<nav class="navbar navBar">
				<ul class="navList">
					<li class="navItem"><a class="navLink" href="index.php">Home</a></li>
					<li class="navItem"><a class="navLink" href="search.php">Search</a></li>
					<li class="navItem"><a class="navLink" href="post.php">Post</a></li>
					<?php include('logincheck.php')?>
				</ul>
			</nav>
		</header>
		<div class="main card-body">
			<div class="resultContainer container-fluid">
    			<?php include ('searchresmodal.php');
                ?>
			</div>
		</div>
	</div>
	<footer class="card-footer text-muted">
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
<script src="modal.js"></script>
</body>
</html>