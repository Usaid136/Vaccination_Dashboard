<?php
include 'config.php';

$query="update tbl_patients set status='deactivate' where id=$_GET[id]";
mysqli_query($conn,$query);
echo "<script>window.location.href='patients.php'</script>";

?>