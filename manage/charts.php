
<!-- As a heading -->

<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="Snru.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title >ระบบจัดการสารสนเทศจิตอาสา </title>
  

  





  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


  <!-- Latest compiled and minified CSS -->
 
  <style type="text/css">
                    .cen1{
                      width: 700px;
                        margin: 0 auto;
                        
                        
                        
                    }
                   
                   
                    .page-header h2{
                        margin-top: 0;
                    }
                    table tr td:last-child a{
                        margin-right: 15px;
                    }
                </style>

<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.btn {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.btn:hover {
  background-color: #4CAF50;
  color: white;
}

.cen{
	background-color:#F0F0F0;
}
.limiter{
  background-color:#FFFFFF;
}
.navbar{
  font-family:'Courier New'
}
</style>
                
</head>
<?php
$con= mysqli_connect("localhost","root","","manage_information") or die("Error: " . mysqli_error($con)); 
mysqli_query($con, "SET NAMES 'utf8' ");
 
$query = "
SELECT count(id_p) AS totol, DATE_FORMAT(date_j, '%Y') AS datesave
FROM join_activities 
GROUP BY DATE_FORMAT(date_j, '%Y%')
";
$result = mysqli_query($con, $query);
$resultchart = mysqli_query($con, $query);  


 //for chart
$datesave = array();
$totol = array();

while($rs = mysqli_fetch_array($resultchart)){ 
  $datesave[] = "\"".$rs['datesave']."\""; 
  $totol[] = "\"".$rs['totol']."\""; 
}
$datesave = implode(",", $datesave); 
$totol = implode(",", $totol); 
 
?>


<body>


<nav class="navbar-header  " >

  <div class="container-fluid bg-success ">
  <div class="navbar-header " >
  
  <Center><img  src="image/Snru_3.png"  width="60" height="60" > มหาวิทยาลัยราชภัฏสกลนคร SNRU.</a>
    </div>
    
  </div>
  
</nav>
<div class="limiter">
<?php 
       //  echo $_SESSION['status'];
       if(@$_SESSION['id_stu']!=""){
        ?>
       <button type="button" class="btn btn-info float-right" style ="margin-right: 0px;" onclick="window.location='home.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
       <?php }else{ ?>
<?php
if(@$_SESSION['status']==""){
  ?>
<button type="button" class= "btn btn-info float-right" style ="margin-right: 0px;" onclick="window.location='Login/login.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
 <?php   
}else if($_SESSION['status']=='1'){
  ?>
<button type="button" class="btn btn-info float-right" style ="margin-right: 0px;" onclick="window.location='index.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
<?php
}else if($_SESSION['status']=='2'){
  ?>
<button type="button" class="btn btn-info float-right" style ="margin-right: 0px;" onclick="window.location='student_ex.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
<?php
}else if($_SESSION['status']=='3'){
  ?>
 <button type="button" class="btn btn-info float-right" style ="margin-right: 0px;"  onclick="window.location='student_bi.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
 <?php
}else if($_SESSION['status']=='4'){
  ?>
 <button type="button" class="btn btn-info float-right" style ="margin-right: 0px;" onclick="window.location='student_au.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
 <?php
}

?>
 <?php
}
         ?>




<br>

<!--<div style ="margin-left: 100px;"><h3 align="center"style="color: #006400">สถิติการลงจิตอาสา</h3> 
 </div>
 <h3 align="center" style="color: #006400">ในรูปแบบกราฟ</h3>-->

 

<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
<hr>

<p class="cen1" align="center">

 <!--devbanban.com-->

<canvas id="myChart" width="1200px" height="500px" style ="margin-left:2px;"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [<?php echo $datesave;?>
],
        datasets: [{
            label: 'รายงานภาพรวม แยกตามปี (คน)',
            data: [<?php echo $totol;?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>  
</p> 

<center><marquee direction="left"style="color:#000000" scrollamount="5"bgcolor="#48D1CC" width="300px">รายงานสถิติการลงจิตอาสาในรูปแบบกราฟ</marquee>
<table class="cen" width="400" border="1" cellpadding="0"  cellspacing="0" align="center">
  <thead> 
  <tr >
    &nbsp;<th  width="10%"><div align="center">ปี</div></th>
    <th width="10%"><div align="center">จำนวนผู้เข้าร่วม</div></th>
  </tr>
  </thead>
  
  <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td align="center"><?php echo $row['datesave'];?></td>
      <td align="right"><div align="center"><?php echo $row['totol'];?> คน</div></td> 
    </tr>
    <?php } ?>

</table>
<?php mysqli_close($con);?>
  </div>


  


</body>
<br><br><br><footer class="footer">
    <div class="footer float-right d-none d-sm-block " >
      <img src="image/swt.png"  ></img>
    </div>
    <strong>Copyright &copy; 2020 <a href="index.php">ระบบจัดการสารสนเทศจิตอาสา</a>.</strong> สำนักวิทยบริการและเทคโนโลยีสารสนเทศ มหาวิทยาลัยราชภัฏสกลนคร.
    
  </footer>

</html>


