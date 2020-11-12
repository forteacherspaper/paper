<?php require_once('../connections/conn.php');?>
<?php require '../connections/isrealuser.php';?>
<?php require '../connections/course.php';?>
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
    <style type="text/css">
             .b{
                font-size: 22px;
            }.a{
                font-family: 黑体;
                font-size: 16px;
                background-color:aliceblue;
                text-decoration: none;
                background-color: #ced1f2;
            }
            body{
                background: aliceblue;
                text-decoration: none;
            }
             a:link{
                 text-decoration: none;
                 color:#000000;
            
            }
            a:visited{
                color:#000000;
             }
             a:hover{
                color:#000000;
             }
             a:active{
                color:#000000;
             }
    </style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>试卷显示</title>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
        
        <tr>
            <td></td>
            <p align="center"><td colspan="3" align="center">
                <font face="隶书" size="+3" color="#000000">组卷系统-试卷显示</font>
            </td></p>
            <td><div>
            <p align="right"><font>
                 <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="../logout.php">【退出】</a><br/>
                <?php
                echo "当前课程：".$coursename;
                ?></font>
                </p>
            </div></td>
        </tr>
        
       <tr>
            <td width="15%" height="40px" align="center" valign="middle" class="a">
                <a href="../index.php">首页</a>
            </td>
            <td width="15%" height="40px" class="a"><a href="../teacher/teachermanage.php">教师管理</a></td>
            <td width="15%" height="40px" class="a"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="40px" class="a"><a href="../chapter/chapterlist.php">章节管理</a></td>
            <td width="15%" height="40px" class="a">
                <a href="../topic/topicmanage.php">题目管理</a>
            </td>
            <td width="15%" height="40px"  class="a">
                <a href="index.php">组卷系统</a>
            </td>
        </tr>
       <tr>
        <td colspan="6">

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
</td></tr></table>
</body>
</html>