<?php
$tennguoimua = $_POST['tennguoimua'];
$sdt = $_POST['sdt'];
$diachi = $_POST['diachi'];

$conn = mysqli_connect("localhost","root","","corcoffee");
session_start();
$cart = $_SESSION['cart'];
$total = 0;

foreach($cart as $each){
    $total += $each[3];
}
$idnguoimua = $_SESSION['id'];
foreach($cart as $each){
$sql ="INSERT into `order`(idnguoimua,tenhanghoa, tennguoimua, diachi, sdt, total) 
values ('$idnguoimua','$each[1]', '$tennguoimua', '$diachi', '$sdt','$total')";
// die($sql);
}
mysqli_query($conn,$sql);

$sql ="SELECT max(id) from `order` where idnguoimua = '$idnguoimua' ";
$rs = mysqli_query($conn,$sql); 
$order_id =mysqli_fetch_array($rs)['max(id)'];

foreach($cart as $product_id => $each){
    $quantity = $each[3];
    $sql= "INSERT into `order_detail`(`order_id`,`product_id`,`quantity`)
    values ('$order_id','$each[0]','$quantity')";    
    mysqli_query($conn,$sql);
}   
mysqli_close($conn);
unset($_SESSION['cart']);
header('location:index.php');
?>