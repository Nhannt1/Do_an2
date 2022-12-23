<?php 
session_start();
if(isset($_SESSION['cart'])){
    // echo var_dump($_SESSION['cart']);
    // exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Trang chu</title>
    <style>
      .container1{
        width: 50%;
        display:flex;
        justi
      }
    </style>
</head>

<body>
    <h1>Gio Hang</h1>
    <br><br>
    <div class="container"> 
    <table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Ten San Pham</th>
        <th>anh</th>
        <th>Don Gia</th>
        <th>Tong</th>
        <th>Xoa</th>
      </tr>
    </thead>
    <?php 
        $sotien=0;
        $i=0;
        foreach($_SESSION['cart'] as $sp){

            $tong=$sp[3];
            $sotien += $tong;
           
           ?>
        <tr>
              
              <td><?php echo ($i+1)?></td>
              <td><?php echo $sp[1]?></td>
              <!-- <td><img src="" width="10px" alt=""  ></td> -->
              <?php echo '<td><img src="upload/'.$sp[2].'"width="75px"</td>' ?>
              <td><?php echo $sp[3]?></td>
              <td><?php echo $tong?></td> 
              <td><a href="xoagh.php?id=<?php echo $i?>" class="btn btn-danger">Xoa</a></td> </tr>

            
    <?php } ?>
    
    <tr>
            
            <td></td>
            <td>Tong so tien la</td>
            <td></td>
            <td></td>
            <td><?php echo $sotien?></td>
            <td><form action="thanhtoan.php" method="post">
            <input type="hidden" name="thanhtoan" value="<?php echo $sotien?>">
                <input type="submit" value="thanhtoan" class="btn btn-secondary" name="" >
                </form></td>
        </tr>
    </tbody>
  </table>
  <p><a href="xoagh.php">Xoa Tat Ca </a></p>
  <p><a href="index.php">tiep tuc dat hang </a></p>
    </div>
          
          
</body>
</html>
<?php }else{
     echo '<br> ko co hang hoa <a href="index.php">Tiep Tuc Dat hang</a>';

} 
  ?> 
  <?php 
  
  $id = $_SESSION ['id'];
  $conn = mysqli_connect("localhost","root","","corcoffee");
  $sql = "SELECT * from customer  where id = '$id'";
  $rs = mysqli_query($conn,$sql);
  $each = mysqli_fetch_array($rs);
  ?> 
 <div class="container"  >   
  <h1>Thong Tin Mua Hang</h1> 
        <form action="muahang.php" method="POST"    >
            <div class="form-group">
                <label for="tensp">Ten Nguoi Mua Hang</label>
                <input type="text" name="tennguoimua" value="<?php echo $each['name'] ?>" class="form-control"></div>

              <div class="form-group">
                <label for="Gia">So Dien Thoai</label>
                <input type="text" name="sdt" value="<?php echo $each['sdt'] ?>" class="form-control"></div>
           
            <div class="form-group">
                <label for="Gia">Dia Chi</label>
                <input type="text" name="diachi" value="<?php echo $each['diachi'] ?>" class="form-control"></div>

         <button type="submit" class="btn btn-primary">Dat Hang</button>
        </form>
        <h1>lich su mua hang</h1> 
        <table class="table">
    <thead>
      <tr>
        <th>Ten San Pham </th>
        <th>Ten Nguoi Mua</th>
        <th>Dia Chi</th>
        <th>So Dien Thoai</th>
        <th>Ngay Dat</th>      
        <th>Tong Tien</th>
       
      </tr>
    </thead>
        <tbody>
    
        <?php
           $conn = mysqli_connect("localhost","root","","corcoffee");
            $user = $_SESSION ['name'];
           $sql = "SELECT * FROM `order` where  tennguoimua = '$user' ";
           $rs = mysqli_query($conn,$sql);

        ?>
        <div class="news"><?php foreach($rs as $tt) {?> 

            <tr>
              <td><?php echo $tt['tenhanghoa'] ?></td>
                <td><?php echo $tt['tennguoimua'] ?></td>
                <td><?php echo $tt['diachi'] ?></td>
                <td><?php echo $tt['sdt']  ?></td>
                <td><?php echo $tt['create'] ?></td>
                <td><?php echo $tt['total'] ?></td>
               
            </tr>
            
       <?php }?>
     
     </div>
            
    </tbody>
  </table>

    </div>