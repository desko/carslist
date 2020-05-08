<?php
					if (isset($_POST['searchButton'])) 
					{
						$make = mysqli_real_escape_string($db, $_POST['car']);
						if($make=="")//selected all manufacturers
						{
							$maxprice = mysqli_real_escape_string($db, $_POST['maxPrice']);
							if($maxprice=="")//no price requirment
							{
                                $query = "SELECT * FROM listings";
							}
							else//price requirment
							{
								$query = "SELECT * FROM listings WHERE price<='$maxprice'";
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
									$query = "SELECT * FROM listings WHERE manufacturer='$make'";
									
								}
								else//with price requirment
								{
									$query = "SELECT * FROM listings WHERE manufacturer='$make' AND price<='$maxprice'";
									
								}
							}
							else//specific model selected
							{
								if($maxprice=="")//no price requirment
								{
	
									$query = "SELECT * FROM listings WHERE manufacturer='$make' AND model='$model' ";
									
								}
								else//with price requirment
								{
									$query = "SELECT * FROM listings WHERE manufacturer='$make' AND model='$model' AND price<='$maxprice'";
									
									//$query = "SELECT * FROM listings WHERE price<='$maxprice'";
								}

							}
						}
						$result = mysqli_query($db, $query);
        			

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
        			            echo $imgdirstart.$item[$dir].'">';
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
                                            <div class="modalImageContainer">'.
                                            "<img class=\"modalImage\" src=\"/uploads/".$item[$dir].'">'.
                                            '</div>'.
                                            '<div class="modalText">'.
                                            '<textarea class="modalTextArea" readonly>'.$item['description'].'</textarea>'.
                                            '</div>'.
                                            '</div>
                                        <div class="modal-footer">
                                            <h3>Cars List</h3>
                                        </div>
                                    </div>
                                </div>';
        			        }
        			    }
        			    else
        			    {
        			        echo "0 results";
        			    }
			}
        		?>