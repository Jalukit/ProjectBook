<?php session_start();?>
<?php
if($_GET['id_p']!=""){
include "connect.php"; 
/*@$sql2="select*, COUNT('join_activities.id_p') as `items_total` FROM join_activities left join project_participation on join_activities.id_p=project_participation.id_p where join_activities.id_p='".$_GET['id_p']."'";
$query2=mysqli_query($conn,$sql2);
$result2=mysqli_fetch_array($query2);

if( $result2['items_total']==$result2['number_pract']){
    echo  "<script> alert ('จำนวนผู้เข้าร่วมครบแล้ว') </script>";
    echo "<script>window.location='practice.php'</script>";
}else{*/

$sql="insert into join_activities (id_p,id_stu,statu_j) values ('".$_GET['id_p']."','".$_SESSION['id_stu']."','1')";
$query=mysqli_query($conn,$sql);
if($query){
	echo "<script>window.location='join.php'</script>";
    }
//}
}
exit();


?>