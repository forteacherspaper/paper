<!--  deletesec.php  删除章节 -->
<?php require_once('../connections/conn.php'); ?>
<?php 
	if (is_string($_GET['id'])) {
		$id=$_GET['id'];
	}
	else{
		header("Location:deletesection.php");//页面重定向
		# code...
	}
	$query_section="delete from section where id=.$id";
	$reslt=mysqli_query($conn,$query_section) or die(mysqli_error($conn));//返回一个带有错误描述的字符串
	mysqli_close($conn);
	if($reslt){
		echo "<script>alert('删除成功！');</script>";
	}
	else{
		echo "<script>alert('删除失败！');</script>";
	}
?>

<meta http-equiv="refresh" content="1;url=allsection.php">
