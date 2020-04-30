<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

<<<<<<< HEAD

=======
>>>>>>> branch 'master' of https://github.com/desko/carslist.git
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
					<?php include('logincheck.php')?>
				</ul>
			</nav>
		</header>
		<div class="main">
			<div class="postContainer">
				<form enctype="multipart/form-data" action="upload.php" method="post">
					<ul class="vertList">
						<li class="postItem">
<<<<<<< HEAD
							<select name="cars" id="car" class="postInput" name="car" onchange="changePostModels(this.value)">
=======
							<select name="cars" id="car" class="postInput" onchange="changeModelsPost(this.value)">
>>>>>>> branch 'master' of https://github.com/desko/carslist.git
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
<<<<<<< HEAD
						<li class="postItem"><input type="text" id="price" name="price" class="postInput" placeholder="price"></li>
						<li class="postItem"><textarea name="descriptionText" class="postInput postText" id="descriptionText" type="text"  placeholder="Please describe your post..." maxlength="1000"></textarea></li>
						<?php ?>
                        <li class="postItem"><input type="file" id="img" name="img" accept="image/*" class="postImage"></li>
                        <li class="postItem"><input type="submit" name="postButton" id="postButton" class="postInput" value="Post"></li>
=======
						<li class="postItem"><input type="text" id="maxPrice" class="postInput" placeholder="price"></li>
						<li class="postItem"><textarea class="postInput postText" placeholder="Please describe your post..." maxlength="1000"></textarea></li>
						<li class="postItem"><input type="file" id="img" name="img" accept="image/*" class="postImage"> <input type="submit" value="submit picture"></li>
						<li class="postItem"><input type="button" class="postInput" value="Post"></li>
>>>>>>> branch 'master' of https://github.com/desko/carslist.git
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
