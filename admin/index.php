<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/lgstyle.css">
    
    <title>Document</title>
</head>
<style>
    .container{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
    }
    .container .form-text{
        position: relative;
    }
    .container .form-text input{
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }
    .container .form-text label{
      
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }
    .form-text{

    }
</style>
<body>
   <div class="container">
    
    <form action="login_process.php" method="POST" class="form-login">
        <h1>Login ADMIN</h1>
        <div class="form-text">
            <label for="">Email</label>
            <input name="emailDN" type="text" placeholder="Email...">
        </div>
        <div class="form-text">
            <label for="">Password</label>
            <input name="mkDN" type="password" placeholder="Password...">
        </div>
        
        <button type="submit">Submit</button>


    </form>
    

</form>
   </div>
   
</body>

</html>