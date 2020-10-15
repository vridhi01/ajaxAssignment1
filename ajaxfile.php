<?php
//include database
include "config.php";
//define empty array
$return_arr = array();
// sql select statement
$limit = 5;
if (isset($_GET["page"])) { 
    $page  = $_GET["page"];
} else { $page=1; };  
$start_from = ($page-1) * $limit;  
$query = "SELECT * FROM `json` ORDER BY id DESC LIMIT $start_from, $limit";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $message = $row['message'];
    $date = $row['date'];
    $return_arr[] = array("id" => $id,
                    "name" => $name,
                    "email" => $email,
                    "message" => $message,
                    "date"=>$date
                );
            }
// Encoding array in JSON format
echo json_encode($return_arr);
?>