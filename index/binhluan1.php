<?php 

function thembl($ten,$iduser,$idbb,$noidung){
    require_once('condb.php');
    $sql="INSERT INTO binhluan(name,iduser,idbb,noidung) VALUES('$ten','$iduser','$idbb','$noidung')";
    mysqli_query($conn,$sql);

}


?>