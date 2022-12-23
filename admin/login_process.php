<?php 
$email = $_POST['emailDN'];
$matkhau = $_POST['mkDN'];

require_once('condb.php');

$sql = "SELECT * FROM `admin` WHERE email= '$email' and `password`='$matkhau'";

$rs = mysqli_query($conn,$sql);
header("location:admin.php"); 
 exit;
// $numberr_row = mysqli_num_rows($rs);

// if($numberr_row ==1 ){
//     session_start();
    
//     $each= mysqli_fetch_array($rs);
//     $_SESSION['id']=$each['id'];
//     $_SESSION['name']=$each['name'];

//     header("location:index.php");
//     exit;
// }
//     header("location:login.php?=Dang nhap loi!");
// if(mysqli_num_rows($rs)==1){
//     $each =mysqli_fetch_array($rs);
//     session_start();
//     $_SESSION['id']=$each['id'];
//     $_SESSION['name']=$each['name'];
//     $_SESSION['level']=$each['level'];
//     header("location:admin.php"); 
//     exit;  
// }
// header("location:login.php?=Dang nhap loi!");
?> 