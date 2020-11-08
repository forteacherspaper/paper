<!--  deleteOr.php  删除章节 -->
<?php require_once('../connections/conn.php'); ?>
<?php 
	if (is_string($_GET['id'])) {
		$id=$_GET['id'];
	}
	else{
		header("Location:deletechapter.php");//页面重定向
		# code...
	}
	$query_Chapter="delete from chapter where id=$id";
	$resault=mysqli_query($conn,$query_Chapter) or die(mysqli_error($conn));//返回一个带有错误描述的字符串
	mysqli_close($conn);
	if($resault){
		echo "<script>alert('删除成功！');</script>";
	}
	else{
		echo "<script>alert('删除失败！');</script>";
	}
?>

<meta http-equiv="refresh" content="1;url=allchapter.php">
