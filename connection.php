<?php

$server="localhost";
$username="sang";
$password='Khanhlinh94';
$db="momo_database";
// Connection
$conn = new mysqli($server,$username,$password,$db);

//Check
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error());
    
}
//echo "Connected successfully!";


?>
