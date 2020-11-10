<?php require_once('../connections/conn.php'); ?>
<?php require_once('../connections/isrealuser.php');?>
<?php require_once('../connections/course.php');?>

<?php
mysqli_query($conn,"set names 'utf8'");
$query_topic="select id,question,questiontypeid,answer,username,sectionid from question where sectionid in(select sectionid from section where chapterid in(select chapterid from chapter where courseid=$courseid))";
$Topic=mysqli_query($conn,$query_topic) or die(mysqli_error($conn));
$row_topic=mysqli_fetch_assoc($Topic);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>组卷系统-全部题目列表</title>
	<style type="text/css">
 .a{
                font-family: 黑体;
                font-size: 25px;
                background-color:aliceblue;
                text-decoration: none;
            }
            body{
                background: aliceblue;
                text-decoration: none;
            }
            a:link{
                 text-decoration: none;
            }
    </style>
</head>
<body bgcolor="#f4f4f4">
	<table width="100%" border="0" align="center">
		<div id="head">
            <p align="right"><font>
                <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="../logout.php">【退出】</a></font><br/>
                </p>
            </div>
		<tr>
			<p align="center"><td height="68" colspan="4" align="center">
				<font face="隶书" size="+4" color="#000000">组卷系统-题目管理</font>
			</td></p>
		</tr>
		
		<tr>
			<td width="15%" height="20" align="center" valign="middle" class="a">
				<a href="../index.php">首页</a>
			</td>
			<td width="15%" height="20%" class="a"><a href="../course/courselist.php">课程管理</a></td>
			<td width="15%" height="20%" class="a"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
			 <td width="15%" height="20%" class="a"><a href="../topic/topicmanage.php">题目管理</a></td>
			<td width="15%" height="20%" class="a">
				<a href="../teacher/teachermanage.php">教师管理</a>
			</td>
			<td width="15%" height="20%"  class="a">
				<a href="../paper/index.php">组卷系统</a>
			</td>
		</tr>
		<tr><table><hr></table></tr>

		<tr><td><table align="center"><tr>
			
			<td width="70%"><a href="addtopic.php" title="添加题目"><h3>添加题目</h3></a></td>
			<td width="70%"><a href="querrytopic.php"><h3>查询题目</h3></a></td>
		</tr></table></td></tr>
		
		<tr>
			<td height="169" colspan="6" align="center">
				<td width="10%" rowspan="2">&nbsp;</td>
				<table width="100%" border="0">
					<tr valign="middle">
						<td align="center">序号</td>
						<td align="center">题干</td>
						<td align="center">题型</td>
						<td align="center">答案</td>
						<td align="center">出题人</td>
						<td align="center">编辑</td>
					</tr>
					<?php
					$xuhao=1;
					 do { ?>
						<tr valign="middle" align="center" >
							<td><?php echo $xuhao; ?></td>
							<td width="80px"><?php echo $row_topic['question'] ; ?></td>
							<td><?php echo $row_topic['questiontypeid']; ?></td>
							<td width="150px"><?php echo $row_topic['answer']; ?></td>
							<td><?php echo $row_topic['username'] ; ?></td>
							 <td align="center"><a href="updatetopic.php?id=<?php echo $row_topic['id']; ?>">编辑</a></td>
							<input type="hidden" name="sectionid" id="sectionid" value="<?php echo $row_topic['sectionid'] ?>">
						</tr>
					<?php
					  $xuhao++; 
				     }while ($row_topic=mysqli_fetch_assoc($Topic)) ;
					?>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="6">
				<table width="100%" border="0">
					<hr>
					<tr>
                    	<td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                	</tr>
				</table>	
			</td>
		</tr>
	</table>
</body>
</html>