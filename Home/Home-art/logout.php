<?php
session_start();
session_destroy();
header("Location: http://localhost/Profile-Project-main/login_register/Login.php ");	
?>