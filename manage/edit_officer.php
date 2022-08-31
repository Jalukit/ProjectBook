<?php session_start();?>
<?php
include "connect.php";
if(@$_POST['Submit']=="ยืนยัน"){
  $updateSQL ="UPDATE personnel SET 
  per_perfix='".$_POST['per_perfix']."',
  per_name='".$_POST['per_name']."', 
  per_lastname='".$_POST['per_lastname']."',
  username='".$_POST['username']."', 
  password='".$_POST['password']."' ,
  status='".$_POST['status']."'
	     WHERE per_id='".$_POST['per_id']."'";
                    
  $Result1 = mysqli_query($conn,$updateSQL) or die(mysqli_error());
  if($Result1){
$file=iconv("UTF-8","TIS-620",$_FILES["profile"]["name"]); 
if(@copy($_FILES["profile"]["tmp_name"],"profile/".$file)){
	$sql="update personnel set profile='".$_FILES["profile"]["name"]."' WHERE per_id='".$_POST['per_id']."'";
	$query=mysqli_query($conn,$sql);
}

	echo "<script>window.location='officer.php'</script>";
  }
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
               <li class="nav-item ">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                หน้าหลัก
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="personnel.php" class="nav-link active">
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
                <a href="officer.php" class="nav-link active">
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
            <a href="webboard.php" class="nav-link">
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
            <h1>จัดการข้อมูลเจ้าหน้าที่ กยศ.</h1>
          </div>
          <div class="col-sm-6">
         
                <button type="button" class="btn btn-info float-right" onclick="window.location='officer.php'"><i class="fa fa-arrow-left"></i> ย้อนกลับ</button>
            
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
                <h3 class="card-title">แก้ไขข้อมูลเจ้าหน้าที่ กยศ. </h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript">
        function Preview(ele) {
            $('#img').attr('src', ele.value);
                if (ele.files && ele.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                }
                reader.readAsDataURL(ele.files[0]);
            }
        }
        </script>
    <?php
   include "connect.php";
   $sql="select*from personnel where per_id='".$_GET['per_id']."'";
   $query=mysqli_query($conn,$sql);
   $row_Recordset1=mysqli_fetch_array($query);
   ?>
    <center>  
 <img id="img" src="profile/<?php echo $row_Recordset1['profile']?>" alt="" style="width:200px; height:250; border-radius:15px;" />
 </center>
                <br>

  <form id="form1" name="form1" method="post" action="" onsubmit="return check_text()" enctype="multipart/form-data">

        <table width="431" border="0" align="center">
        <tr>
            <td align="left">รูปประจำตัว :</td>
            <td align="left"><input name="profile" class="form-control" type="file" id="profile" size="50" value="<?php echo $row_Recordset1['profile'];?>" OnChange="Preview(this)"/>
           </td>
          </tr>
          <tr>
            <td width="98" align="left" scope="col">คำนำหน้า :</td>
            <td width="323" align="left" scope="col">
            <select name="per_perfix" id="per_perfix" class="form-control" >
              <option value="<?php echo $row_Recordset1['per_perfix'];?>"><?php echo $row_Recordset1['per_perfix'];?></option>
              <option value="นาย">นาย</option>
              <option value="นางสาว">นางสาว</option>
              <option value="นาง">นาง</option>
            </select>
            </td>
          </tr>
          <tr>
            <td align="left">ชื่อ :</td>
            <td align="left"><input name="per_name" class="form-control" type="text" id="per_name" size="50" value="<?php echo $row_Recordset1['per_name'];?>"/>
           </td>
          </tr>
          <tr>
            <td align="left">สกุล :</td>
            <td align="left"><input name="per_lastname" class="form-control" type="text" id="per_lastname" size="50" value="<?php echo $row_Recordset1['per_lastname'];?>"/>
            </td>
          </tr>
          <tr>
            <td align="left">ชื่อผู้ใช้ :</td>
           <td align="left"><input name="username" type="text" id="username" class="form-control" size="50" value="<?php echo $row_Recordset1['username'];?>"/>
            </td>
          </tr>
          <tr>
            <td align="left">รหัสผ่าน :</td>
            <td align="left"><input name="password" type="password" id="password" size="50" class="form-control" value="<?php echo $row_Recordset1['password'];?>" />
           </td>
          </tr>
           <tr>
            <td align="left">ตำแหน่ง :</td>
            <td align="left">
            <select name="status" id="status" class="form-control" readonly>
              <option value="4">เจ้าหน้าที่ กยศ.</option>
            </select>
  			</td>
          </tr>
          <tr>
            <td colspan="2" align="center"><br>
            <input type="hidden" name="per_id" value="<?php echo $row_Recordset1['per_id']; ?>" />
            <input type="submit" name="Submit" id="button" value="ยืนยัน" class="btn btn-primary"/>
            </td>
          </tr>
        </table>
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
<script>
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
</script>
</body>
</html>
