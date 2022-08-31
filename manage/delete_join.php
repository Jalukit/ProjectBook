<?php
include "connect.php";
$sql="delete from join_activities where id_j='".$_GET['id_j']."'";
$query=mysqli_query($conn,$sql);
if($query){
    
        echo "<script>window.location='join.php'</script>";
}

?>
