<?php
//if(isset($_FILES['file'] )){
    
 //   move_uploaded_file($_FILES['file']["tmp_name"],'upload/'.$_FILES['file']['name']);
//}

// var_dump($_FILES);
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
    <h1> Them tin tuc</h1>

    <div class="container" >    
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

        <br>
        <h1>them san pham</h1>
    <div class="container" >    
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
</body>
</html>