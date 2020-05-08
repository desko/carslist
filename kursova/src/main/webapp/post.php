<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();


if ( isset( $_SESSION['username'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
    
} else {
    // Redirect them to the login page
    header("Location: /login.php");
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Cars List</title>
</head>
<body>
<div class="pageContainer">
	<div class="card-body">
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
			<div class="postContainer">
				<form enctype="multipart/form-data" action="upload.php" method="post">
					<ul class="vertList">
						<li class="postItem">
							<select name="cars" id="car" class="postInput" name="car" onchange="changePostModels(this.value)">
								<option value="Audi">Audi</option>
								<option value="BMW">BMW</option>
								<option value="Mercedes-Benz">Mercedes-Benz</option>
								<option value="Opel">Opel</option>
								<option value="Seat">Seat</option>
								<option value="Skoda">Skoda</option>
								<option value="VW">VW</option>
							</select>
						</li>
						<li class="postItem">
							<select name="models" id="model"  class="postInput">
							</select>
						</li>
						<li class="postItem"><input type="text" id="price" name="price" class="postInput" placeholder="price"></li>
						<li class="postItem"><textarea name="descriptionText" class="postInput postText" id="descriptionText" type="text"  placeholder="Please describe your post..." maxlength="1000"></textarea></li>
						<?php ?>
                        <li class="postItem"><input type="file" id="img" name="img" accept="image/*" class="postImage"></li>
                        <li class="postItem"><input type="submit" name="postButton" id="postButton" class="postInput" value="Post"></li>
					</ul>
				</form>
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
<script src="script.js"></script>
</body>
</html>
