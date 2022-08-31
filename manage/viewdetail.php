<?php session_start();?>
<?php

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
echo"<script>window.location='viewdetail.php?id_ques=$_GET[id_ques]'</script>";	
exit();
}else{
echo "<script>alert('เกิดข้อผิดพลาดในการตอบคำถาม')</script>";
echo"<script>window.location='viewdetail.php?id_ques=$_GET[id_ques]'</script>";	
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
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
    </ul>

    <!-- SEARCH FORM -->
   <!-- <form class="form-inline ml-3">
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
   <!-- <ul class="navbar-nav ml-auto">
           <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-envelope"> ตั้งกระทู้ </i>
        </a>
      </li>
    </ul>-->
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
      <!-- Sidebar user panel (optional) -->
      <?php
    include "connect.php";
		@$sql="select*from personnel where per_id='".$_SESSION['per_id']."'";
		$query=mysqli_query($conn,$sql);
		$result=mysqli_fetch_array($query);
		?>  
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="profile/<?php echo $result['profile'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $result['per_perfix'];?><?php echo $result['per_name'];?> &nbsp;&nbsp;<?php echo $result['per_lastname'];?></a>
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
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                หน้าหลัก
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="personnel.php" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              ข้อมูลบุคลากร
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการข้อมูลแอดมิน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manager.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการข้อมูลผู้บริหาร</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="librarian.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการข้อมูลบรรณารักษ์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="officer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการข้อมูลเจ้าหน้าที่ กยศ.</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการข้อมูลนักศึกษา</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="volunteer.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              ข้อมูลการเข้าร่วมจิตอาสา
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
            <a href="webboard.php" class="nav-link active">
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
                <h3 class="card-title">แสดงข้อมูลกระทู้ถามตอบ </h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
		include "connect.php";
		//=========== แสดงกระทู้ทั้งหมด
$sql = "SELECT * FROM question where id_ques='".$_GET["id_ques"]."' ";
		$query =  mysqli_query($conn,$sql);
		$result= mysqli_fetch_array($query);
									   	
?>
      <table width="100%" cellpadding="0" cellspacing="0" id="table">
        <tr> 
          <td align="left" class="boxtext style21"><strong> 
            หัวข้อ : <?php echo $result["question"];?></strong>
          </td>
        </tr>
        <tr> 
          <td><table width="85%" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="77%" align="left" class="boxtext">
                 <strong> เวลาที่ถาม :
                 <?php
$date = new DateTime($result["create_ques"]);
echo $date->format('d-m-Y H:i:s');
?>
                 </strong>
                  <span class="boxtext"> <a href="javascript:if(confirm('ต้องการลบกระทู้นี้ ใช่หรือไม่')==true){ window.location='viewdetail.php?AC=DELETE1&id_ques=<?php echo $result["id_ques"];?>'; }else{}"></a> 
                  </span></td>
                <td class="boxtext" align="right" width="23%"><div align="left"></div></td>
              </tr>
            </table>
 <hr align="left" width="100%" color="#D7ECA7"> 
      <?php
						//===========  อ่านว่ามีความคิดเห็นใดบ้าง
						@$strSQLReply="SELECT * FROM reply WHERE 1 AND id_ques='".($_GET["id_ques"])."' AND detail_reply LIKE '%".$_POST['search']."%' order by id_reply asc ";
						$QUERY=mysqli_query($conn,$strSQLReply);
						while($resultReply=mysqli_fetch_array($QUERY))
						{
						?>
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr> 
          <td></td>
        </tr>
        <tr> 
          <td><table width="85%" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="77%" align="left" class="boxtext"><strong> 
                 คุณ : <?php echo ($resultReply["name"]);?>
                  </strong> </td>
                <td class="boxtext" align="right" width="23%"><div align="left"></div></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td align="left" class="boxtext style22"> 
            <font color="#0000FF">ตอบ </font>: <?php echo (nl2br($resultReply["detail_reply"]));?><p>
            เวลาที่ตอบ :
            <?php
$date = new DateTime($resultReply["create_reply"]);
echo $date->format('d-m-Y H:i:s');
?>
       <a href="javascript:if(confirm('ต้องการลบความคิดเห็นนี้ ใช่หรือไม่')==true){ window.location='viewdetail.php?AC=DELETE2&id_ques=<?php echo $result["id_ques"];?>&id_reply= <?php echo $resultReply["id_reply"];?>'; }"><img src="icon.png" width="30" height="30" /></a> 
         </td>
        </tr>
        <tr> 
          <td class="font0" align="right"></td>
        </tr>
        <tr> 
          <td></td>
        </tr>
      </table>
      <hr align="left" width="100%" color="#D7ECA7"> 
      <?php
		}
	  ?>            
            </td>
        </tr>
        <tr> 
          <td class="boxtext style22"> 
            
          </td>
        </tr>
        <tr> 
          <td align="right"><strong></strong></td>
        </tr>
      </table>
<br />
<form action="viewdetail.php?id_ques=<?php echo $_GET["id_ques"];?>&Action=Save" method="post" name="frmMain" id="frmMain" onSubmit="return Check_txt()">
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
			                        <td><textarea name="txtdetail_reply" cols="50" rows="5" id="txtdetail_reply" onKeyUp="codelang(this)"></textarea></td>
		                          </tr>
<?php
@$s = "SELECT * FROM personnel  WHERE per_id = '".$_SESSION['per_id']."' ";
$qy = mysqli_query($conn,$s) or die ("Error Query [".$s."]");
$re = mysqli_fetch_array($qy);
?>
			                      <tr>
			                        <td width="177" align="center">&nbsp;</td>
			                        <td width="124" align="center"><font color="#FFFFFF">ชื่อ:</font></td>
			                        <td width="669" align="left">
     <input name="txtname" type="text" id="txtname" value="<?php echo $re['per_perfix'].$re['per_name']."&nbsp;&nbsp;".$re['per_lastname']?>" readonly="readonly">
                                    </td>
		                          </tr>
		                        </table><br>
			                    <center>
			                      <input name="btnSave" type="submit" id="btnSave" value="ตอบคำถาม">
		                          <input name="BtnContinute" type="button" class="button" id="BtnContinute" value="ย้อนกลับ" onClick="window.location='webboard.php';">
			                    </center>
        </form> 
            
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
<?php
//=========== กรณีลบกระทู้
if(@$_GET["AC"]=="DELETE1")
{
	//=========== ลบทั้งกระทู้และความคิดเห็น
$d="delete from question WHERE id_ques='".$_GET["id_ques"]."'";
$q=mysqli_query($conn,$d);

$de="delete from reply WHERE id_ques='".($_GET["id_ques"])."'";
$q=mysqli_query($conn,$de);
echo "<script language=\"javascript\">";
//echo "alert(\"ลบกระทู้เรียบร้อยแล้ว\");";
echo "window.location='webboard.php';";
echo "</script>";
}
//=========== กรณีลบความคิดเห็น
if(@$_GET["AC"]=="DELETE2")
{
//delete("reply","WHERE 1 AND id_reply='".($_GET["id_reply"])."'");
$delete="delete from reply WHERE id_reply='".($_GET["id_reply"])."'";
$q=mysqli_query($conn,$delete);
echo "<script language=\"javascript\">";
//echo "alert(\"ลบความคิดเห็นเรียบร้อยแล้ว\");";
echo "window.location='viewdetail.php?id_ques=$_GET[id_ques]';";
echo "</script>";
}

?>