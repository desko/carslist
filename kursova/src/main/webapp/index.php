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
					<!-- Buttons section -->
					<li class="navItem"><a class="navLink" href="index.php">Home</a></li>
					<li class="navItem"><a class="navLink" href="search.php">Search</a></li>
					
					<li class="navItem"><a class="navLink" href="post.php">Post</a></li>
					<?php include('logincheck.php')?>
					<!--<li class="navItem"><a class="navLink" href="login.php">Log in</a></li>
					<li class="navItem"><a class="navLink" href="signup.php">Sign up</a></li> -->
				</ul>
			</nav>
		</header>
		<div class="main">
			<div class="newPostContainer">
        		<?php
                    $db = mysqli_connect('localhost', 'root', 'root', 'carsdb');//create db connection
        			$query="SELECT manufacturer, model, price, dirpicture1 FROM listings ORDER BY idlisting DESC LIMIT 10";//sql query to select the field needed for the listing details
        			$result = mysqli_query($db, $query);//execute query
        			$row = array();
        			$dir="dirpicture1";
        			$imgdirstart="<img class=\"searchImage\" src=\"/uploads/";
        			if (mysqli_num_rows($result) > 0)//display  maker,model,price for each listing
        			{
        			    while($row = mysqli_fetch_assoc($result)) {
        			        echo "<div class=\"eachResultContainer\">";
        			        echo $row["manufacturer"]." ".$row["model"]."<br>".$row["price"]. "<br>";
        			        echo $imgdirstart.$row[$dir]."\">";
        			        echo "</div>";
        			    }
        			}
        			else
        			{
        			    echo "0 results";
        			}
        		?>
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
