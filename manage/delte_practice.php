<?php
include "connect.php";
$sql="delete from project_participation where id_p='".$_GET['id_p']."'";
$query=mysqli_query($conn,$sql);
if($query){
    
        echo "<script>window.location='duty_bi.php'</script>";
}

?>
