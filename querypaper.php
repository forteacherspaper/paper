<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>章节管理</title>
</head>
<body bgcolor="#f4f4f4">
		<table border="0" cellspacing="" cellpadding="" width="100%">
			<tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章节管理</font></td></tr>              
			<tr align="center" height="100"><td><a href="index.php">首页</a></td>
				<td><a href="allpaper.php">所有章节</a></td>
				<td><a href="all_paper.php">所有章节(分页)</a></td>
				<td><a href="addpaper.php">添加章节</a></td>
				<td><a href="editpaper.php">编辑章节信息</a></td>
				<td><a href="deletepaper.php">删除章节</a>
			</td></tr>
                        <tr> 
                            <td height="169" colspan="6" align="center">
                                <form id="form1" name="form1" method="post" action="Chapterinfolist.php.php">
                                    <table border="0"  width="100%" align="center">
                                        <tr align="right"> <td width="50%" align="right" valign="middle" colspan="5">请填写需要查找的章节信息：</td></tr>
                                        <tr><td  width="40" align="right" valign="middle" colspan="5">章节名称：</td>
                                            <td align="left" valign="middle" ><input name="chaptername" type="text" id="chaptername"></td>
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
                                    <tr> <td align="center" valign="middle">Copyright@2020 lanmo</td> </tr>
                                    <tr> <td align="center" valign="middle">XXX Email:lanmo@myweb.com </td> </tr>
                                    </table>
                                </td>
    </table>
</body>
</html>