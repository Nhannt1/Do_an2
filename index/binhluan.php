<?php 
require('binhluan1.php');

session_start();

if(isset($_SESSION['id'])&&($_SESSION['id'])>0){
    if(isset($_SESSION['name'])&&($_SESSION['name'])!=""){
        $name= $_SESSION['name'];
    }else{
        $name="";
    }
    if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
        $ten=$_POST['ten'];
        $noidung=$_POST['noidung'];
        $idbb=$_POST['idbb'];
        $iduser=$_SESSION['id'];

        thembl($ten,$iduser,$idbb,$noidung);
    }

    // $dsbl = showlb();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMT</title>
</head>
<body>
   
    <hr>
        <form action="binhluan.php" method="post">
            <input type="label" name="ten" id="" value="<?php echo $name ?>" >
            <input type="hidden" name="idbb"  value="<?php echo $_GET['idbb']?>">
            <textarea name="noidung" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="gui binh luan" name="guibinhluan">

        </form>
            <?php 
            require('showbl.php');
            foreach($result as $bl){
                echo $bl['name'].'  :  '.$bl['noidung']."<br>";
            }
            ?>

    <hr>
</body>
</html>
<?php }else {
    echo"<a href='login.php' target='_parent'>  ban vui long dang nhap de binh luan  </a>";
} ?>