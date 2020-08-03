<?php require_once('connections/conn.php'); ?>
<?php
mysqli_query($conn,'set names utf8');
$query_course="select * from course";
$Course=mysqli_query($conn,$query_course) or die(mysql_error($conn));
$row_course=mysqli_fetch_assoc($Course);//取出一行数据的关联数组（索引数组）
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>删除课程</title>
</head>
<body bgcolor="#f4f4f4">
	<table width="100%" border="0" align="center">
            <tr>
                <td hight="68" colspan="6" align="center">
                    <font face="隶书" size="+4" color="darkcyan">课程管理</font>
                </td> 
            </tr>
            <tr>
                <td width="15%" height="20%" align="center" valign="middle">
                    <a href="querycourse.php">首页</a>
		</td>
                <td width="15%" height="20%" align="center" valign="middle">
                    <a href="allcourselist.php">所有课程</a>
		</td>
                <td width="20%" height="20" align="center">
                    <a href="allcourselist_pg.php">所有课程（分页）</a>
                </td>
                <td width="15%" height="20" align="center " valign="middle">
                    <a href="addcourse.php">插入课程</a>
                </td>
                <td width="15%" height="20" align="center" valign="middle">
                    <a href="editcourse.php">编辑课程信息</a>
                </td>		   
                <td width="20%" height="20" align="center" valign="middle">
                    <a href="deletecourse.php">删除课程</a>
            </tr>
            <tr>
		<td height="169" colspan="5" align="center">
                    <table width="100%" border="0">
			<tr valign="middle">
                            <td align="center"><b>序号</b></td>
                            <td align="center"><b>课程名称</b></td>
                            <td align="center"><b>管理员</b></td>
                            <td align="center"><b>编辑删除</b></td>
			</tr>
			<?php do { ?>
                        <tr valign="middle" align="center">
				<td><?php echo $row_course['id']; ?></td>
				<td><?php echo $row_course['coursename'] ; ?></td>
				<td><?php echo $row_course['manager']; ?></td>
				<input type="hidden" name="Id" id="Id" value="<?php echo $row_course['id'] ?>">
				<td>
                                <a href="edit.php?Id=<?php echo $row_course['id'] ?>" title="edit.php?Id=<?php echo $row_course['id'] ?>">编辑</a>
				<a href="delete.php?Id=<?php echo $row_course['id'] ?>" title="delete.php?Id=<?php echo $row_course['id'] ?>">删除</a>
				</td>
                            </tr>
				<?php }while ($row_course=mysqli_fetch_assoc($Course)) ;
				?>
			</table>
		</td>
	</tr>
	<tr>
            <td colspan="6">
                <table width="100%" border="0"><hr>
		<tr>
                    <td align="center" valign="middle">Copyright@2020 lanmo</td>
		</tr>
		<tr>
                    <td align="center" valign="middle">XXX Email:lanmo@myweb.com </td>
                </tr>
		</table>	
			</td>
		</tr>
	</table>
</body>
</html>