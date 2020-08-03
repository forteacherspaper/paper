<?php require_once 'connections/conn.php';?>
<?php
	if(isset($_POST["Id"]))
	{
		 MySQLi_query($conn, "set names 'utf8'");
		$query_Course=sprintf("update course set coursename='%s',manager='%s',gmt_create='%s',gmt_modified='%s' where id=%s",
		$_POST['CourseName'],
		$_POST['Manager'],
		$_POST['Gmt_Create'],
		$_POST['Gmt_Modified'],
		$_POST['Id']);
		$editcourse=mysqli_query($conn,$query_Course) or die(mysqli_error($conn));
	}
	header("Location:allcourselist.php");
?>