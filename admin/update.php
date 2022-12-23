<?php 
$ten=$_POST['tenSP'];
$anh=$_FILES['anh'];
$giasp =$_POST['Gia'];
$id = $_POST['sid'];
$iddm = $_POST['iddm'];

//ket noi db
require_once('condb.php');
// cau lenh truy van
$update_sql = "UPDATE sanpham SET tensp='$ten',anh='$anh',gia='$giasp',iddm='$iddm'  WHERE id = $id";
//  echo $sql; exit;

//thuc thi cau lenh

if(mysqli_query($conn,$update_sql)){
// echo "<h2>them thanh cong</h2>";
header("location: qlsp.php");
}
?>