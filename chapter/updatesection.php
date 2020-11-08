<!--  updatesection.php  更新节 -->
<?php require_once '../connections/conn.php';?>
<?php
	if(isset($_POST["sectionname"]))
	{
		 MySQLi_query($conn, "set names 'utf8'");
		$query_section=sprintf("update section set sectionname='%s',number='%s' where id='%s'",
                $_POST['sectionname'],
		$_POST['number'],
		$_POST['id']);
		$editsection=mysqli_query($conn,$query_section) or die(mysqli_error($conn));
	}
	header("Location:deletesection.php");
?>
