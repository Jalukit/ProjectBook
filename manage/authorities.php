<?php
session_start() ;
if (!isset($_SESSION['per_id'])) {
     header("Location:Login/login.php");
     exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ระบบจัดการสารสนเทศจิตอาสา</title>
  <link rel="shortout icon" type="imgae/x-icon" href="Snru.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style>
  .main-header{
    Background-color:#CCFF33;
  }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-  navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="authorities.php" class="nav-link">Home</a>
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
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> <font size="3">ระบบสารสนเทศจิตอาสา </font></span>
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
            <a href="authorities.php" class="nav-link active">
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
             <!-- <li class="nav-item">
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
                <a href="librarian_ex.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการข้อมูลบรรณารักษ์</p>
                </a>
              </li>-->
             <!-- <li class="nav-item">
                <a href="officer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการข้อมูลเจ้าหน้าที่ กยศ.</p>
                </a>
              </li>-->
              <li class="nav-item">
                <a href="student_au.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการข้อมูลนักศึกษา</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="volunteer_au.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              ตรวจสอบกิจกรรม
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
          <!--<li class="nav-item">
            <a href="webboard.php" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
              เว็บบอร์ด
              </p>
            </a>
          </li>-->
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ยินดีต้อนรับ เจ้าหน้าที่ กยศ. </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!--<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>-->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
    include "connect.php";
		@$sql="select*from personnel where status='1'";
		$query=mysqli_query($conn,$sql);
		$num_ad=mysqli_num_rows($query);
		?>    
                <h3><?php echo $num_ad ;?> คน</h3>

                <p>ผู้ดูแลระบบ</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
    include "connect.php";
		@$sql="select*from personnel where status='2'";
		$query=mysqli_query($conn,$sql);
		$num_m=mysqli_num_rows($query);
		?>    
                <h3><?php echo $num_m ;?> คน</h3>

                <p>ผู้บริหาร</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
    include "connect.php";
		@$sql="select*from personnel where status='3'";
		$query=mysqli_query($conn,$sql);
		$num_l=mysqli_num_rows($query);
		?>    
                <h3><?php echo $num_l ;?> คน</h3>

                <p>เจ้าหน้าที่บรรณารักษ์</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
    include "connect.php";
		@$sql="select*from personnel where status='4'";
		$query=mysqli_query($conn,$sql);
		$num_l=mysqli_num_rows($query);
		?>    
                <h3><?php echo $num_l ;?> คน</h3>

                <p>เจ้าหน้าที่ กยศ.</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
    include "connect.php";
		@$sql="select*from studen ";
		$query=mysqli_query($conn,$sql);
		$numrow=mysqli_num_rows($query);
		?>  
                <h3><?php echo $numrow;?> คน</h3>

                <p>จำนวนนักศึกษา</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
		@$sql="select*from  join_activities left join project_participation on join_activities.id_p=project_participation.id_p
    left join studen on join_activities.id_stu=studen.id_stu";
		$query=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($query);
		?>   
                <h3><?php echo $num;?> รายการ</h3>

                <p>สถิติการลงจิตอาสา</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
           
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
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
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
