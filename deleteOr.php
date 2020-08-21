<?php require_once('connections/conn.php'); ?>
<?php 
	if (isset($_GET['courseId'])) {
		$id=$_GET['courseId'];
	}
	else{
		header("Location:deletepaper.php");//页面重定向
		# code...
	}
	$query_course="delete from chapter where id=".$courseidid;
	$resault=mysqli_query($conn,$query_Chapter) or die(mysqli_error($conn));//返回一个带有错误描述的字符串
	mysqli_close($conn);
	if($resault){
		echo "<script>alert('删除成功！');</script>";
	}
	else{
		echo "<script>alert('删除失败！');</script>";
	}
?>

<meta http-equiv="refresh" content="1;url=deletepaper.php">
