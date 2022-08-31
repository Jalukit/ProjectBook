

<?php @session_start();@ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ระบบจัดการสารสนเทศจิตอาสา</title>
<link rel="shortout icon" type="imgae/x-icon" href="Snru_3.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>


.btn:hover {
  background-color: #4CAF50;
  color: white;
}
.wrap-login100{
	background-color:#FFFFFF;
	margin: 0px 0px 0px 0px;
	margin: auto;
	
  border: 3px solid #CCFF33;
  padding: 10px;
}
.limiter{
	background-color:#FFFFFF;
}
.ul{
	margin: 0px 7px 10px 0px;
	font-size: 20px;
	text-decoration:underline;
	color: black;
}
.bt{
	font-size:25px;
	color: grey;
}
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
  background-color: #FF00FF;
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
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
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
/*ฟอร์มล๊อกอิน*/
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 15px;
  border: none;
  cursor: pointer;
  
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

</style>


</head>
<body>
<div class="topnav">
  
<a>ระบบจัดการสารสนเทศจิตอาสา</a>
  <div class="search-container">
    <form action="/action_page.php">
	<a href="#about"onclick="window.location='../borad_user.php';">กระทู้</a>
  <a href="#contact"onclick="window.location='../statistics.php';" >สถิติการลงจิตอาสา</a>
    </form>
  </div>
</div>



</body>



	<div class="limiter" style="background-image: url(images/11.jpg);">
	
		<div class="container-login100">
			<div class="wrap-login100 ">
				<!--<div class="login100-form-title" style="background-image: url(images/Snru_2.jpg);" ><font color="#FFFFFF"><h3><div style="margin:-68px;">ระบบจัดการสารสนเทศจิตอาสา กรณีศึกษา <br>สำนักวิทยบริการและเทคโนโลยีสารสนเทศ <br> </div></h3></font></div>-->
				
				<center><img  src="login.png" alt="Girl in a jacket" width="120" height="100"class="image"></img>
        
				<form class="login100-form validate-form " name="frm" id="frm" method="post" action="process_login.php">
				<div  class="container-login100-form-btn" >
				
                    <!--<input class="button" name="button1" type="button" value="       กระทู้         " onclick="window.location='../borad_user.php';"class="btn btn-success float-right"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
					 <!--<input class="button1"  name="button2" type="button" value=" สถิติการลงจิตอาสา " onclick="window.location='../charts.php';" class="btn btn-success float-right"/>-->
					 
					 
					 <!--<li class="ul"><a class="ul" href="#" type="ul" onclick="window.location='../statistics.php';" target="_blank">สถิติการลงจิตอาสา</a></li>-->
					 <!--<li class="ul" ><a class="ul" href="#" type="ul" onclick="window.location='../borad_user.php';" target="_blank" >กระทู้&เว็บบอร์ด</a></li>-->
					</div>
					
					<div  class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100 "style="color:#000000"><i class="fa fa-user icon"></i></span>
						<input class="input100 " type="text" minlength="6" maxlength="15"  name="username" placeholder="กรุณากรอกชื่อผู้ใช้งาน" autocomplete="off">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100"style="color:#000000"><i class="fa fa-key icon"></i></span>
						<input class="input100 " type="password" minlength="6" maxlength="12" name="password" placeholder="กรุณากรอกรหัสผ่าน " autocomplete="off">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
						<!--<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>-->
						</div>

						<div>
							
						</div>
					</div>

					<div class="container-login100-form-btn">
					<input class="btn  btn-info btn-sm glyphicon glyphicon-log-in" name="button" type="submit" value="เข้าสู่ระบบ" style="color:#000000"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <input class="btn btn-info glyphicon-log-in"name="button" type="button" value="สมัครสมาชิก" onclick="window.location='../register.php';" style="color:#000000"/>
					  
					</div>
					
					
					<!--<<div class="container-login100-form-btn">
                    <input name="button1" type="button" value="ตั้งกระทู้" onclick="window.location='../borad_user.php';"class="login100-form-btn"/>&nbsp;&nbsp;
					 <input name="button2" type="button" value="สถิติการลงจิตอาสา" onclick="window.location='../charts.php';" class="login100-form-btn"/>
					</div>-->
					
				</form>
				
			</div>
      
		</div>
    
	</div>
	<footer class="footer">
    <div class="float-right d-none d-sm-block">
      <img src="images/swt.png"  ></img>
    </div>
    <strong>Copyright &copy; 2020 <a href="#"></a>.</strong> (หมายเหตุ มาหาพี่ วีระ กงลีมา ก่อนอันดับแรกเคาเตอรชั้น2 หรือเคาเตอร์บริการยืมคืนชั้นสอง หรือเจ้าหน้าที่ ศศธร มาศสถิตย์ และ วารุนี เพียรพจน์)
    
  </footer>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>




