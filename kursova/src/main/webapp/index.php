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
                    $db = mysqli_connect('localhost', 'root', 'root', 'carsdb');
        			$query="SELECT * FROM listings ORDER BY idlisting DESC LIMIT 10";
        			$result = mysqli_query($db, $query);
        			$row = array();
        			$dir="dirpicture1";
        			$imgdirstart="<img class=\"searchImage\" src=\"/uploads/";
        			if (mysqli_num_rows($result) > 0)
        			{
        			    while($row = mysqli_fetch_assoc($result)) {
        			        $item = array();
        			        $item['idlisting']           = $row['idlisting'];
        			        $item['listingowner']        = $row['listingowner'];
        			        $item['description']         = $row['description'];
        			        $item['dirpicture1']         = $row['dirpicture1'];
        			        $item['manufacturer']        = $row['manufacturer'];
        			        $item['model']               = $row['model'];
        			        $item['price']               = $row['price'];
        			        $returnData[] = $item;
        			        echo "<div id=\"eachResultContainerID\" class=\"eachResultContainer\" onclick=\"displayModal(".$item['idlisting'].")\">";
        			        echo $item["manufacturer"]." ".$item["model"]."<br>".$item["price"]."<br>";
        			        echo $imgdirstart.$item[$dir]."\">";
        			        echo "</div>";
        			        echo "<div id=".$item['idlisting']." class=\"modal\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <span class=\"close\" onclick=\"closeModal(".$item['idlisting'].")\">&times;</span>
                                            <h2>";
        			        echo $item["manufacturer"]." ".$item["model"]." ".$item["price"]." lv";
                            echo
                                            '</h2>
                                        </div>
                                        <div class="modal-body">
                                            <p>Some text in the Modal Body</p>
                                            <p>Some other text...</p>
                                        </div>
                                        <div class="modal-footer">
                                            <h3>Modal Footer</h3>
                                        </div>
                                    </div>
                                </div>';
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
<script src="modal.js"></script>
</body>
</html>
