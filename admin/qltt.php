<?php include('header.php') ?>

  
  <div id="qltt">
    
  <div class="container" >  
      <h1>Them Bai Bao</h1>  
      <form action="process_insert.php" method="POST" enctype= "multipart/form-data"  > 
          <div class="form-group">
              <label for="tenTD">Ten Tieu de</label>
              <input type="text" name="tenTD" class="form-control"></div>
         
          <div class="form-group">
              <label for="tomtac">Tom Tat</label>
              <input type="text" name="tenTT" class="form-control"></div>
          
          <div class="form-group">
              <label for="noidung">Ten Noi Dung</label>
              <textarea name="tenND" class="form-control"></textarea></div>
          
              <div class="form-group" >
              <label for="anh">Anh</label>
              <input type="file" name="file" class="form-control" ></div>

       <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
  </div>
   <hr  width="100%">
 
  <div class="container"> 
  <h1>Chi tiet Bai Bao</h1>
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Ten Tieu De</th>
        <th>Tom tat</th>
        <th>Ten Noi Dung</th>
        <th>Anh</th>
        <th>Sua</th>
        <th>Xoa</th>
      </tr>
    </thead>
        <tbody>
    
        <?php
        require_once('condb.php');
        $sql="SELECT * FROM tintuc";
        $kq=mysqli_query($conn,$sql);

        ?>
        <div class="news"><?php foreach($kq as $key=> $baitintuc){ ?> 
            <tr>
                <td><?php echo $baitintuc['id'] ?></td>
                <td><?php echo $baitintuc['TieuDe'] ?></td>
                <td><img src="upload/<?php echo $baitintuc['Hinh']?>" alt="" width="70px"></td>
                <td><?php echo $baitintuc['TomTat'] ?></td>
                <td><?php echo $baitintuc['NoiDung'] ?></td>
                <td><a href="sua.php?sID=<?php echo $baitintuc['id']?>" class="btn btn-info">Sua</a></td>
                <td><a href="xoa.php?sID=<?php echo $baitintuc['id']?>" class="btn btn-danger">Xoa</a></td>
            </tr>
            
       <?php } ?>
     
     </div>
            
    </tbody>
  </table>
 
<?php include('footer.php') ?>