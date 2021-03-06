<?php
//session_start();
$target_dir = "uploads/";
$newfilename= time();
$target_file = $target_dir . basename($_FILES["img"]["name"]);


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file =$target_dir . $newfilename. ".".$imageFileType;
$manufacturer;
$model;
$descriptionText;
$price;
$db = mysqli_connect('localhost', 'root', 'root', 'carsdb');
//include("errors.php");
include("register.php");
//$errors = array();
$username=$_SESSION['username'];

// Check if image file is a actual image or fake image


if(isset($_POST["img"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["img"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        $manufacturer = mysqli_real_escape_string($db, $_POST['cars']);
        $model = mysqli_real_escape_string($db, $_POST['models']);
        $descriptionText = mysqli_real_escape_string($db, $_POST['descriptionText']);
        $price = mysqli_real_escape_string($db, $_POST['price']);
        $imgName=$newfilename. ".".$imageFileType;

            $query = "INSERT INTO listings(description,dirpicture1,listingowner,manufacturer,model,price) 
            VALUES('$descriptionText','$imgName','$username','$manufacturer','$model','$price')";
            echo mysqli_query($db, $query);
        

        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
        header("Location: /index.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>