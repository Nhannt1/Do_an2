<?php
session_start();
ob_start();
$vid = $_GET['sID'];
// echo $id;

require_once('condb.php');
$xoa_sql = "DELETE FROM tintuc WHERE id=$vid";

mysqli_query($conn,$xoa_sql);
// echo "xoa thanh cong";  
header('qltt.php');

?> 