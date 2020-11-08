<?php
//logout.php退出登陆
session_start();
$_SESSION['username']=[];
session_destroy();
header("location:index.php");
?>
