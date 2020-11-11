<?php
//
//
//创建试卷
require '../connections/isrealuser.php';
?>
<?php require_once('../connections/conn.php');?>
<?php
//接收课程号，写入session
//判断：如果没有课程号，让选择课程
if(isset($_GET['ID']))
	$_SESSION["courseid"]=$_GET['ID'];
else if(!isset($_SESSION["courseid"]))
   header("location:../selectcourse.php");
/*if(isset($_POST['papername']))
{
    $papername=$_POST['papername'];     
    MySQLi_query($conn, "set names 'utf8'");
    
 }*/   
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>教师组卷系统</title>
</head> 
<body bgcolor="">
	<table width="100%" border="0" align="center">
		<tr>
                    <td height="68" colspan="4" align="center">
                        <font face="隶书" size="+4" color="#cccc00">创建试卷</font>
                    </td>
		<tr>
			<td height="169"  align="center">
                <form name="form1" action="createsuccess.php" method="post">
					试卷名称：<input type="text" name="papername"/><br/>
					<p><input type="submit" name="submit" value="提交"/></p>
				</form>
            </td>
        </tr>
            <tr>
			<td colspan="6"><table width="100%" border="0">
			<hr>
			<tr>
				<td align="center" valign="middle">Copyright@2006 lanmo</td>
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