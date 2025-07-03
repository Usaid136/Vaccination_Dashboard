<?php
include 'config.php';

$query="update feedback set status='Hide' where id=$_GET[id]";
mysqli_query($conn,$query);
echo "<script>window.location.href='feedback.php'</script>";

?>