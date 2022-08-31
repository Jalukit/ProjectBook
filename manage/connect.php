<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

   $serverName = "localhost";
   $userName = "root";
   $Password = "";
   $dbName = "manage_information";
  
	$conn = mysqli_connect($serverName,$userName,$Password,$dbName);
    mysqli_set_charset($conn,"utf8");
	date_default_timezone_set("Asia/Bangkok");//ใช้ตั่งค่าให้เวลาตรงกับ server

	/*  ตรวจสอบเงื่อนไข การเชือมต่อ ฐานข้อมูล 
	if (mysqli_connect_errno())
	{
		echo "การเชื่อมต่อฐานข้อมูลล้มเหลว : " . mysqli_connect_error();
	}
	else
	{
		echo "เชื่อมต่อฐานข้อมูลแล้ว";
	}
*/
	//mysqli_close($con);
?>



