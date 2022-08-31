<?php
include "connect.php";

$s="delete from join_activities where id_j='".$_GET['id_j']."'";
$q=mysqli_query($conn,$s);

if($q){
    
        echo "<script>window.location='detail_s.php?id_stu=$_GET[id_stu]'</script>";
}

?>
