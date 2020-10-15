<?php
$servername = "localhost";
$username = "team_magento";
$password = "team_magento@123";
$dbname = "team_magento_assignment1";
$mysqli = new mysqli($servername, $username, $password, $dbname);
if($mysqli->connect_error){
    echo "Failed to connect to mysql" . $mysqli->connect_error;
    $mysqli->close();
}
?>