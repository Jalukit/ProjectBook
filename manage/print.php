<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบจัดการสารสนเทศจิตอาสา</title>
<link rel="shortout icon" type="imgae/x-icon" href="image/Snru_3.png">
</head>

<body  onload="print();" >
<h3 align="center">ใบรับรอง</h3>
  <?php
    include "connect.php";
    @$sql="select*from  join_activities left join project_participation on join_activities.id_p=project_participation.id_p
    left join studen on join_activities.id_stu=studen.id_stu
    where join_activities.id_stu='".$_SESSION['id_stu']."'";
    		$query=mysqli_query($conn,$sql);
		$result=mysqli_fetch_array($query); 
		?>  
                <table width="70%" height="900" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-bordered table-hover" id="example2">
                  <thead>
                  <tr> 
          <td height="54" class="align-middle">ชื่อ-นามสกุล :</td>
          <td align="left" class="align-middle"><?php echo $result['perfix']?><?php echo $result['name_stu']?> &nbsp;&nbsp; <?php echo $result['sur_stu']?></td>
                  </tr>
                  <tr> 
          <td height="54" class="align-middle">ชื่อกิจกรรม :</td>
          <td align="left" class="align-middle"><?php echo $result['activity_name']?></td>
                  </tr>
                  <tr> 
                  <tr> 
          <td class="align-middle">สถานที่ : </td>
          <td height="54" align="right" class="align-middle"><br /><img id="img" src="picture/<?php echo $result['situation']?>" alt="" style="width:400px; height:200px; border-radius:15px;" /><br /></td>
                  </tr>
          <td height="54" class="align-middle">วันที่เข้าร่วม : </td>
          <td align="left" class="align-middle"><?php echo $result['join_date']?></td>
                  </tr>
                  <tr> 
          <td height="54" class="align-middle">เวลาที่เข้าร่วม : </td>
          <td align="left" class="align-middle"><?php echo $result['join_time']?> ถึง <?php echo $result['end_time']?> น.</td>
                  </tr>
                  <tr> 
          <td height="54" class="align-middle">ประเภทกิจกรรม : </td>
          <td align="left" class="align-middle"><?php echo $result['type']?></td>
                  </tr>
                  <tr> 
          <td height="54" class="align-middle">รายละเอียด : </td>
          <td align="left" class="align-middle"><?php echo $result['datail']?></td>
                  </tr>
                  <tr> 
          <td height="54" class="align-middle">ชั่วโมงรวม : </td>
          <td align="left" class="align-middle"><?php
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
 echo  duration($result['join_time'],$result['end_time']);
 ?></td>
                  </tr>
                  <tr> 
          <td class="align-middle"><div align="left">สถานะ</div></td>
          <td class="align-middle"><div align="left">
          <?php
if($result['statu_j']==1){
echo "รอการตรวจสอบ";
}else if($result['statu_j']==2){
  echo "อนุมัติ";
}else{
  echo"ไม่อนุมัติ";
}
                ?>
          </div></td>
                  </tr>
                  </thead>
                </table>
                <center><img  src="image/Snru_3.png"  width="110" height="110" >
                <div  ><h3 align="center">รายมือชื่อผู้รับรอง</h3><p align="center" style="font-size:13px">(ผู้บริหารสถานศึกษาหัวหน้าหน่วยงานหรือผู้ที่ได้รับมอบหมาย)</p>
                
                <p align="center">ลงชื่อ .................................................</p>
                <p align="center">( ................................................... )</p>
                <p align="center">ตำแหน่ง ................................... เบอร์โทร .............................</p>
                </div>
</body>
</html>