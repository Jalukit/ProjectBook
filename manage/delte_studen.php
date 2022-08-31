<?php
include "connect.php";
$sql="delete from studen where id_stu='".$_GET['id_stu']."'";
$query=mysqli_query($conn,$sql);
if($query){
    echo "<script>window.location='student.php'</script>";
}

?>
