<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['date'];
$sql = "INSERT INTO `json`(`name`, `email`, `message`, `date`) VALUES ('$name','$email','$message','$date')";
$result = $mysqli->query($sql);
if($result){
    echo "data submitted successfully";
}

?>