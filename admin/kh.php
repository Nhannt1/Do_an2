<?php require('header.php') ?>

    <hr  width="100%">
    <div class="container"> 
  <h1>Khach Hang</h1>
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Ten KH</th>
        <th>email</th>
        <th>Mat Khau</th>
        <th>So Dien Thoai</th>
        <th>Dia Chi</th>
        <th>Xoa</th>
      </tr>
    </thead>
        <tbody>
    
        <?php
        require_once('condb.php');
        $sql="SELECT * FROM customer";
        $kq=mysqli_query($conn,$sql);
        // var_dump($kq);
        $tolal = mysqli_num_rows($kq); //tong bang ghi
        $limit = 4;
        $total_page = ceil($tolal/$limit);
        // echo $total_page;
        $cr_page = isset($_GET['page']) ? $_GET['page'] :1  ;        // trang hien tai 
        $start = (($cr_page -1) * $limit );
       // echo $start;
        $sql="SELECT * FROM customer LIMIT $start,$limit";
        $kq=mysqli_query($conn,$sql);
        ?>
        <div class="news"><?php foreach($kq as $key=> $sp){ ?> 
            <tr>
                <td><?php echo $sp['id'] ?></td>
                <td><?php echo $sp['name'] ?></td>
                <td><?php echo $sp['email'] ?></td>
                <td><?php echo $sp['matkau'] ?></td>
                <td><?php echo $sp['sdt'] ?></td>
                <td><?php echo $sp['diachi'] ?></td>
                <td><a href="xoasp.php?sID=<?php echo $sp['id']?>" class="btn btn-danger">Xoa</a></td>
            </tr>
            
       <?php } ?>
     
     </div>
            
    </tbody>
  </table>
  <ul class="pagination">
  <li  class ="<?php echo((($cr_page)-1==0)?'page-item disabled':'') ?>"><a class="page-link" href="qlsp.php?page=<?php echo $cr_page -1 ?>">Previous</a></li>
     <?php for($i = 1;$i<= $total_page ; $i++) {?>
      <li  class ="<?php echo(($cr_page == $i)?'page-item active':'') ?>"><a href="qlsp.php?page=<?php echo $i?> " class="page-link"><?php echo $i ?></a></li>
      <?php }?>

  <li class="<?php echo(($cr_page+1)>$total_page)?'page-item disabled':'' ?>"><a class="page-link" href="qlsp.php?page=<?php echo $cr_page +1 ?> ">Next</a></li>
</ul>

<?php require('footer.php') ?>