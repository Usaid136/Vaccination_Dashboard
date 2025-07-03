<?php
include 'config.php';

$query="update tbl_hospital set status='deactivate' where id=$_GET[id]";
mysqli_query($conn,$query);
echo "<script>window.location.href='hospital.php'</script>";

?>