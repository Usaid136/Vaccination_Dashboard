<?php
include 'config.php';

$query="update tbl_hospital set status='activate' where id=$_GET[id]";
mysqli_query($conn,$query);
echo "<script>window.location.href='hospital.php'</script>";

?>