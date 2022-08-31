<?php session_start();?>

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
                <a href="join.php" class="nav-link active">
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
            <a href="board.php" class="nav-link">
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
            <h1>จัดการข้อมูลการปฏิบัติงานจิตอาสา</h1>
          </div>
          <div class="col-sm-6">
         <!-- <button type="button" class="btn btn-info float-right" onclick="window.location='add_practice.php'"><i class="fas fa-user-plus"></i> เพิ่มข้อมูล</button>-->

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
                <h3 class="card-title">แสดงข้อมูลการปฏิบัติงานจิตอาสา</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                
          <td ><div align="center">ลำดับ<div></td>
          <td ><div align="center">ชื่อกิจกรรม<div></td>
          <td ><div align="center">วันที่เข้าร่วม<div></td>
          <td ><div align="center">เวลาที่เข้าร่วม<div></td>
          <td ><div align="center">ประเภทกิจกรรม<div></td>
          <td ><div align="center">รายละเอียด<div></td>
          <td ><div align="center">รวมเวลา<div></td>
        <td ><div align="center">สถานะ<div></td>
          <td ><div align="center">ยกเลิก<div></td>
      
         
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
    include "connect.php";
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
                    <td align="center" class="align-middle"><a href="detail.php?id_p=<?php echo $result['id_p']?>"><button class="btn btn-info">คลิก <i class='fas fa-eye'></i></button></a></td>
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
                    <td align="center" class="align-middle">
                    <?php
if($result['statu_j']!=1){
  echo"-";
}else{
  ?>
                    <a href="delete_join.php?id_j=<?php echo $result['id_j']?>" onclick="return confirm('คุณต้องการที่จะลบข้อมูลรายการนี้ ใช่หรือไม่ ???');"><i class='fas fa-user-minus' style='font-size:48px;color:red'></i></a>
<?php } ?>                 
                    </td>
                  </tr>
    <?php } ?>     
    <?php if($numrow==0){ ?>
   <tr>
    <td colspan="9" align="center" bgcolor="#FFFFCC"><font color="#FF0000">---ไม่มีรายการ---</font></td>
  </tr>
  <?php } ?>
                  </tbody>
                  
                </table>
                <div class="container">
                <br>
      <p align="center">
        <a href="print_join.php" class="btn btn-info btn-lg">
         <img src="p.png" width="50" height="50"> <span class="glyphicon glyphicon-print"></span> Print
        </a>
      </p> 
    </div>
               <!-- <div class="container"><br>
      <p align="center">
        <a href="print.php" class="btn btn-info btn-lg">
         <img src="p.png" width="50" height="50"> <span class="glyphicon glyphicon-print"></span> Print
        </a>
      </p> 
    </div>-->
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
