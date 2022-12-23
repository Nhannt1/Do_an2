<?php require('header.php') ?>

    <div class="container"> 
  <h1>Danh Sach Don Hang</h1>
    <table class="table">
    <thead>
      <tr>
        <th>Ten San Pham </th>
        <th>Ten Nguoi Mua</th>
        <th>Dia Chi</th>
        <th>So Dien Thoai</th>
        <th>Ngay Dat</th>      
        <th>Tong Tien</th>
        <th>Xoa</th>
        <th>Duyet Don</th>
      </tr>
    </thead>
        <tbody>
    
        <?php
           $conn = mysqli_connect("localhost","root","","corcoffee");
           $sql = "SELECT * FROM `order`";
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
                <td><a href="xoasp.php?sID=<?php echo $sp['id']?>" class="btn btn-danger">Xoa</a></td>
                <td><?php  ?><a href="">Duyet </a></td>
            </tr>
            
       <?php }?>
     
     </div>
            
    </tbody>
  </table>

    
  
  



<?php require('footer.php') ?>