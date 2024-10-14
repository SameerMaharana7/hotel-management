<?php

$server = "localhost";
$username = "bluebird_user";
$password = "dDyLf7pgoJv1J*il";
$database = "bluebirdhotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>