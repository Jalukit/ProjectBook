<?php
include "connect.php";
$sql="delete from news where id_n='".$_GET['id_n']."'";
$query=mysqli_query($conn,$sql);
if($query){
    
        echo "<script>window.location='news_bi.php'</script>";
}

?>
