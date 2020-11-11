<?php require_once('../connections/conn.php'); ?>
<?php 
	$result=false;
	if (isset($_GET['paperid'])) {
		$paperid=$_GET['paperid'];
	}
	else{
		header("Location:paperlist.php");
	}
	$query_paper="delete from paper where id=".$paperid;
	$result=mysqli_query($conn,$query_paper);
	mysqli_close($conn);
	if($result){
		echo "<script>alert('删除成功！');</script>";
	}
	else{
		echo "<script>alert('删除失败,试卷中有题目！');</script>";
	}
?>
<meta http-equiv="refresh" content="1;url=paperlist.php">
 