<?php /*
if(@$_POST['status']==5){
 echo "<script>window.location='postpone.php?id_b=$_GET[id_b]'</script>";			
}*/
?>
<?php
include"connect.php";
@$sql="update join_activities set statu_j='".$_POST['status']."' where id_p='".$_GET['id_p']."'";
$query=mysqli_query($conn,$sql);
if($query){
	echo "<script>window.location='volunteer_bi.php'</script>";
	}
/*
if($_POST['bt_submit']=="ยืนยัน"){	
@$s="update book set date='".$_POST['date']."',time='".$_POST['time']."' where id_b='".$_POST['id_b']."'";
$q=mysqli_query($conn,$s);
if($q){
	echo "<script>window.location='home.php#javascript'</script>";
	}	
}*/
?>