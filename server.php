<?php 

$servername = "localhost";
$username ="root";
$password ="";
$dbname = "Register_db";


$conn = mysqli_connect($servername ,$username , $password , $dbname );


if (!$conn){
    die("การเชื่อมต่อผืดพลาด ".mysqli_connect_error() ); }
    
?>