
<?php 
ob_start();
$id = $_GET['id'];
require_once('condb.php');  

$sql ="SELECT * FROM tintuc WHERE id=$id";

$kq=mysqli_query($conn,$sql);
$bai_tin_tuc = mysqli_fetch_array($kq);

?>
<h1>
    <?php echo $bai_tin_tuc['TieuDe'] ?> 
</h1>
    <img src="upload/<?php echo $bai_tin_tuc['Hinh'] ?>" alt="" width="30%">
<h4>
    <?php echo $bai_tin_tuc['TomTat'] ?> 
</h4>
<p>
    <?php echo nl2br($bai_tin_tuc['NoiDung']) ?>
</p>


    <div class="binhluan">
    <iframe src="binhluan.php?idbb=<?php echo $_GET['id']?>"  witdh="100%" height="400px" frameborder="0"></iframe>
    </div>

<a href="index.php">quay lai</a>
<?php
include('footer.php');
?>
