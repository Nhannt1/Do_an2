<?php 
ob_start();

$conn = mysqli_connect("localhost","root","","corcoffee");

$sql = "SELECT * From `binhluan`  ";
$result = mysqli_query($conn,$sql);

?>