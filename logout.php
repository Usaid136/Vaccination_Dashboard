<?php
session_start();
session_destroy();
echo"<script>alert('Log Out Successful');
window.location.href='admin_login.php';
</script>";
?>