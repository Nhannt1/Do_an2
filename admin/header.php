<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>admin</title>
</head>
<body>
<header role="banner">
   
  <h1>Admin COFFEE</h1>
  
  
  <ul class="utilities">
    <br>
   
    <?php
    ob_start();
    if(empty($_SESSION['id'])){?>
    <!-- <li class="users"><a href="#">My Account</a></li> -->
    <li class="logout warn"><a href="signout.php">Log Out</a></li>
    <?php } ?>
  </ul>
</header>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="admin.php">Dashboard</a></li>
    <li class="edit"><a href="qltt.php">Quan Ly bai Bao</a></li>
    <li class="write"><a href="qlsp.php">Quan Ly San Pham</a></li>
    
    <li class="cart"><a href="qldh.php">Quan Ly Don Hang</a></li>
    <li class=""><a href="kh.php">Quan Ly Khach Hang</a></li>
  </ul>
</nav>

<main role="main">