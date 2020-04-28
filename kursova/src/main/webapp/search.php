<!doctype html>
<html>
<head>
	<meta charset="utf-8">
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
					<li class="navItem"><a class="navLink" href="newlisted.php">New</a></li>
					<li class="navItem"><a class="navLink" href="post.php">Post</a></li>
					<li class="navItem"><a class="navLink" href="login.php">Log in</a></li>
					<li class="navItem"><a class="navLink" href="signup.php">Sign up</a></li>
				</ul>
			</nav>
		</header>
		<div class="main">
			<div class="searchContainer">
				<form>
					<ul class="vertList">
						<li class="searchItem">
							<select name="cars" id="car" class="searchInput" onchange="changeModels(this.value)">
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
							<select name="models" id="model" class="searchInput">
							</select>
						</li>
						<li class="searchItem"><input type="text" id="maxPrice" class="searchInput" placeholder="max price"></li>
						<li><input type="button" class="searchInput" id="searchButton" value="Search"></li>
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
<script src="script.js"></script>
</body>
</html>
