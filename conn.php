<?php

$servername = "localhost";
$username = "root";
$password ="";
$database ="apsystem";
$port ="3308";


//create connection
$conn = new mysqli($servername,$username,$password,$database,$port);

//check connection
if(!$conn){
    echo"<script>alert('connection failed')</script>";
}
?>