<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>首页-教师组卷系统</title>
</head>
<body bgcolor="#f4f4f4">
	<table width="100%" height="100%" border="0" align="center" cellspacing="35" >
		<thead>
		<tr>
			<td width="68" height="98" rowspan="2" colspan="2">
                            <img src="images/logo.jpg" height="98" width="128"/>
			</td>
			<td height="68" colspan="4">
				<font face="华文行楷" size="+4" color="darkslategray">欢迎来到教师组卷系统</font>
			</td>
			<td width="10%" rowspan="2">&nbsp;</td>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td width="15%" height="20" align="left" valign="middle">
				<a href="index.php">首页</a>
			</td>
			<td width="15%" height="20" align="left" valign="middle">
				<a href="teachermanage.php">教师管理</a>
			</td>
			<td width="20%" height="20">
				<a href="coursemanage.php">课程管理</a>
			</td>
			<td width="15%" height="20" align="left" valign="middle">
				<a href="course_chapter.php">课程章节管理</a>
			</td>
			<td width="20%" height="20" align="left" valign="middle">
				<a href="topicmanage.php">题目管理</a>
			</td>
			<td width="20%" height="20" align="left" valign="middle">
				<a href="zujuan.php">组卷系统</a>
			</td>
			<td width="15%" height="20">&nbsp;</td>
		</tr>
	
		<tr>
			<td height="209" colspan="6" align="center">
                            <form id="forml" name="forml" method="post" action="teachermanage.php">
                                请选择您要查询的教师信息：
                                <select name="username" id="username">
                                    <option value="1">张建国</option>
                                    <option value="2">吴美娜</option> 
                                    <option value="3">廖胜斌</option>
                                    <option value="4">李艺彤</option>
                                    <option value="3">杨开朗</option>
                                    <option value="3">王华峰</option>
                                    <option value="3">邢可</option>
                                    <option value="3">赵海波</option>
                                    <option value="3">沈桂芳</option>
                                    <option value="3">段荣浩</option>
                                </select>
                                <p><input type="submit" name="submit" value="提交"/></p>
                            </form>
                        </td>
                </tr>
	</tbody>
	<tfoot>
                <tr>
			<td colspan="6">
			<table width="100%" border="0">
			<hr>
			<tr>
				<td align="center" valign="middle">Copyright@DCY2019038</td>
			</tr>
			</table>
			</td>
		</tr>
	</tfoot>	
</body>
</html>