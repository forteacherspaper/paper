<?php require_once('../connections/conn.php');?>
<?php require '../connections/isrealuser.php';?>
<?php
	if(isset($_GET['paperid']))
	{
		$paperid=$_GET['paperid'];
	}
	else
	{
		header("location:paperlist.php");
	}
	$query_paper="select courseid,papername from paper where id='$paperid'";
    $paper2=mysqli_query($conn,$query_paper) or die(mysql_error($conn));
    $row_paper2=mysqli_fetch_assoc($paper2);
    $courseid=$row_paper2["courseid"];

	mysqli_query($conn,'set names utf8');
		$paper_query="select question,answer,questiontypeid,score,paperquestion.id as id from question,paperquestion where question.id=paperquestion.questionid and paperid=$paperid order by questiontypeid";
	    $paper=mysqli_query($conn,$paper_query) or die(mysqli_error($conn));
	    $row_paper=mysqli_fetch_assoc($paper);
	$i=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>试卷显示</title>
</head>
<body bgcolor="white">
	<table width="100%" border="0" align="center">
        <tr>
		<td align="center"><h2>试卷名称：<?php echo $row_paper2['papername'] ?></h2></td>
        </tr>  
        <tr>
		<td height="169" colspan="6" align="center">
            <table width="100%" border="0">
			<tr valign="middle">
                            <td align="center"><b>序号</b></td>
                            <td align="center"><b>题目</b></td>
                            <td align="center"><b>答案</b></td>
                            <td align="center"><b>题型</b></td>
                            <td align="center"><b>分值</b></td>
                            <td align="center"><b>删除</b></td>
			</tr>
			<?php do { ?>
                <tr valign="middle" align="center">
					<td><?php echo $i++; ?></td>
					<td><?php echo $row_paper['question'] ; ?></td>
					<td><?php echo $row_paper['answer']; ?></td>
					<td><?php echo $row_paper['questiontypeid']; ?></td>
					<td><?php echo $row_paper['score']; ?></td>
					<td>
				        <a href="deletepaperques.php?id=<?php echo $row_paper['id']; ?>&paperid=<?php echo $paperid; ?>" title="将题目从试卷中删除">删除</a>
					</td>
                </tr>
				<?php }while ($row_paper=mysqli_fetch_assoc($paper)) ;
				?>
			</table>
		</td>
	</tr>
	<tr>
        <td colspan="6">
        <table width="100%" border="0"><hr>
        <div id="foot">
            <p align="center"><font color="black">版权所有&copy;郑州师范学院</font></p>
        </div>
		</table>	
		</td>
	</tr>
	</table>
</body>
</html>