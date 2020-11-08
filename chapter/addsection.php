<!--  addsection.php  添加节 -->
 <?php require'../connections/isrealuser.php';?>
<?php
   /*  if(!isset($_SESSION["courseid"]))
        header("location:../selectcourse.php");//判断是否选择课程
    else
        $courseid=$_SESSION["courseid"];*/
    if(isset($_GET['chapterid']))
    {
        $chapterid=$_GET['chapterid'];
    }else
    {
        header("location:chapterlist.php");//判断是否选择课程
    }
    date_default_timezone_set('prc');
    $data = date('Y-m-d H:i:s',time());?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>新增章节</title>
</head>
<body bgcolor="#f4f4f4">
    <table border="0" width="100%">
	<tr height="100">
            <td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >小节管理</font></td></tr>              
            <td align="center" valign="middle"><a href="allsection.php">小节目录</a></td>
             <td align="center" valign="middle"><a href="addsection.php">添加小节</a></td>
            <td align="center" valign="middle"><a href="sectionlist.php">编辑小节信息</a></td>
           
        </tr>
        <tr height="50"><td height="169" colspan="6" align="center">
                <form id="form1" name="form1" method="post" action="insertsection.php">
            <table border="0"  width="100%">
                <tr><td width="50%" align="right" valign="middle" colspan="3" >
                    <font size="5" color="darkolivegreen ">添加小节</font><br></td>
                </tr>
                <tr height="50"><td align="right" valign="middle" colspan="3">节号:</td>
                    <td align="left" valign="middle" colspan="3"><input name="number" type="text" id="number"></td>
		</tr>
		<tr height="50"><td align="right" valign="middle" colspan="3">小节名称:</td>
                    <td align="left" valign="middle" colspan="3"><input name="sectionname" type="text" id="sectionname"></td>
		</tr>
                <tr><td colspan="6" align="center" valign="middle">
                    <input type="checkbox" name="lianxu" checked="checked" value="yes" action="insertsection.php">连续添加</td>
                </tr>  

                <tr><td colspan="6" align="center" valign="middle">
                    <input type="submit" name="submit" value="提交"/></td>
                </tr>
            </table>
            <input type="hidden" name="chapterid" value="<?php echo($chapterid); ?>">
            </form>
                </td>
          </tr>
        </table>
</body>
</html>

