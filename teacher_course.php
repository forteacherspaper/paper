<?php require_once('connections/conn.php'); ?>
<?php
mysqli_query($conn,'set names utf8');
$query_teacher_course="select * from teacher_course";
$Teacher_Course=mysqli_query($conn,$query_teacher_course) or die(mysql_error($conn));
$row_teacher_course=mysqli_fetch_assoc($Teacher_Course);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
</head>
<body bgcolor="#f4f4f4">
	<table width="100%" border="0" align="center">
		<tr>
			<td height="68" colspan="4" align="center">
				<font face="隶书" size="+4" color="#cccc00">组卷系统-教师管理</font>
			</td>
			<td width="10%" rowspan="2">&nbsp;</td>
		</tr>
		
		
            <tr><table><hr></table></tr>
		<tr>
			<td height="169" colspan="6" align="center">
				<table width="100%" border="0">
					
					<tr valign="middle">
						<td align="center">编号</td>
						<td align="center">课程号</td>
						<td align="center">教师用户名</td>
						<td align="center">创建时间</td>
						<td align="center">最后修改时间</td>
					</tr>
					
					<?php do { ?>
						<tr valign="middle" align="center">
							<td><?php echo $row_teacher_course['id']; ?></td>
							<td><?php echo $row_teacher_course['couseid'] ; ?></td>
							<td><?php echo $row_teacher_course['username']; ?></td>
							
							<td><?php echo $row_teacher_course['gmt_create']; ?></td>
							<td><?php echo $row_teacher_course['gmt_modified']; ?></td>
							
						</tr>
					<?php }while ($row_teacher_course=mysqli_fetch_assoc($Teacher_Course)) ;
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