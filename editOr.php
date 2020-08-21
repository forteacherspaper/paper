<?php require_once 'connections/conn.php';?>
<?php
if(isset($_GET['courseId']))
    $id=$_GET['courseId'];
else{
      header('Location:editpaper.php');//页面重定向
}
    MySQLi_query($conn, "set names 'utf8'");
    $query_Chapter="select * from chapter where id=".$id;
    $Chapter=MySQLi_query($conn,$query_Chapter) or die(mysqli_error($conn));
    $row_Chapter=mysqli_fetch_assoc($Chapter) or header("Location:editpaper.php");
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>编辑章节</title>
</head>
<body bgcolor="#f4f4f4">
    <table border="0" cellspacing="" cellpadding="" width="100%">
	<tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章节管理</font></td></tr>              
	<tr align="center" height="100"><td><a href="index.php">首页</a></td>
		<td align="center" valign="middle"><a href="allpaper.php">所有章节</a></td>
		<td align="center" valign="middle"><a href="all_paper.php">所有章节(分页)</a></td>
		<td align="center" valign="middle"><a href="addpaper.php">添加章节</a></td>
		<td align="center" valign="middle"><a href="editpaper.php">编辑章节信息</a></td>
		<td align="center" valign="middle"><a href="deletepaper.php">删除章节</a></td>
        </tr>
        <tr><td height="169" colspan="6" align="center">
                 <form id="form1" name="form1" method="post" action="updatepaper.php">
                    <table border="0"  width="100%">
                        <tr><td width="50%" align="right" valign="middle" colspan="3" >
                            <font size="5" color="darkolivegreen ">插入章节</font></td>
                        </tr>
                        <tr><td width="50%" align="right" valign="middle" colspan="3">本章所属的课程id:</td>
                            <td  width="73%" valign="middle" colspan="3"><input name="courseId" type="text" id="courseId" value="<?php echo $row_Chapter['courseid'];?>" title="<?php echo $courseid;?>" /></td>	
			</tr>
			<tr><td align="right" valign="middle" colspan="3">章名称:</td>
                            <td align="left" valign="middle" colspan="3"><input name="chaptername" type="text" id="chaptername" value="<?php echo $row_Chapter['chaptername']; ?>"  title="<?php echo $chaptername;?>" /></td>
			</tr>
			<tr><td align="right" valign="middle" colspan="3">章号:</td>
                            <td align="left" valign="middle" colspan="3"><input name="chapterId" type="text" id="chapterId"value="<?php echo $row_Chapter['chapterid'];?>" title="<?php echo $Chapterid;?>" /></td>
			</tr>
                        <tr>
                            <td  align="right" valign="middle" colspan="3">创建时间:</td>
                            <td align="left" valign="middle"><input name="Gmt_Create" type="text" id="Gmt_Create" value="<?php echo $row_Course['gmt_create'];?>" / ></td>
                            </tr>
                        <tr>
                             <td align="right" valign="middle" colspan="3">最后修改时间:</td>
                             <td align="left" valign="middle"><input name="Gmt_Modified" type="text" id="Gmt_Modified" value="<?php echo $row_Course['gmt_modified'];?>"></td>
                        </tr>
			<tr>
                            <td colspan="6" align="center" valign="middle"><input type="submit" name="submit" value="提交"/></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
	<td colspan="6">
            	<table align="center">
                <hr>
                <tr>
                    <td align="center" valign="middle">Copyright@2020 lanmo</td>
		</tr>
		<tr>
                    <td align="center" valign="middle">XXX Email:lanmo@myweb.com </td>
                </tr>
                </table>
            </td>
    </table>
</body>
</html>
