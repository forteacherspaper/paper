<?php require_once 'connections/conn.php';?>
<?php
	if(isset($_POST["courseId"]))
	{
		 MySQLi_query($conn, "set names 'utf8'");
		$query_Chapter=sprintf("update chapter set chaptername='%s',chapterid='%s',gmt_create='%s',gmt_modified='%s' where courseid=%s",
		$_POST['chaptername'],
		$_POST['chapterid'],
		$_POST['Gmt_Create'],
		$_POST['Gmt_Modified'],
		$_POST['courseId']);
		$editpaper=mysqli_query($conn,$query_Chapter) or die(mysqli_error($conn));
	}
	header("Location:allpaper.php");
?>
