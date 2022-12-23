<?php 
$id = $_GET['sID'];

require_once('condb.php');
 
//lay du lieu cu 
$sua_sql = "SELECT *FROM sanpham WHERE id=$id";

$result = mysqli_query($conn,$sua_sql);
$row = mysqli_fetch_assoc($result);

// hien thi thong tin len form


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
</head>
<body>
    <h1> Sua San Pham</h1>

    <div class="container" >    
        <form action="update.php" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="sid" value="<?php echo $id;?>">
            <div class="form-group">
                <label for="tenSP">Ten San Pham</label>
                <input type="text" name="tenSP" class="form-control"
                 value="<?php echo $row['tensp'] ?>"></div>
           
             <div class="form-group">
                <label for="">Anh</label>
                <input type="file" name="anh" class="form-control"
                value=" <?php echo $row['anh'] ?>"></div>

            <div class="form-group">
                <label for="">Gia SP</label>
                <input type="text" name="Gia" class="form-control"
                value="<?php echo $row['gia'] ?>"></div>
            
            <div class="form-group">
                <label for="gia">IDDM</label>
                <input type="text" name="iddm" class="form-control"
                value="<?php echo $row['iddm'] ?>"></div>
         <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>