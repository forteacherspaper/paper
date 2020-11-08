<?php require_once '../connections/conn.php';?>
<?php
	if(isset($_POST["Id"]))
	{
		 MySQLi_query($conn, "set names 'utf8'");
		$query_course=sprintf("update course set coursename='%s' where id=%s",
		$_POST['CourseName'],
		$_POST['Id']);
		$editcourse=mysqli_query($conn,$query_course) or die(mysqli_error($conn));
	}
	header("Location:courselist.php");
?>