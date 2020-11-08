
<?php require_once('../connections/conn.php'); ?>
<?php 
//session_start();
	if (isset($_GET['Id'])) {
		$id=$_GET['Id'];
                //$_SESSION['courseid']=$id;
	}
	else{
		header("Location:deletecourse.php");//页面重定向
		# code...
	}
       
	$query_course="delete from course where id=".$id;
	$result=mysqli_query($conn,$query_course) or die(mysqli_error($conn));//返回一个带有错误描述的字符串
	mysqli_close($conn);
        if($result){
            echo "<script>alert('删除成功！');</script>";
        }else{
            echo "<script>alert('删除失败！');</script>";
	}
?>

<meta http-equiv="refresh" content="1;url=courselist.php">
