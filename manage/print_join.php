
<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบจัดการสารสานเทศจิตอาสา</title>
<link rel="shortout icon" type="imgae/x-icon" href="image/Snru_3.png">
</head>

<body onload="print();">
<?php
    include "connect.php";

@$sql="select*from studen where id_stu='".$_SESSION['id_stu']."'";
		$query=mysqli_query($conn,$sql);
		$r=mysqli_fetch_array($query);
?>
<table width="200" border="0" >
  <tr>
  <img  src="image/Snru_3.png"  width="110" height="110" >
    <td align="center">ชื่อ-นามสกุล :</td>
    <td><?php echo @$r['perfix'];?><?php echo @$r['name_stu'];?> &nbsp;&nbsp;<?php echo @$r['sur_stu'];?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<table id="example2" class="table table-bordered table-hover" align="center" border="1" width="100%" style="font-size:14px;" cellpadding="0" cellspacing="0">
                  <thead>
                  <tr>
                
          <td ><div align="center">ลำดับ<div></td>
          <td ><div align="center">ชื่อกิจกรรม<div></td>
          <td ><div align="center">วันที่เข้าร่วม<div></td>
          <td ><div align="center">เวลาที่เข้าร่วม<div></td>
          <td ><div align="center">ประเภทกิจกรรม<div></td>
          <td ><div align="center">รวมเวลา<div></td>
        <td ><div align="center">สถานะ<div></td>
  
      
         
                  </tr>
                  </thead>
                  <tbody>
    <?php
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
        @$sql="select*from  join_activities left join project_participation on join_activities.id_p=project_participation.id_p
        left join studen on join_activities.id_stu=studen.id_stu
        where join_activities.id_stu='".$_SESSION['id_stu']."'";
		$query=mysqli_query($conn,$sql);
		$numrow=mysqli_num_rows($query);
		$i=1;
		while($result=mysqli_fetch_array($query)){ 
		?>        
                  <tr>
                    <td align="center" class="align-middle"><?php echo $i++?></td>  
                    <td align="center" class="align-middle"><?php echo $result['activity_name']?></td>
                    <td align="center" class="align-middle"><?php echo $result['join_date']?></td>
                    <td align="center" class="align-middle"><?php echo $result['join_time']?>  ถึง  <?php echo $result['end_time']?></td>
                    <td align="center" class="align-middle"><?php echo $result['type']?></td>
                    <td align="center" class="align-middle">
<?php
 echo  duration($result['join_time'],$result['end_time']);
 ?>
                    </td>
                <td align="center" class="align-middle">
                <?php
if($result['statu_j']==1){
echo "รอการตรวจสอบ";
}else if($result['statu_j']==2){
  echo "อนุมัติ";
}else{
  echo"ไม่อนุมัติ";
}
                ?>
                </td>
                    
                  </tr>
                  
    <?php
$a=duration($result['join_time'],$result['end_time']);
@$re=$re+$a;
	 } 
	 ?>     
   <tr>
    <td align="center" bgcolor="#FFFFCC">&nbsp;</td>
    <td align="center" bgcolor="#FFFFCC">&nbsp;</td>
    <td align="center" bgcolor="#FFFFCC">&nbsp;</td>
    <td align="center" bgcolor="#FFFFCC">&nbsp;</td>
    <td align="right" bgcolor="#FFFFCC">รวม</td>
    <td align="center" bgcolor="#FFFFCC">
  <?php
echo $re;
 ?>  
    </td>
    <td align="left" bgcolor="#FFFFCC">ชั่วโมง</td>
   </tr>
   
                  </tbody>
                  
                </table>
                <div  ><h3 align="center">รายมือชื่อผู้รับรอง</h3><p align="center" style="font-size:13px">(ผู้บริหารสถานศึกษาหัวหน้าหน่วยงานหรือผู้ที่ได้รับมอบหมาย)</p>
                
                <p align="center">ลงชื่อ .................................................</p>
                <p align="center">( ................................................... )</p>
                <p align="center">ตำแหน่ง ................................... เบอร์โทร .............................</p>
                </div>

                
                </body>