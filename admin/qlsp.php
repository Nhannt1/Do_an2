<?php require('header.php') ?>

<div class="container" >    
    <h1>Them San Pham</h1>
        <form action="sp_process_insert.php" method="POST" enctype="multipart/form-data"  >
            <div class="form-group">
                <label for="tensp">Ten sp</label>
                <input type="text" name="tenSP" class="form-control"></div>
           
            <div class="form-group" enctype="multipart/form-data">
                <label for="Anh">Anh</label>
                <input type="file" name="file" class="form-control"></div>
            
            <div class="form-group">
                <label for="Gia">Gia</label>
                <input type="text" name="gia" class="form-control"></div>
            
            <div class="form-group" >
                <label for="iddm">iddm</label>
                <input type="text" name="iddm" class="form-control" ></div>

         <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <hr  width="100%">
    <div class="container"> 
  <h1>Chi tiet San Pham</h1>
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Ten San Pham</th>
        <th>Anh</th>
        <th>Gia</th>
        <th>IDDM</th>
        <th>Sua</th>
        <th>Xoa</th>
      </tr>
    </thead>
        <tbody>
    
        <?php
        require_once('condb.php');
        $sql="SELECT * FROM sanpham";
        $kq=mysqli_query($conn,$sql);
        // var_dump($kq);
        $tolal = mysqli_num_rows($kq); //tong bang ghi
        $limit = 4;
        $total_page = ceil($tolal/$limit);
        // echo $total_page;
        $cr_page = isset($_GET['page']) ? $_GET['page'] :1  ;        // trang hien tai 
        $start = (($cr_page -1) * $limit );
       // echo $start;
        $sql="SELECT * FROM sanpham LIMIT $start,$limit";
        $kq=mysqli_query($conn,$sql);
        ?>
        <div class="news"><?php foreach($kq as $key=> $sp){ ?> 
            <tr>
                <td><?php echo $sp['id'] ?></td>
                <td><?php echo $sp['tensp'] ?></td>
                <td><img src="upload/<?php echo $sp['anh']?>" alt="" width="70px"></td>
                <td><?php echo $sp['gia'] ?></td>
                <td><?php echo $sp['iddm'] ?></td>
                <td><a href="suasp.php?sID=<?php echo $sp['id']?>" class="btn btn-info">Sua</a></td>
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