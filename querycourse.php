<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"  charset="utf-8"/>
    <title>课程管理</title>
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
            <td width="15%" height="20" align="center" valign="middle">
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
                <form id="form1" name="form1" method="post" action="courseinfolist.php">
                    <table width="100%" border="0" align="center">
                        <tr align="right"><td width="60%" colspan="5">请填写需要查找的课程信息：</td></tr>
                        <tr>
                            <td width="40%" align="right" valign="middle" colspan="5">课程名称:</td>
                            <td align="left" valign="middle"><input name="CourseName" type="text" id="CourseName"></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="center" valign="middle"><input type="submit" name="submit" value="提交"/></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="6"><table align="center">
                <hr>
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

