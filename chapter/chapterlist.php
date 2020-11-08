<!--  chapterlist.php  编辑章节列表 -->
<?php require_once('../connections/conn.php'); //连接数据库?>
<?php require'../connections/isrealuser.php';//判断是否用户登陆？?>
<?php
    if(!isset($_SESSION["courseid"]))
        header("location:../selectcourse.php");//判断是否选择课程
    else
        $courseid=$_SESSION["courseid"];
mysqli_query($conn,'set names utf8');
$query_Chapter="select * from chapter where courseid=$courseid";
$Chapter=mysqli_query($conn,$query_Chapter) or die(mysqli_error($conn));
$row_Chapter=mysqli_fetch_assoc($Chapter);//取出一行数据的关联数组（索引数组）
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>编辑章节页面</title>
</head>
<body bgcolor="#f4f4f4">
<table border="0"  width="100%">
    <tr align="center"><td colspan="3"align="left" >
                <a href="../index.php">返回网站首页</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="../course/courselist">返回课程</a></td></tr>
	<tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章管理</font></td></tr>  
        <tr height="70">
            <td align="center" valign="middle"><a href="allchapter.php"><font color="#1B2AE0" size="4"  >章目录</font></a></td>
            <td align="center" valign="middle"><a href="addchapter.php"><font color="#1B2AE0" size="4"  >添加章</font></a></td>
            <td align="center" valign="middle"><a href="chapterlist.php"><font color="#1B2AE0" size="4"  >编辑章信息</font></a></td>
        </tr>
            <tr>
                <td  valign="middle"  align="center"><b>章号</b></td>
                <td  valign="middle" align="center" ><b>章名称</b></td>
                <td  valign="middle"  align="center"><b>编辑</b></td>
            </tr>
            <?php do { ?>
            <tr valign="middle" align="center">
                <td><?php echo $row_Chapter['number']; ?></td>
                <td><a href="allsection.php"><?php echo $row_Chapter['chaptername'] ; ?></a></td>
		        <input type="hidden" name="id" id="id" value="<?php echo $row_Chapter['id'] ?>">
		        <td>
                    <a href="editOr.php?id=<?php echo $row_Chapter['id'] ?>" title="editOr.php?id=<?php echo $row_Chapter['id'] ?>">编辑&nbsp;&nbsp;&nbsp;
                    </a>
                    <a href="deleteOr.php?id=<?php echo $row_Chapter['id'] ?>" title="deleteOr.php?id=<?php echo $row_Chapter['id'] ?>" onclick="javascript:return confirm('您确定删除该章吗？');" >删除
                        &nbsp;&nbsp;&nbsp;
                    </a>
                    <a href="addsection.php?chapterid=<?php echo $row_Chapter['id'] ?>" title="addsection.php?chapterid=<?php echo $row_Chapter['id'] ?>">添加节</a>&nbsp;&nbsp;&nbsp;
                    <a href="allsection.php?chapterid=<?php echo $row_Chapter['id'] ?>" title="allsection.php?chapterid=<?php echo $row_Chapter['id'] ?>">显示节序列</a></td>

            </tr>
            <?php }while ($row_Chapter=mysqli_fetch_assoc($Chapter)) ;
            ?>
	</table>  
        </table>
    </body>
</html>
