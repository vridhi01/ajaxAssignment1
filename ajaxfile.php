<?php
//include database
include "config.php";
//define empty array
$return_arr = array();
// sql select statement
<<<<<<< HEAD
$query = "SELECT * FROM ( SELECT * FROM json ORDER BY id DESC LIMIT 5) sub ORDER BY id ASC ";
=======
$query = "SELECT * FROM json ORDER BY id DESC LIMIT 5";
>>>>>>> e13472c8908ac16926ded92af2ce0443bcd0d8e6
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