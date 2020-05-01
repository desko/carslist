<?php
session_start();
$brand;
$model;
$price;
$description;
$picture;
$errors = array();
$db = mysqli_connect('localhost', 'root', 'root', 'carsdb');
if (isset($_POST['postButton'])) {
    $brand = mysqli_real_escape_string($db, $_POST['car']);
    $model = mysqli_real_escape_string($db, $_POST['model']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $description = mysqli_real_escape_string($db, $_POST['text']);
    $picture = mysqli_real_escape_string($db, $_POST['img']);
}
?>