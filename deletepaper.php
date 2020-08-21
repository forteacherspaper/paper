<?php require_once('connections/conn.php'); ?>
<?php
mysqli_query($conn,'set names utf8');
$query_Chapter="select * from chapter";
$Chapter=mysqli_query($conn,$query_Chapter) or die(mysql_error($conn));
$row_Chapter=mysqli_fetch_assoc($Chapter);//取出一行数据的关联数组（索引数组）
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>删除章节</title>
</head>
<body bgcolor="#f4f4f4">
<table border="0" cellspacing="" cellpadding="" width="100%">
			<tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章节管理</font></td></tr>              
				 <tr align="center" height="100"><td><a href="querypaper.php.php">首页</a></td>
				<td align="center" valign="middle"><a href="allpaper.php">所有章节</a></td>
				<td align="center" valign="middle"><a href="all_paper.php">所有章节(分页)</a></td>
				<td align="center" valign="middle"><a href="addpaper.php">添加章节</a></td>
				<td align="center" valign="middle"><a href="editpaper.php">编辑章节信息</a></td>
				<td align="center" valign="middle"><a href="deletepaper.php">删除章节</a>
			</td></tr>
			<table border="0"  width="100%"><tr>
				<td  valign="middle" align="center"><b>本章所属的课程id</b></td>
                                <td  valign="middle" align="center" ><b>章名称</b></td>
                                <td  valign="middle"  align="center"><b>章号</b></td>
                                <td  valign="middle"  align="center"><b>编辑删除</b></td>
                            </tr>
                            <?php do { ?>
                        <tr valign="middle" align="center">
				<td><?php echo $row_Chapter['courseid']; ?></td>
				<td><?php echo $row_Chapter['chaptername'] ; ?></td>
				<td><?php echo $row_Chapter['chapterId']; ?></td>
				<input type="hidden" name="Id" id="Id" value="<?php echo $row_course['id'] ?>">
				<td>
                                    <a href="editOr.php.php?Id=<?php echo $row_Chapter['courseid'] ?>" title="editOr.php?Id=<?php echo $row_Chapter['courseid'] ?>">编辑</a>
                                    <a href="deleteOr.php.php?Id=<?php echo $row_Chapter['courseid'] ?>" title="deleteOr.php?Id=<?php echo $row_Chapter['courseid'] ?>">删除</a>
				</td>
                            </tr>
				<?php }while ($row_Chapter=mysqli_fetch_assoc($Chapter)) ;
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
