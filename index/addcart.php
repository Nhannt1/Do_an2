<?php 
session_start();
ob_start();

$id=$_POST['id'];
$tensp=$_POST['tensp'];
$anh=$_POST['anh'];
$gia=$_POST['gia'];


// tao 1 mang sp 
$sp = array($id,$tensp,$anh,$gia);


if(!isset($_SESSION['cart']))
$_SESSION['cart']=array();

if(isset($_POST['addcart'])&& ($_POST['addcart'])){
   

    //day sp vao 
    array_push($_SESSION['cart'],$sp);
    
    header("location: viewcart.php");
}





?>