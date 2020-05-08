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
	<link rel="stylesheet" type="text/css" href="/main.css">
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
			<div class="resultContainer">
    			<?php

					if (isset($_POST['searchButton'])) 
					{
						$make = mysqli_real_escape_string($db, $_POST['car']);
						if($make=="")//selected all manufacturers
						{
							$maxprice = mysqli_real_escape_string($db, $_POST['maxPrice']);
							if($maxprice=="")//no price requirment
							{

								$query = "SELECT manufacturer, model, price, dirpicture1 FROM listings";
								
							}
							else//price requirment
							{
								$query = "SELECT manufacturer, model, price, dirpicture1 FROM listings WHERE price<='$maxprice'";
								
							}

        			    	
						}
						else
						{
							$model = mysqli_real_escape_string($db, $_POST['model']);
							$maxprice = mysqli_real_escape_string($db, $_POST['maxPrice']);
							if($model==	"all")//all models and specific maker selected
							{
								if($maxprice=="")//no price requirment
								{
									$query = "SELECT manufacturer, model, price, dirpicture1 FROM listings WHERE manufacturer='$make'";
									
								}
								else//with price requirment
								{
									$query = "SELECT manufacturer, model, price, dirpicture1 FROM listings WHERE manufacturer='$make' AND price<='$maxprice'";
									
								}
							}
							else//specific model selected
							{
								if($maxprice=="")//no price requirment
								{
	
									$query = "SELECT manufacturer, model, price, dirpicture1 FROM listings WHERE manufacturer='$make' AND model='$model' ";
									
								}
								else//with price requirment
								{
									$query = "SELECT manufacturer, model, price, dirpicture1 FROM listings WHERE manufacturer='$make' AND model='$model' AND price<='$maxprice'";
									
									//$query = "SELECT manufacturer, model, price, dirpicture1 FROM listings WHERE price<='$maxprice'";
								}

							}
						}
						$result = mysqli_query($db, $query);
        			

        			    $dir="dirpicture1";
        			    $imgdirstart="<img class=\"searchImage\" src=\"/uploads/";
						if (mysqli_num_rows($result) > 0) 
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
