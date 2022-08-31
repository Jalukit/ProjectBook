<?php session_start();?>
<?php
 include("connect.php");

if(@$_GET["Action"] == "Save"){
	if($_POST["btnSave"]=="ตอบคำถาม"){// เช็คว่าเมื่อกดปุ่มจะมีการทำงานภายในปุ่ม
	if($_POST["btnSave"]==""){//
	}elseif($_POST["txtdetail_reply"]==""){
echo "<script>alert('กรุณากรอกรายละเอียดเนื้อหาด้วย');history.back();</script>";
exit();
}elseif($_POST["txtname"]==""){
echo "<script>alert('กรุณากรอก ชื่อ-นามสกุล ด้วยเพื่อยืนยันว่าคุณไม่ใช่หุ่นยนต์');history.back();</script>";
exit();
}else{
 include("connect.php");

	$time= date("Y-m-d H:i:s");
$strSQL = "INSERT INTO reply (id_ques,create_reply,detail_reply,name) VALUES ('".$_GET["id_ques"]."','$time','".$_POST["txtdetail_reply"]."','".$_POST["txtname"]."') ";
$objQuery = mysqli_query($conn,$strSQL);
	if($objQuery){
/*echo "<script>alert('ตอบคำถามสำเร็จ')</script>";*/
echo"<script>window.location='reply.php?id_ques=$_GET[id_ques]'</script>";	
exit();
}else{
echo "<script>alert('เกิดข้อผิดพลาดในการตอบคำถาม')</script>";
echo"<script>window.location='reply.php?id_ques=$_GET[id_ques]'</script>";	
exit();
}
}
}	
	//*** Update Reply ***/
$strSQL = "UPDATE question ";
$strSQL .="SET reply = reply + 1 WHERE id_ques = '".$_GET["id_ques"]."' ";
$objQuery = mysqli_query($conn,$strSQL);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ระบบจัดการสารสนเทศจิตอาสา </title>
  <link rel="shortout icon" type="imgae/x-icon" href="Snru.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
  .main-header{
    Background-color:#CCFF33;
  }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar- navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
      </li>
     <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
    </ul>

    <!-- SEARCH FORM -->
    <!--<form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
           <li class="nav-item">
        <a class="nav-link"  href="answer.php" role="button">
          <i class="fas fa-envelope"> ตั้งกระทู้ </i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><font size="3">ระบบสารสนเทศจิตอาสา </font></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <?php
    include "connect.php";
		@$sql="select*from studen where id_stu='".$_SESSION['id_stu']."'";
		$query=mysqli_query($conn,$sql);
		$result=mysqli_fetch_array($query);
		?>  
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--<img src="profile/<?php echo $result['profile'];?>" class="img-circle elevation-2" alt="User Image">-->
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $result['perfix'];?><?php echo $result['name_stu'];?> &nbsp;&nbsp;<?php echo $result['sur_stu'];?></a>
        </div>
        
      </div>

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <a href="home.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                หน้าหลัก
              </p>
            </a>
          </li>
          
              <li class="nav-item">
                <a href="data.php" class="nav-link ">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>ข้อมูลส่วนตัว</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="join.php" class="nav-link ">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>ข้อมูลเข้าร่วมกิจกรรม</p>
                </a>
              </li>
           
          <li class="nav-item">
            <a href="practice.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              กิจกรรมปฏิบัติจิตอาสา
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="statistics.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              สถิติการลงจิตอาสา
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="board.php" class="nav-link active">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
              เว็บบอร์ด
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-unlock"></i>
              <p>
              ออกจากระบบ
              </p>
            </a>
            </li>
            </ul>
          </li> 
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>จัดการข้อมูลเว็บบอร์ด</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">แสดงข้อมูลเว็บบอร์ด</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <h1><font color="#FFBF55">ตอบกระทู้</font></h1>
        </div>
        <?php
$strSQL = "SELECT * FROM question  WHERE id_ques = '".$_GET["id_ques"]."' ";
$objQuery = mysqli_query($conn,$strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysqli_fetch_array($objQuery);

//*** Update View ***//
$strSQL = "UPDATE question ";
$strSQL .="SET View = View + 1 WHERE id_ques = '".$_GET["id_ques"]."' ";
$objQuery = mysqli_query($conn,$strSQL);	
?>
		                      </p>
		<table width="100%" height="78" border="0" align="center" cellpadding="0" cellspacing="0">
			                    <tr>
			                      <td colspan="2"><br><center>
			                        <h1><font size="4" >
			                          <a name=""><?php echo $objResult["question"];?></a>
		                            </h1>
			                        </center></td>
		                        </tr>
			                    
			                    <tr>
			                      <td width="518" align="left"></td>
			                      <td width="198" align="center"><font color="#0000FF">วันที่ถาม  </font>:
<?php
$date = new DateTime($objResult["create_ques"]);
echo $date->format('d-m-Y H:i:s');
?> 
                                    </td>
		                        </tr>
		                      </table>
<?php
$intRows = 0;
$strSQL2 = "SELECT * FROM reply  WHERE id_ques = '".$_GET["id_ques"]."' order by id_reply asc  ";
$objQuery2 = mysqli_query($conn,$strSQL2) or die ("Error Query [".$strSQL."]");
while($objResult2 = mysqli_fetch_array($objQuery2))
{
	$intRows++;
?>
			                  แสดงความคิดเห็น :
			                  <?php echo $intRows;?> 
			                  <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF9933">
			                    <tr>
			                      <td height="24" colspan="2" bgcolor="#FFFBF0"><font color="#000000">
			                        <?php echo nl2br($objResult2["detail_reply"]);?></td>
		                        </tr>
			                    <tr>
			                      <td width="574" height="30" align="left" bgcolor="#FFFBF0"><font color="#000000">คุณ :
			                        <?php echo $objResult2["name"];?></td>
			                      <td width="220" align="center" bgcolor="#FFFBF0"><font color="#CC0000">วันที่ตอบ  :</font>
<font color="#0000FF"><?php
$date = new DateTime($objResult2["create_reply"]);
echo $date->format('d-m-Y H:i:s');
?> </font>                                      
                                    </td>
		                        </tr>
		                      </table>
<?php
}
?>
			                  <br>
                              <?php
							if(@$_SESSION['id_stu']==""){
								echo "";
							}else{
							  ?>
 <form action="reply.php?id_ques=<?php echo $_GET["id_ques"];?>&Action=Save" method="post" name="frmMain" id="frmMain" onSubmit="return Check_txt()">
	 <table width="100%" height="116" border="0" align="center" cellpadding="1" cellspacing="1" >
			<tr>
			   <td width="177" align="center">&nbsp;</td>
			   <td width="124" align="center"><font color="#FFFFFF">แสดงความคิดเห็น :</font></td>
<script type='text/javascript'>
function codelang(elm){
	regex1 =/^[a-zก-ฮแโไใเ]$/i
	regex2=/^[a-zก-ฮ][a-zก-ฮ]$/i
	regex3=/^[a-zก-ฮ]{1,2}(\d|-)+$/i
	regex4=/--/
	val =elm.value;
	len =elm.value.length;
	if( len==1 && !val.match(regex1) ){  //ตัวแรกไม่ได้เป็นตัวอักษร
	    elm.value='';
	}else if((len==255 ) &&!val.match(regex2) ){  //ตัวที่สองไม่ได้เป็นตัวอักษรหรือตัวเลขหรือ - ได้
		elm.value='';
	}else if(len >255 && !val.match(regex3)){  //ตัวที่สามเป็นต้นไปไม่ใช้ตัวเลขหรือ -
		elm.value='';
	}else if(val.match(regex4)){  // มีการพิม - ติดกันสองครั้ง
		elm.value='';
	}
}
</script>
			                        <td><textarea name="txtdetail_reply" cols="50" rows="5" id="txtdetail_reply"  onKeyUp="codelang(this)"></textarea></td>
		                          </tr>
<?php
@$s = "SELECT * FROM studen  WHERE id_stu = '".$_SESSION['id_stu']."' ";
$qy = mysqli_query($conn,$s) or die ("Error Query [".$s."]");
$re = mysqli_fetch_array($qy);
?>
			                      <tr>
			                        <td width="177" align="center">&nbsp;</td>
			                        <td width="124" align="center"><font color="#FFFFFF">ชื่อ:</font></td>
			                        <td width="669" align="left">
     <input name="txtname" type="text" id="txtname" value="<?php echo $re['user']?>" readonly="readonly" >
                                    </td>
		                          </tr>
		                        </table><br>
			                    <center>
			                      <input name="btnSave" type="submit" id="btnSave" class="btn btn-primary" value="ตอบคำถาม">
		                          <input name="BtnContinute" type="button" class="btn btn-primary" id="BtnContinute" value="ยกเลิก" onClick="window.location='index.php';">
			                    </center>
        </form>                              
			     <?php } ?>     
            
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <img src="image/swt.png"  ></img>
    </div>
    <strong>Copyright &copy; 2020 <a href="index.php">ระบบจัดการสารสนเทศจิตอาสา</a>.</strong> สำนักวิทยบริการและเทคโนโลยีสารสนเทศ มหาวิทยาลัยราชภัฏสกลนคร.
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<!--script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>-->
</body>
</html>
