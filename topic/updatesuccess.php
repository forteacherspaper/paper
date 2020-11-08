<?php require_once('../connections/conn.php'); ?>
<?php 

	if (isset($_POST['id'])) {
		$id=$_POST['id'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		$questiontypeid=$_POST['questiontypeid'];
	}
	else{
		header("Location:topicmanage.php");
	}
	MySQLi_query($conn, "set names 'utf8'");
	$query_topic="update question set question='$question',answer='$answer',questiontypeid='$questiontypeid' where id=".$id;
	$resault=mysqli_query($conn,$query_topic) or die(mysqli_error($conn));
	mysqli_close($conn);
	if($resault){
		echo "<script>alert('修改成功！');</script>";
	}
	else{
		echo "<script>alert('修改失败！');</script>";
	}
?>
<meta http-equiv="refresh" content="1;url=topicmanage.php">