<?php require_once('../connections/conn.php'); ?>
<?php require '../connections/isrealuser.php';?>
<?php
    $paperid=0;
    $id=0;
	if(isset($_GET['id'])&&isset($_GET['paperid']))
	{
		$paperid=$_GET['paperid'];
		$id=$_GET['id'];
	}
	else
	{
		header("location:paperqueslist.php");
	}
       
	$query_course="delete from paperquestion where id=".$id;
	$result=mysqli_query($conn,$query_course) or die(mysqli_error($conn));//返回一个带有错误描述的字符串
	mysqli_close($conn);
        if($result){
            echo "<script>alert('删除成功！');</script>";
        }else{
            echo "<script>alert('删除失败！');</script>";
	}
?>

<meta http-equiv="refresh" content="1;url=paperqueslist.php?paperid=<?php echo $paperid; ?>">
