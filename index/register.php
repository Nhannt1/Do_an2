<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/lgstyle.css">
    
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    
    ?> 
   <div class="container" style=" ">
    <form action="register_process.php" class="form-login" style="width: 300px; height: 635px; " method="POST">
        <h1>Register</h1>
        <div class="form-text">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="name...">
        </div>       
        <div class="form-text">
            <label for=""> Email</label>
            <input type="text"name="email" placeholder="Email..">
          
        </div>
        <div class="form-text">
            <label for="">Password</label>
            <input type="password" name="matkhau" placeholder="Password...">
        </div>
        <div class="form-text">
            <label for="">Dia Chi</label>
            <input type="password" name="diachi" placeholder="Dia chi">
        </div>
        <div class="form-text">
            <label for="">So Dien Thoai</label>
            <input type="password" name="sdt" placeholder="So Dien thoai">
        </div>
        <p id="text2">Create success</p>
        <button type="submit" id="btn" onclick="showHide()">Register</button>
        <span> <a class="a2" href="./login.php">login...</a></span>


    </form>
   </div>
   
   <script>

        var text1 = document.getElementById('text2');
        var btn11 = document.getElementById("btn");
        var text23 = document.getElementById('text2').style.display='none';
        function showHide()
        {
          if(btn11.click){
            text1.style.display='inline';
          }
          }
       
      
        


   </script>
</body>

</html>