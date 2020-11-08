<!--  sectionlist.php  编辑章节 -->
<?php require_once('../connections/conn.php'); ?>
<?php
if(!isset($_SESSION["chapterid"]))
     header("location:../addchapter.php");//判断是否选择章节
else
    $chapterid=$_SESSION["chapterid"];
date_default_timezone_set('prc');
$data = date('Y-m-d H:i:s',time());
date_default_timezone_set('prc');
$data = date('Y-m-d H:i:s',time());

mysqli_query($conn,'set names utf8');
$query_section="select * from section";
$section=mysqli_query($conn,$query_section) or die(mysqli_error($conn));
$row_section=mysqli_fetch_assoc($section);//取出一行数据的关联数组（索引数组）
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>编辑小节页面</title>
</head>
<body bgcolor="#f4f4f4">
<table border="0"  width="100%">
	<tr><td align="center" colspan="5" ><font color="#1B2AE0" size="7"  >小节管理</font></td></tr>              
        <tr><table border="0"  width="100%">
            <tr><td align="center" colspan="5" ><font   size="5"  >编辑节页面</font></td><br></tr>  
            <tr align="center">  <td height="50" ><a href="allsection.php">所有小节</a></td>
		<td><a href="addsection.php">添加小节</a></td>
		<td><a href="sectionlist.php">编辑小节信息</a></td>
            <tr>
                <td  valign="middle"  align="center"><b>节序号</b></td>
                <td  valign="middle" align="center" ><b>节名称</b></td>
                <td  valign="middle"  align="center"><b>编辑删除</b></td>
            </tr>
            <?php do { ?>
            <tr valign="middle" align="center">
                <td><?php echo $row_section['number']; ?></td>
                <td><?php echo $row_section['sectionname'] ; ?></a></td>
		<input type="hidden" name="id" id="id" value="<?php echo $row_section['id'] ?>">
		<td><a href="editsec.php?id=<?php echo $row_section['id'] ?>" title="editsec.php?id=<?php echo $row_section['id'] ?>">编辑</a>
                    <a href="deletesec.php?id=<?php echo $row_section['id'] ?>" title="deletesec.php?id=<?php echo $row_section['id'] ?>" onclick="javascript:return confirm('您确定删除该小节吗？');" >删除</a>
		</td>
            </tr>
            <?php }while ($row_section=mysqli_fetch_assoc($section)) ;
            ?>
	</table>  
        </table>
    </body>
</html>
