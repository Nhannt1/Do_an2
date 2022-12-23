<?php 
session_start();    

$name = $_POST['name'];
$email = $_POST['email'];
$matkhau= $_POST['matkhau'];
$sdt= $_POST['sdt'];
$diachi= $_POST['diachi'];

require_once('condb.php');

$sql = "SELECT count(*) FROM customer WHERE email= '$email'";

$rs =mysqli_query($conn,$sql);

// kiem tra xem co trung email
$numberr = mysqli_fetch_array($rs)['count(*)'];
if($numberr == 1 ){
    session_start();
    $_SESSION['error']='Trung email !';
    header("location : register.php");
    exit;
}
$sql = "INSERT INTO customer(name,email,matkau,sdt,diachi) VALUES ('$name','$email','$matkhau','$sdt','$diachi')";
mysqli_query($conn,$sql);


 $sql = "SELECT id FROM customer WHERE email= '$email'";
 $rs =mysqli_query($conn,$sql);
 $id =mysqli_fetch_array($rs)['id'];
 $_SESSION['id']=$id;
 $_SESSION['name']=$name;
 header("location:login.php");
 ?>