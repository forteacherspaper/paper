﻿<!--  deletepaper.php  删除章节 -->
<?php require_once('../connections/conn.php'); ?>
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
        <table border="0"  width="100%">
            <tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章管理</font></td></tr> 
            <tr align="center">
            <td align="center" valign="middle"><a href="allchapter.php"><font color="#1B2AE0" size="4"  >章目录</font></a></td>
            <td align="center" valign="middle"><a href="addchapter.php"><font color="#1B2AE0" size="4"  >添加章</font></a></td>
            <td align="center" valign="middle"><a href="chapterlist.php"><font color="#1B2AE0" size="4"  >编辑章信息</font></a></td>
        </tr>
            <tr><td colspan="6" align="center"><h2>删除页面</h2></td> </tr>
            
                <td  valign="middle"  align="center"><b>章序列</b></td>
                <td  valign="middle" align="center" ><b>章名称</b></td>
                <td  valign="middle"  align="center"><b>编辑删除</b></td>
            </tr>
            <?php do { ?>
                <tr valign="middle" align="center">
                  <td><?php echo $row_Chapter['number']; ?></td>
		          <td><?php echo $row_Chapter['chaptername'] ; ?></td>
		          <input type="hidden" name="id" id="id"  value="<?php echo $row_Chapter['id'] ?>">
		          <td><a href="editOr.php?id=<?php echo $row_Chapter['id'] ?>" title="editOr.php?id=<?php echo $row_Chapter['id'] ?>">编辑</a><a href="deleteOr.php?id=<?php echo $row_Chapter['id'] ?>" onclick="javascript:return confirm('您确定删除该章吗？');">删除</a>
		          </td>
                </tr>
            <?php }while ($row_Chapter=mysqli_fetch_assoc($Chapter)) ;
             ?> 
		</table>
	</body>
</html>
