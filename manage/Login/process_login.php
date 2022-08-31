<?php @session_start();@ob_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "../connect.php"; 
@$SQL="SELECT * FROM studen WHERE user='".$_POST['username']."'";
	$Query=mysqli_query($conn,$SQL);
	$Result=mysqli_fetch_array($Query);
	
	if(@$Result['user']==$_POST['username']){
	
@$strSQL="SELECT * FROM studen WHERE user='".$_POST['username']."' and pass='".$_POST['password']."'";
	$objQuery=mysqli_query($conn,$strSQL);
	$objResult=mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
echo"<script language='javascript'> alert ('username หรือ password ไม่ถูกต้อง' )</script>";
echo"<script>window.location='login.php'</script>";
	}
	else
	{
			@$_SESSION['id_stu']=$objResult["id_stu"];//แปลงส่งค่่า  id  เป็น $_SESSION
			/*echo "<script language='javascript'> alert ('ยินดีต้อนรับเข้าสู่ระบบ');</script>";*/
			echo "<meta http-equiv='refresh' content='0 ;url=../home.php'>" ; 
		   }
	}else{
 @$SQLAdmin="SELECT * FROM personnel WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
	$QueryAdmin=mysqli_query($conn,$SQLAdmin);
	$ResultAdmin=mysqli_fetch_array($QueryAdmin);
	if(!$ResultAdmin)
	{
echo"<script language='javascript'> alert ('username หรือ password ไม่ถูกต้อง' )</script>";
echo"<script>window.location='login.php'</script>";
	}
	else
	{
			@$_SESSION['per_id']=$ResultAdmin["per_id"];//แปลงส่งค่่า  id  เป็น $_SESSION
			@$_SESSION['status']=$ResultAdmin["status"];
			if($ResultAdmin['status']=="1"){
/*echo "<script language='javascript'> alert ('ยินดีต้อนรับเข้าสู่ระบบ');</script>";*/
echo "<meta http-equiv='refresh' content='0 ;url=../index.php'>" ; 
			}else if($ResultAdmin['status']=="2"){
			/*echo "<script language='javascript'> alert ('ยินดีต้อนรับเข้าสู่ระบบ');</script>";*/
echo "<meta http-equiv='refresh' content='0 ;url=../executive.php'>" ; 
		  }else if($ResultAdmin['status']=="3"){
			/*echo "<script language='javascript'> alert ('ยินดีต้อนรับเข้าสู่ระบบ');</script>";*/
echo "<meta http-equiv='refresh' content='0 ;url=../bibliographer.php'>" ; 
		   }else if($ResultAdmin['status']=="4"){
			/*echo "<script language='javascript'> alert ('ยินดีต้อนรับเข้าสู่ระบบ');</script>";*/
echo "<meta http-equiv='refresh' content='0 ;url=../authorities.php'>" ; 
		   }
	}
}
	mysqli_close($conn);
	
?>
