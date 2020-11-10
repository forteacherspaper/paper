<?php require_once('../connections/conn.php'); ?>
<?php require'../connections/isrealuser.php';?>
<?php
    if($_SESSION['username']!="admin")
    {
       header("location:../login.php");
    }
?>
<?php 
	if (isset($_GET['ID'])) {
		$id=$_GET['ID'];
	}
	else{
		header("Location:teachermanage.php");
	}
	$query_teacher="delete from teacher where id=".$id;
	$resault=mysqli_query($conn,$query_teacher) or die(mysqli_error($conn));
	mysqli_close($conn);
	if($resault){
		echo "<script>alert('删除成功！');</script>";
	}
	else{
		echo "<script>alert('删除失败！');</script>";
	}
?>
<meta http-equiv="refresh" content="1;url=teachermanage.php">
 
