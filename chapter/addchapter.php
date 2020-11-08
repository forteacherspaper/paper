<!--  addpaper.php  添加章节 -->
 <?php require'../connections/isrealuser.php';?>

<?php
        session_start();
     if(!isset($_SESSION["courseid"]))
        header("location:../selectcourse.php");//判断是否选择课程
    else
        $courseid=$_SESSION["courseid"];
    date_default_timezone_set('prc');
    $data = date('Y-m-d H:i:s',time());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>新增章节</title>
</head>
<body bgcolor="#f4f4f4">
    <table border="0" width="100%">
	<tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章管理</font></td></tr>              
            <td align="center" valign="middle"><a href="allchapter.php"><font color="#1B2AE0" size="4"  >章目录</font></a></td>
            <td align="center" valign="middle"><a href="addchapter.php"><font color="#1B2AE0" size="4"  >添加章</font></a></td>
            <td align="center" valign="middle"><a href="chapterlist.php"><font color="#1B2AE0" size="4"  >编辑章信息</font></a></td>
        </tr>
        <tr><td height="169" colspan="6" align="center">
                <form id="form1" name="form1" method="post" action="Insertchapter.php">
            <table border="0"  width="100%">
                <tr><td width="50%" align="right" valign="middle" colspan="3" >
                    <font size="5" color="darkolivegreen ">添加章</font><br></td>
                </tr>
                <tr><td align="right" valign="middle" colspan="3">章号:</td>
                    <td align="left" valign="middle" colspan="3"><input name="number" type="text" id="number"></td>
        </tr>
		<tr><td align="right" valign="middle" colspan="3">章名称:</td>
                    <td align="left" valign="middle" colspan="3"><input name="chaptername" type="text" id="chaptername"></td>
		</tr>
		
                <tr><td colspan="6" align="center" valign="middle">
                    <input type="submit" name="submit" value="提交"/></td>
                </tr>
            </table>
            </form>
                </td>
          </tr>
        </table>
</body>
</html>

