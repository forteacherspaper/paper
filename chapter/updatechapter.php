<!--  updatepaper.php  更新章节 -->
<?php require_once '../connections/conn.php';?>
<?php
	if(isset($_POST["chaptername"]))
	{
		 MySQLi_query($conn, "set names 'utf8'");
		$query_Chapter=sprintf("update chapter set chaptername='%s',number='%s' where id='%s'",
		$_POST['chaptername'],
		$_POST['number'],$_POST['id']);
		$editchapter=mysqli_query($conn,$query_Chapter) or die(mysqli_error($conn));
	}
	header("Location:deletechapter.php");
?>
