<?php require('header.php') ?>
<?php 
require('condb.php');
$sql="SELECT`danhmucsp`.*,COUNT(sanpham.iddm) AS 'number_cate' FROM `sanpham` INNER JOIN `danhmucsp` ON sanpham.iddm =danhmucsp.id GROUP BY sanpham.iddm";
$rs = mysqli_query($conn,$sql);
$data = [];
while ($row = mysqli_fetch_array($rs)){
  $data[]=$row;
}
// echo "<pre>";
// var_dump($data);
// echo "</pre>";

?>
<html>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="thongke" style="display:flex;justify-content: space-around  ; aline-item:center; padding:40px;" >
  
  <div class="tintuc"  style="width: 300px; height: 100px; background-color:	#87CEFA"> 
  <i class='far fa-newspaper' style='font-size:40px;color:white;padding:10px'> Tin Tuc</i>
  <?php
  $tt="SELECT *FROM tintuc "; 
   $rr=mysqli_query($conn,$tt);
   ?>
  <h4>So Bai Bao :<?php echo mysqli_num_rows($rr); ?> </h4>
  </div>
  <div class="user"  style="width: 300px; height: 100px; background-color:#A9A9A9">
  <i class='fas fa-user-check' style='font-size:35px;color:white;padding:10px'> Nguoi Dung</i>
  <?php
  $tt="SELECT *FROM customer "; 
   $rr=mysqli_query($conn,$tt);
   ?>
  <h4>So nguoi :<?php echo mysqli_num_rows($rr); ?> </h4>
  </div>

  <div class="user"  style="width: 300px; height: 100px; background-color:#00FA">
  <i class='fas fa-shopping-cart' style='font-size:35px;color:white;padding:10px' > Don Hang</i>
  <?php
  $tt="SELECT *FROM order_detail "; 
   $rr=mysqli_query($conn,$tt);
   ?>
  <h4>So Don :<?php echo mysqli_num_rows($rr); ?> </h4>
  </div>

  <div class="doanhso" style="width: 300px; height: 100px; background-color:#00FA9A">
  <i class='fas fa-money-check-alt' style='font-size:35px;color:white;padding:10px'> Doanh Thu</i>
  <?php
    $tt="SELECT * FROM `order` ";
    $rr=mysqli_query($conn,$tt);
    $tong = 0 ;
    // while($row = mysqli_fetch_array($rr)){
    //   $tong = 0;
      
    //   echo $tong =$tong + floatval($row['total']);
    // }
    foreach($rr as $key){
        $tong = $tong + $key['total'];
    } 
   
  ?> 
  <h4>Tong So : <?php echo $tong;?> </h4>
  </div>
</div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['loaisanpham', 'number_cate'],
          <?php
          foreach($data as $key){
            echo "['".$key['loaisanpham']."',".$key['number_cate']."],";
          }
          ?>
          
          
       
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  
  <body>
    <div id="piechart_3d" style="width: 600px; height: 500px;"></div>
  </body>
</html>

<?php require('footer.php') ?>