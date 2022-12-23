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
   <div class="container">
    
    <form action="login_process.php" method="POST" class="form-login">
        <h1>Login</h1>
        <div class="form-text">
            <label for="">Email</label>
            <input name="emailDN" type="text" placeholder="Email...">
        </div>
        <div class="form-text">
            <label for="">Password</label>
            <input name="mkDN" type="password" placeholder="Password...">
        </div>
        
        <button type="submit">Submit</button>
        <span> <a class="a2" href="register.php">Create account ?</a></span>
        <span> <a class="a1" href="admin\index.php">Admin</a></span>

    </form>
    

</form>
   </div>
   
</body>

</html>