<?php require_once('connections/conn.php'); ?>
<?php
mysqli_query($conn,"set names 'utf8'");
$query_teacher="select * from teacher";
$Teacher=mysqli_query($conn,$query_teacher) or die(mysql_error($conn));
$row_teacher=mysqli_fetch_assoc($Teacher);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>组卷系统-全部老师列表</title>
</head>
<body bgcolor="#f4f4f4">
	<table width="100%" border="0" align="center">
		<tr>
			<td height="68" colspan="4" align="center">
				<font face="隶书" size="+4" color="#cccc00">组卷系统-教师管理</font>
			</td>
		</tr>
		
		<tr>
			<td width="15%" height="20" align="left" valign="middle">
				<a href="index.php">首页</a>
			</td>
			<td width="15%" height="20%"><a href="">课程管理</a></td>
			<td width="15%" height="20%"><a href="">课程章节管理</a></td>
			<td width="15%" height="20%" align="left" valign="middle">
				<a href="">题目管理</a>
			</td>
			<td width="15%" height="20%" align="left" valign="middle">
				<a href="">组卷系统</a>
			</td>
		</tr>
		<tr><table><hr></table></tr>

		<tr><td><table align="center"><tr>
			<td width="40%"><a href="teacher_course.php"><h3>教师所授课程</h3></a></td>
			<td width="40%"><a href="addteacher.php?ID=<?php echo $row_teacher['id'] ?>" title="add.php?ID=<?php echo $row_teacher['id'] ?>"><h3>添加教师信息</h3></a></td>
			<td width="40%"><a href="queryteacher.php"><h3>查询教师信息</h3></a></td>
		</tr></table></td></tr>
		
		<tr>
			<td height="169" colspan="6" align="center">
				<td width="10%" rowspan="2">&nbsp;</td>
				<table width="100%" border="0">
					<tr valign="middle">
						<td align="center">编号</td>
						<td align="center">姓名</td>
						<td align="center">用户名</td>
						<td align="center">密码</td>
						<td align="center">邮箱</td>
						<td align="center">创建时间</td>
						<td align="center">最后修改时间</td>	
					</tr>
					<?php do { ?>
						<tr valign="middle" align="center">
							<td><?php echo $row_teacher['id']; ?></td>
							<td><?php echo $row_teacher['name'] ; ?></td>
							<td><?php echo $row_teacher['username']; ?></td>
							<td><?php echo $row_teacher['password']; ?></td>
							<td><?php echo $row_teacher['email'] ; ?></td>
							<td><?php echo $row_teacher['gmt_create']; ?></td>
							<td><?php echo $row_teacher['gmt_modified']; ?></td>
							<input type="hidden" name="ID" id="ID" value="<?php echo $row_teacher['id'] ?>">
							
							
						</tr>
					<?php }while ($row_teacher=mysqli_fetch_assoc($Teacher)) ;
					?>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="6">
				<table width="100%" border="0">
					<hr>
					<tr>
                    	<td align="center" valign="middle">Copyright@2020 组卷系统-教师管理</td>
                	</tr>
				</table>	
			</td>
		</tr>
	</table>
</body>
</html>