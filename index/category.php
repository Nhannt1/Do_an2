<?php 
require_once('condb.php');
$sql="SELECT * FROM tintuc";

$kq=mysqli_query($conn,$sql);
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./public/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/fontawesome-free-6.2.0-web/css/all.css">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>COR COFFEE</title>
    <script defer src="./public/app.js"></script>
</head>
  <style>
    .news .box-new{
   position: relative;
    width:330px ;
    height: 330px;
    background-color: rgb(219, 200, 200);
    border-radius: 10px;
    margin: 30px;
    box-sizing: border-box;
    overflow: hidden;
    border-radius: 10px;
    padding: 10px;
}
  #products .product-filter-btn-group{
    margin-bottom: 40px;
    text-align: center;
    overflow: hidden;
    margin-top:40px;
    margin-bottom:30px;
}
    .product-filter-btn-group ul{
    display: inline-block;
    
}
ul{
    padding: 0;
    list-style: none;
    margin-bottom: 0px;
    
}
.product-filter-btn-group ul li{
    float: left;
}
.product-filter-btn-group ul li a{
    padding: 10px 20px;
    display: inline-block;
    margin: 0 8px !important;
    border: 1px solid #7b1c1e;
    color:#7b1c1e;
    font-weight: 400;
    line-height: 1.5;
}
.product-filter-btn-group ul li a.selected {
    color:#8e2122e2 ;
    /* background-color:#8e2122e2; */
    text-decoration: none;
}
.product-filter-btn-group ul li a:hover{
  background-color:#8e2122e2;
  color:#fff;
}
.product-slider{
    background-color:#f5f5f7;
    padding: 0px 20px;
    box-sizing: border-box;
  }
.product-box{
    display: flex;
    flex-direction: column;
    width: 400px;
    text-decoration: none;
    background-color: #ffffff;
    border-radius: 20px;
    margin: 20px;
    padding: 25px;
    box-sizing: border-box;
    box-shadow: 2px 2px 8px rgb(0,0,0,0.3) ;
    border: 1px solid rgba(0,0,0,0.08);
    overflow: hidden;
   
}  
.product-box strong{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.75rem;
    color: #29292c;
    font-weight: 600;
    margin-top: 24px;
}
.product-list .product-box a{
    text-decoration: none;
}
.product-box img{
    width: 300px;
    height: 300px;
    display: flex;
    padding: 20px 0px;
    object-fit: contain;
    object-position: center;
    margin: 20px auto;
}
.product-box .price{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 10px 0px 0px;

}
.product-box .price p{
    color: #6e6e73;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 0.9rem;
    max-width: 250px;
    line-height: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
.product-box .price button{
    width: 80px;
    border: 1px solid #7b1c1e;
    border-radius: 10px;
    background-color: #ffffff ;
     color:#8e2122e2
    display: flex;
    justify-content: center;
    align-items: center;
}
.lSSlideOuter {
  margin-bottom:50px;
}


  </style>
<body>
  <div id="main">
        <div id="header-top">
          <video autoplay loop muted class="video" >
            <source src="./public/video/video.mp4.mp4" type="video/mp4">
          </video>
           <nav  class="header" id="myHeader" >
            <a href="index.php"><img src="upload/1.png" alt="" class="logo"></a>
            <ul>
                <li><a href="#slider">HOME</a></li>
                <li><a href="#NEWS">NEWS</a></li>
                <li><a href="#service">SEVICE</a></li>
                <li><a href="#cuoi">CONTACT</a></li>

            <?php if(empty($_SESSION['id'])){

              ?>
                <li><a href="login.php">LOGIN</a></li>

                <?php }else{ ?>
                  <li><a href="signout.php">LOGOUT</a></li>
                  <li><a href="viewcart.php">GH</a></li>
                  <?php } ?>

                 
            </ul>
           </nav>
          
        </div>

        <div id="slider">
          <div class="container" data-aos="fade-right" data-aos-duration="1500"  >
              <div class="img-box">
                <img src="upload/18.png" alt="">
              </div>

              <div class="text">
                <h2>Brand Story</h2>

                <p>COR COFFEE was founded in 2022 by the Chairman, Tommy NHAN. In a world of tea culture, COR has found its core mission, 'Consistency and continuity', to deliver the highest quality tea with services unmatched by customers and start up the world's largest built-in bubble tea empire. <br> <br>
                  With many consistent working and bar records, COR has always kept his word and passion for quality and service with innovative new drinks, stylish shop designs, quality drinks and special recipes. . With patience for manual communication, riot-inducing works and sensitive international views, COR has successfully taken its spirit abroad with the opening of its first store in Vietnam. Male. <br> <br>             
                  Cor is always aiming to create diversified and solid copper for its customers, providing new products with eyes and dedication with the goal of "Igniting the system, exploring creativity and capturing the world. "</p> <br>

                  <button>Connect</button>
              </div>
           
          </div>
          <div class="value" data-aos="fade-left" data-aos-duration="1000" >
             <h2>Brand Value</h2>
          </div>
          <div class="brand-value" data-aos="fade-left" data-aos-duration="1000" >
           
            <div class="box">
              <div class="icon">
                <i class="fa-solid fa-droplet"></i>
              </div>
              <h3>PURE</h3>
              <div class="subcontent">
                We source for the best ,seasonal fruits and ingredients globally and maintain quality consistency ranging from fresh tea, milk tea, fresh fruit, yogurt and more.
              </div>
            </div>

            <div class="box">
            
              <div  class="icon">
                <i class="fa-solid fa-gamepad"></i>
              </div>
          
              <h3>FUN</h3>
              <div class="subcontent">
                Cultivates customer connections by delivering meaningful efforts through customer experience workshops, annual CoCo Day celebration and having fun with CoCo team.
              </div>
            </div>

            <div class="box">
              <div class="icon">
                <i class="fa-sharp fa-solid fa-heart"></i>
              </div>
              <h3>LOVE</h3>
              <div class="subcontent">
                Heartfelt service as an act of our love.
                Because each cup has potential to put a smile on everyone of you.
              </div>
            </div>

          </div>
        </div>

        <div id="NEWS">
          <h2>News</h2>
         
          <div class="news" data-aos="fade-up" data-aos-duration="1500">  <?php foreach($kq as $key=> $baitintuc){ ?> 
         
            <div  class="box-new">
             
                  <div class="anh">
                 <img  src="upload/<?php echo $baitintuc['Hinh'] ?>" class="anh" alt=""> 
                      </div> 
                    <h3  class="title"><?php echo $baitintuc['TieuDe'] ?></h3>
                  <div  class="sub-new">
                <a href="show.php?id=<?php echo $baitintuc['id'] ?>"><?php echo $baitintuc['TomTat'] ?>
                </a>
               </div>
           </div>
          <?php } ?>
        
        </div>

        <h2 data-aos="fade-up" id="service" data-aos-duration="1300">We are COR</h2>
        <link rel="stylesheet" href="./public/style.css">
        <div id="products">
            
           <div data-aos="fade-up" data-aos-duration="1300"  class="product-filter-btn-group">
            <ul data-aos="fade-up" data-aos-duration="1000" class="dish-coffee">
                <li>
                  <?php  require_once('danhmuc.php');
                  
                  foreach($dsdm as $danhmuc){ ?> 
                  <a class="selected" href="category.php?sanpham=<?php echo $danhmuc['loaisanpham'] ?>"><?php echo $danhmuc['loaisanpham'] ?></a>
                    
                 <?php }   ?>

                  
                </li>
                
            </ul>
            
           </div>
            
        </div>
        
              
        
       <section data-aos="fade-up" data-aos-duration="1500" class="product-list">
           <?php 
         
           require_once('sanpham.php');
             
            ?>
            <form action="" method="GET" style="text-align: center;">
                    <input type="text" name="texttimkiem" id="">
                    <input type="submit" name="timkiem" value="search">
                  </form>
                  <?php 
                    if(isset($_GET['timkiem'])){
                      $tukhoa=$_GET['texttimkiem']; 
                      $sql_timkiem="SELECT * FROM sanpham WHERE tensp LIKE '%".$tukhoa."%' ";
                      $rs=mysqli_query($conn,$sql_timkiem);

                      

                    }else{
                      $tukhoa="";
                      $sql_timkiem="SELECT * FROM sanpham";
                      $rs=mysqli_query($conn,$sql_timkiem);
                    }

                    ?>

                  <?php
               $conn = mysqli_connect("localhost","root","","corcoffee");
               if(isset($_GET['sanpham'])){
                $lsp=$_GET['sanpham'];
                $category = mysqli_query($conn,"SELECT * FROM danhmucsp WHERE loaisanpham ='$lsp'");
                $cate= mysqli_fetch_assoc($category);
                $id_cate=$cate['id'];
                $product= mysqli_query($conn,"SELECT * FROM sanpham WHERE iddm ='$id_cate' ");
              }

            ?>
            
       <ul id="autoWidth" class="cs-hidden"> <?php foreach($product as $tungloaisp){ ?>
          <li class="item-a">
                <div class="product-box"> 
              <a href="">
                <strong><?php echo $tungloaisp['tensp'] ?></strong>
                </a>
               <img src="upload/<?php echo $tungloaisp['anh']?>" alt="">
               
              <div class="price">
                <p><?php echo $tungloaisp['gia'] ?></p>
                  <?php if(empty($_SESSION['id'])){ ?> 
                    <button> <a href="login.php">Buy</a> </button>
                   <?php } else{ ?> 
                    
                    <form action="" method="GET"  >
                      <input type="hidden" name="id" value=<?php echo $tungloaisp['id']?>>
                      <input type="hidden" name="tensp" value=<?php echo $tungloaisp['tensp']?>>
                      <input type="hidden" name="anh" value=<?php echo $tungloaisp['anh']?>>
                      <input type="hidden" name="gia" value=<?php echo $tungloaisp['gia']?>>
                      <a href="" data-toggle="modal" data-target="#myModal">Mua</a>
                      
                 </form>

                  <form action="addcart.php" method="POST" >
                      <input type="hidden" name="id" value=<?php echo $tungloaisp['id']?>>
                      <input type="hidden" name="tensp" value=<?php echo $tungloaisp['tensp']?>>
                      <input type="hidden" name="anh" value=<?php echo $tungloaisp['anh']?>>
                      <input type="hidden" name="gia" value=<?php echo $tungloaisp['gia']?>>
                      <input type ="submit" name="addcart" value="Buy" style="border:10px  width:20px">
                      
                 </form>
                 <?php } ?>
                
              </div> 
              
              </div>
                </li>
                
                <?php } ?>
              </ul>
        </section>
      
      <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
       <?php
       
       
       ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

  </div>
  <div id="cuoi">
        <?php include_once('footer.php') ?>
      </div> 
 
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
     $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });
  </script>
    <script>
      AOS.init();
    </script>
 
</body>
</html>