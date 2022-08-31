
<!-- As a heading -->

<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--<link rel="icon" href="Snru.png">-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title >ระบบจัดการสารสนเทศจิตอาสา </title>
  <link rel="shortout icon" type="imgae/x-icon" href="image/Snru_3.png">

  





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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
 
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
 
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
 <script src="script.js"></script>

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 <style type="text/css">
     .container{
         width: 500px;
         margin: 0 auto;
         
     }
     .page-header h2{
         margin-top: 0;
     }
     table tr td:last-child a{
         margin-right: 15px;

     }
     .table{
      margin: auto;
  width: 70%;
  border: 2px solid #FF00FF;
  padding: 10px;
     }
 </style>
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
.button1 {
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button3 {
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  Background-color: #FF9900;
  color: white;
  size:10px;
  
}
.button1:hover {
  background-color: #ffffff;
  color: black;
}
.button2 {
  Background-color: #33CC00;
  color: white;
  size:10px;
}
.button2:hover {
  background-color: #ffffff;
  color: black;
}
.button3 {
  Background-color: #33CC00;
  color: white;
  size:10px;
}
.button3:hover {
  background-color: #ffffff;
  color: black;
}
.btn:hover {
  background-color: #ffffff;
  color: black;
}
.cen{
	margin: auto;
  width: 20%;
  border: 3px solid #73AD21;
  padding: 10px;
}
.cen1{
	margin: auto;
  width: 60%;
  border: 3px solid #33CC00;
  padding: 10px;
}
.limiter{
  background-color:#FFFFFF;
}
.btn{
  Background-color: #33CC00;
  color: white;
}

/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
/*นาฟบาร์*/
{box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #CCFF33;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 11px;
  margin-bottom: 10px;
  margin-right: 10px;
  background: #CCFF33;
  font-size: 20px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #CCFF33;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</style>
                
</head>
<?php
$con= mysqli_connect("localhost","root","","manage_information") or die("Error: " . mysqli_error($con)); 
mysqli_query($con, "SET NAMES 'utf8' ");
date_default_timezone_set("Asia/Bangkok");//ใช้ตั่งค่าให้เวลาตรงกับ server

 
@$query = "
SELECT count(join_activities.id_p) AS totol, DATE_FORMAT(join_activities.date_j, '%d') AS datesave
FROM join_activities left join project_participation on join_activities.id_p=project_participation.id_p
left join studen on join_activities.id_stu=studen.id_stu
where 1 and MONTH(join_activities.date_j)='".$_GET["mm"]."' and YEAR(join_activities.date_j)='".$_GET["yy"]."'
GROUP BY DATE_FORMAT(join_activities.date_j, '%d%')
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
<div class="topnav">
  
<a>ระบบจัดการสารสนเทศจิตอาสา</a>
  <div class="search-container">
    <form action="#">
      
    <?php 
       //  echo $_SESSION['status'];
       if(@$_SESSION['id_stu']!=""){
        ?>
       <button type="button" class="topnav   float-right" style ="margin-right: 0px;" onclick="window.location='home.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
       <?php }else{ ?>
<?php
if(@$_SESSION['status']==""){
  ?>
<button type="button" class= "btn   float-right" style ="margin-right: 0px;" onclick="window.location='Login/login.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
 <?php   
}else if($_SESSION['status']=='1'){
  ?>
<button type="button" class="btn  float-right" style ="margin-right: 0px;" onclick="window.location='index.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
<?php
}else if($_SESSION['status']=='2'){
  ?>
<button type="button" class="btn   float-right" style ="margin-right: 0px;" onclick="window.location='student_ex.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
<?php
}else if($_SESSION['status']=='3'){
  ?>
 <button type="button" class="btn   float-right" style ="margin-right: 0px;"  onclick="window.location='student_bi.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
 <?php
}else if($_SESSION['status']=='4'){
  ?>
 <button type="button" class="btn   float-right" style ="margin-right: 0px;" onclick="window.location='student_au.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
 <?php
}

?>
 <?php
}
         ?>
         
    </form>
  </div>
</div>
<br>
<div class="limiter">


<!--<?php 
       //  echo $_SESSION['status'];
       if(@$_SESSION['id_stu']!=""){
        ?>
       <button type="button" class="btn   float-right" style ="margin-right: 0px;" onclick="window.location='home.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
       <?php }else{ ?>
<?php
if(@$_SESSION['status']==""){
  ?>
<button type="button" class= "btn   float-right" style ="margin-right: 0px;" onclick="window.location='Login/login.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
 <?php   
}else if($_SESSION['status']=='1'){
  ?>
<button type="button" class="btn  float-right" style ="margin-right: 0px;" onclick="window.location='index.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
<?php
}else if($_SESSION['status']=='2'){
  ?>
<button type="button" class="btn   float-right" style ="margin-right: 0px;" onclick="window.location='student_ex.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
<?php
}else if($_SESSION['status']=='3'){
  ?>
 <button type="button" class="btn   float-right" style ="margin-right: 0px;"  onclick="window.location='student_bi.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
 <?php
}else if($_SESSION['status']=='4'){
  ?>
 <button type="button" class="btn   float-right" style ="margin-right: 0px;" onclick="window.location='student_au.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
 <?php
}

?>
 <?php
}
         ?>-->




<br>

<div style ="margin-left: 50px;"><h3 align="center"style="color: #006400">จัดการสถิติการลงจิตอาสาในรูปแบบกราฟ</h3> 
 </div>
 

 

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
            label: 'รายงานภาพรวม แยกตามเดือน (คน)',
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
<center><input type="submit" class="button2" value="ดูสถิติรายเดือน" onclick="window.location='statistics.php'"> 
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="button3" value="ดูสถิติรายปี" onclick="window.location='statistics_year.php'"></center><br>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0" >
                <form name="form1" method="get" action="">
                  <tr>
                    <td width="20%"><b>ดูรายงานประจำเดือน</b></td>
                    <td width="50%">
                   &nbsp;
 <?php //เชคเงื่อนไขแสดงเดือนปัจุบัน
if(@$_GET['mm']=="") {
 @$mm=date('m');
}else{
@$mm=$_GET['mm'];//รับค่าที่เลือกมาแสดง
}
?>
<select name="mm" class="custom-select" id="mm" style="width:105px;" >
                        <!--<option value="">เลือก</option>-->
                        <option value="1"<?php if($mm==1){echo "selected";}?>>มกราคม</option>
                        <option value="2"<?php if($mm==2){echo "selected";}?>>กุมภาพันธ์</option>
                        <option value="3"<?php if($mm==3){echo "selected";}?>>มีนาคม</option>
                        <option value="4"<?php if($mm==4){echo "selected";}?>>เมษายน</option>
                        <option value="5"<?php if($mm==5){echo "selected";}?>>พฤษภาคม</option>
                        <option value="6"<?php if($mm==6){echo "selected";}?>>มิถุนายน</option>
                        <option value="7"<?php if($mm==7){echo "selected";}?>>กรกฎาคม</option>
                        <option value="8"<?php if($mm==8){echo "selected";}?>>สิงหาคม</option>
                        <option value="9"<?php if($mm==9){echo "selected";}?>>กันยายน</option>
                        <option value="10"<?php if($mm==10){echo "selected";}?>>ตุลาคม</option>
                        <option value="11"<?php if($mm==11){echo "selected";}?>>พฤศจิกายน</option>
                        <option value="12"<?php if($mm==12){echo "selected";}?>>ธันวาคม</option>
</select>&nbsp;&nbsp;
                      ปี&nbsp;&nbsp;
                      <select name="yy" class="custom-select" id="yy" style="width:95px;">
                        <?php
				  if($_GET["yy"] == "")
				  {
				  $_GET["yy"]=date("Y");
				  }					
				  for($i=2010;$i<=2100;$i++)
				  {
				  if($_GET["yy"]==$i)
				  {
				  	$sel="selected";
				  }
				  else
				  {
				  	$sel="";				  
				  }
				  ?>
                        <option value="<?=$i;?>" <?=$sel;?>>
                          <?=$i;?>
                        </option>
                        <?php
					}
					?>
                      </select>
                      &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="button1"  value="ค้นหา">
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </form>
              </table>
<table class="cen" width="400" border="1" cellpadding="0"  cellspacing="0" align="center">
  <thead> 
  <tr >
    &nbsp;<th  width="10%"><div align="center">วันที่</div></th>
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
<?php // mysqli_close($con);?>
  </div>


  <?php
   /* include"database.class.php";
    
    //new database
    $db = new Database();
    
    if(isset($_POST['search_user'])){
        //get search user
        $get_user = $db->search_user($_POST['search_user']);
        
    }else{
        
        //call method getUser
        $get_user = $db->get_all_user();
    }*/
    function duration($begin,$end){
      $remain=intval(strtotime($end)-strtotime($begin));
      $wan=floor($remain/86400);
      $l_wan=$remain%86400;
      $hour=floor($l_wan/3600);
      $l_hour=$l_wan%3600;
      $minute=floor($l_hour/60);
      $second=$l_hour%60;
     // return $hour." ชั่วโมง ".$minute." นาที ".$second." วินาที";
      return $hour." ชั่วโมง ".$minute."  นาที ";
     }
    @$sql = "
SELECT *FROM join_activities left join project_participation on join_activities.id_p=project_participation.id_p
left join studen on join_activities.id_stu=studen.id_stu
where 1 and MONTH(join_activities.date_j)='".$_GET["mm"]."' and YEAR(join_activities.date_j)='".$_GET["yy"]."'

";
$query = mysqli_query($con, $sql);
$get_user=mysqli_num_rows($query);
?>
<br>

<div style=width:90%;margin-left:50px;margin-right:50px; >
            

         
                
  <table   class="table table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th width="20%">ลำดับ</th>
                                    <th width="20%">วันเดือนปี</th>
                                    <th >ชื่อกิจกรรม</th>
                                    <th >ชื่อ-นามสกุล</th>
                                    <th >เวลา</th>
                                    <!--<th width="10%">แก้ไข</th>
                                    <th width="5%">ลบ</th>-->
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
 
                                    $i = 1;
                                    if(!empty($get_user)){
                                       /* foreach($get_user as $user){*/
                                          while($result2=mysqli_fetch_array($query)){
                                ?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php $originaldate = $result2['date_j'];
                                $newdate = date("d-m-Y", strtotime($originaldate));
                                echo $newdate;
                                            ?></td>
                                             <td><?php echo $result2['activity_name']?></td>
                                            <td><?php echo $result2['perfix']?><?php echo $result2['name_stu']?>&nbsp;&nbsp;<?php echo $result2['sur_stu']?></td>
                                            <td><?php echo  duration($result2['join_time'],$result2['end_time']);?></td>
                                            
                                         
                     <!-- แก้ไข         <td><button class='glyphicon glyphicon-pencil btn' data-toggle="modal" data-target="#edit_user" onclick="return show_edit_user(<?php echo $user['id_j']?>);"></button></td>
                             <td><button class='glyphicon glyphicon-trash btn ' onclick="return delete_user(<?php echo $user['id_j']?>);"></button></td>   ลบ --> 
                                        </tr>
                                    
                                <?php
                                $a=duration($result2['join_time'],$result2['end_time']);
                                @$total_time=$total_time+$a;
                                        $i++;
                                        }
                                        echo "<tr>
                                        <td ></td>
                                        <td ></td>
                                        <td ></td>
                                        <td ></td>
                                        <td ><font color='red'>รวม $total_time ชั่วโมง </font></td>
                                        </tr>";
                                    }else{
                                        echo "<tr align='center'><td colspan='5'>ไม่พบข้อมูล</td></tr>";
                                    }
                                ?>
                                 
                            </tbody>
                            
                        </table>
              
        </div>
 
 
        <!-- Modal Add User -->
        
        <div  class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"align="center">เพิ่มข้อมูล</h4>
              </div>
              <div class="modal-body">
                    <form id="add_user_form">
                      <div class="form-group">
                        <label >ชื่อพนักงาน</label>
                        <input type="text" class="form-control" name="send_id_p"  placeholder="ระบุ ชื่อพนักงาน">
                      </div>

                      

                      <div class="form-group">
                        <label >วันเดือนปี</label>
                        <input type="date" class="form-control" name="send_date_j"  placeholder="ระบุ วันเดือนปี">
                      </div>

                      
            
                    </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="return add_user_form();">บันทึก</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal Edit User -->
        <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูล</h4>
              </div>
              <div class="modal-body">
                    <div id="edit_form"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="return edit_user_form();">บันทึก</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
              </div>
            </div>
          </div>
        </div>






</body>
<br><footer class="footer">
    <div class="footer float-right d-none d-sm-block " >
      <img src="image/swt.png"  ></img>
    </div>
    <strong>Copyright &copy; 2020 <a href="index.php">ระบบจัดการสารสนเทศจิตอาสา</a>.</strong> สำนักวิทยบริการและเทคโนโลยีสารสนเทศ มหาวิทยาลัยราชภัฏสกลนคร.
    
  </footer>

</html>


