<?php 

$anh = $_FILES['file'];
$tenanh = $anh['name'];
move_uploaded_file($anh["tmp_name"],'upload/'.$tenanh);

// $id = $_POST['id'];
$tentd =$_POST['tenTD'];
$tentt =$_POST['tenTT'];
$tennd = $_POST['tenND'];




// $folder = 'anhao/';
// $target_file = $folder . basename($anh["name"]);
// echo $target_file; exit;
// move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

require_once('condb.php');

$sql="INSERT INTO tintuc(TieuDe,TomTat,Noidung,Hinh) 
VALUES ('$tentd','$tentt','$tennd', '$tenanh')";
// die($sql);

mysqli_query($conn,$sql);


 header("location:qltt.php");
 
?>