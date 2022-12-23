<?php 
require('condb.php');
$id = $_GET['id'];
$product = mysqli_query($conn,"SELECT * From sanpham WHERE id=$id");

$item = mysqli_fetch_assoc($product);



?>
<form action="">
<h2>
    <?php echo $item['tensp'] ?> 
</h2>
    <img src="upload/<?php echo $item['anh'] ?>" alt="" width="200px"><br>
    <?php echo $item["gia"] ?> 

    <div class="buttons_added">
     <input class="minus is-form" type="button" value="-">
    <input aria-label="quantity" class="input-qty" max="Số tối đa" min="Số tối thiểu" name="" type="number" value="">
     <input class="plus is-form" type="button" value="+">
    </div>

    <input type ="submit" name="addcart" value="Buy" style="">
   
    </form>
