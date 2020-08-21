<!--  addpaper.php  显示所有章节 -->
<?php require_once 'connections/conn.php';?>
<?php
MySQLi_query($conn,"set names 'utf8'");
$query_paper="select * from paper";
$Paper=MySQLi_query($conn,$query_paper) or die(mysqli_error($conn));
$row_Paper=mysqli_fetch_assoc($Paper);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>所有章节</title>
</head>
<body bgcolor="#f4f4f4">
		<table border="0" cellspacing="" cellpadding="" width="100%">
			<tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章节管理</font></td></tr>              
			<tr align="center" height="100"><td><a href="index.php">首页</a></td>
				<td><a href="allpaper.php">所有章节</a></td>
				<td><a href="all_paper.php">所有章节(分页)</a></td>
				<td><a href="addpaper.php">添加章节</a></td>
				<td><a href="editpaper.php">编辑章节信息</a></td>
				<td><a href="deletepaper.php">删除章节</a>
			</td></tr>
			<table border="0"  width="100%">
                             <tr>
                                <td colspan="6" align="center"><h2>所有章节</h2></td>
                            </tr>
                             <tr>
                                <td valign="middle" align="center"><b>本章所属的课程id</b></td>
                                <td valign="middle" align="center"><b>章名称</b></td>
                                <td valign="middle" align="center"><b>章号</b></td>
                                <td valign="middle" align="center"><b>创建时间</b></td>
                                <td valign="middle" align="center"><b>最后修改时间</b></td>
				</tr>
                             <?php do{ ?>
                            <tr valign="middle" align="center">
                                <td><?php echo $row_Paper['courseid'];?></td>
                                <td><?php echo $row_Paper['chaptername'];?></td>
                                <td><?php echo $row_Paper['chapterId'];?></td>
                                <td><?php echo $row_Course['gmt_create'];?></td>
                                <td><?php echo $row_Course['gmt_modified'];?></td>
                               </tr>
                            <?php }while ($row_Paper= mysqli_fetch_assoc($Paper));
                            ?>
			</table>
			 <tr>
            <td colspan="6"><table align="center">
                <hr>
                <tr>
                    <td align="center" valign="middle">Copyright@2020 yingzhong</td>
		</tr>
		<tr>
                    <td align="center" valign="middle">XXX Email:yingzhong@myweb.com </td>
                </tr>
		</table>
	</body>
</html>

