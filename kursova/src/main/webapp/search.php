<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
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
					<!--<li class="navItem"><a class="navLink" href="login.php">Log in</a></li>
					<li class="navItem"><a class="navLink" href="signup.php">Sign up</a></li> -->
				</ul>
			</nav>
		</header>
		<div class="main card-body">
			<div class="searchContainer container-fluid">
				<form method="post" action="searchresult.php">
					<ul class="vertList">
						<li class="searchItem">
							<select name="car" id="car" class="searchInput" onchange="changeModels(this.value)">
							    <option value="">all</option>
								<option value="Audi">Audi</option>
								<option value="BMW">BMW</option>
								<option value="Mercedes-Benz">Mercedes-Benz</option>
								<option value="Opel">Opel</option>
								<option value="Seat">Seat</option>
								<option value="Skoda">Skoda</option>
								<option value="VW">VW</option>
							</select>
						</li>
						<li class="searchItem">
							<select name="model" id="model" class="searchInput">
							</select>
						</li>
						<li class="searchItem"><input type="text" name="maxPrice" id="maxPrice" class="searchInput" placeholder="max price"></li>
						<li><input type="submit" name="searchButton" class="searchInput" id="searchButton" value="Search"></li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	<footer class="card-footer text-muted">
		<div>
			<ul class="card-footer text-muted">
				<li class="footItem"><a class="footLink" href="contact.php">Contact us</a></li>
				<li class="footItem"><a class="footLink" href="info.php">Information</a></li>
				<li class="footItem"><a class="footLink" href="login.php">Log in</a></li>
				<li class="footItem"><a class="footLink" href="signup.php">Sign up</a></li>
			</ul>
		</div>
	</footer>
</div>
<script src="script.js"></script>
</body>
</html>
