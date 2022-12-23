<?php 
$email = $_POST['emailDN'];
$matkhau = $_POST['mkDN'];

require_once('condb.php');

$sql = "SELECT * FROM customer WHERE email= '$email' and matkau='$matkhau'";

$rs = mysqli_query($conn,$sql);

$numberr_row = mysqli_num_rows($rs);

if($numberr_row ==1 ){
    session_start();
    
    $each= mysqli_fetch_array($rs);
    $_SESSION['id']=$each['id'];
    $_SESSION['name']=$each['name'];

    header("location:index.php");
    exit;
}
    header("location:login.php?=Dang nhap loi!");
?> 