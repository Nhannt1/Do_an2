<?php 
// $id = $_POST['id'];


$anh = $_FILES['file'];
$tenanhsp = $anh['name'];
move_uploaded_file($anh["tmp_name"],'upload/'.$tenanhsp);

$tensp =$_POST['tenSP'];
$giasp = $_POST['gia'];
$iddm = $_POST['iddm'];



require_once('condb.php');

$sql="INSERT INTO sanpham(tensp,anh,gia,iddm) 
VALUES ('$tensp','$tenanhsp','$giasp','$iddm')";

mysqli_query($conn,$sql);


 header("location:qlsp.php");
?>