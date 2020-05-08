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