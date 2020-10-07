<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>查询教师</title>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center">
	   <tr>
            <td height="68" colspan="4" align="center">
                <font face="隶书" size="+4" color="#cccc00">组卷系统-教师管理</font>
            </td>
            
        </tr>
        
        <tr>
            <td width="15%" height="20%" align="left" valign="middle">
                <a href="index.php">首页</a>
            </td>
            <td width="15%" height="20%"><a href="">课程管理</a></td>
            <td width="15%" height="20%"><a href="">课程章节管理</a></td>
            <td width="15%" height="20%"><a href="">题目管理</a></td>
            <td width="15%" height="20%"><a href="teachermanage.php">教师管理</a></td>
            <td width="20%" height="20%" align="left" valign="middle">
                <a href="">组卷系统</a>
            </td>
        </tr>
        <tr><table><hr></table></tr>
        <tr>
			<td height="169" colspan="6" align="center">
                <form id="forml" name="forml" method="post" action="querrysuccess.php">
                	<table width="100%" border="0" align="center">
	                    <tr align="right"><td width="60%" colspan="5">请填写需要查找的老师姓名：</td></tr>
                        <tr>
                            <td width="40%" align="right" valign="middle" colspan="5">老师姓名:</td>
                            <td align="left" valign="middle"><input name="Name" type="text" id="Name"></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="center" valign="middle"><input type="submit" name="submit" value="提交"/></td>
                        </tr>
                	</table>
                </form>
            </td>
        </tr>
        <tr>
			<td colspan="6">
				<table width="100%" border="0">
					<hr>
					<tr>
                    	<td align="center" valign="middle">Copyright@2020 组卷系统-教师管理</td>
                	</tr>
				</table>	
			</td>
		</tr>
    </table>
</body>
</html>
