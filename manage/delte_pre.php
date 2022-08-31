<?php
include "connect.php";
$sql="delete from personnel where per_id='".$_GET['per_id']."'";
$query=mysqli_query($conn,$sql);
if($query){
    if($_GET['status']==1){
    echo "<script>window.location='admin.php'</script>";
    } else if($_GET['status']==2){
        echo "<script>window.location='manager.php'</script>";
    } else if($_GET['status']==3){
        echo "<script>window.location='librarian.php'</script>";
    } else if($_GET['status']==4){
        echo "<script>window.location='officer.php'</script>";
    }
}

?>
