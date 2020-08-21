<!--  addpaper.php  添加章节 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>新增章节</title>
</head>
<body bgcolor="#f4f4f4">
		<table border="0" cellspacing="" cellpadding="" width="100%">
			<tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章节管理</font></td></tr>              
			  <tr align="center" height="100"><td><a href="querypaper.php.php">首页</a></td>
				<td align="center" valign="middle"><a href="allpaper.php">所有章节</a></td>
				<td align="center" valign="middle"><a href="all_paper.php">所有章节(分页)</a></td>
				<td align="center" valign="middle"><a href="addpaper.php">添加章节</a></td>
				<td align="center" valign="middle"><a href="editpaper.php">编辑章节信息</a></td>
				<td align="center" valign="middle"><a href="deletepaper.php">删除章节</a>
			</td></tr>
                        <tr> 
                            <td height="169" colspan="6" align="center">
                                <form id="form1" name="form1" method="post" action="InsertSuccessOr.php">
                                    <table border="0"  width="100%">
                            <tr><td width="50%" align="right" valign="middle" colspan="3" ><font size="5" color="darkolivegreen ">插入章节</font></td>
                            </tr>
                            <tr><td width="50%" align="right" valign="middle" colspan="3">本章所属的课程id:</td>
				<td  width="73%" valign="middle" colspan="3"><input name="courseId" type="text" id="courseId"></td>	
			    </tr>
			    <tr><td align="right" valign="middle" colspan="3">章名称:</td>
				<td align="left" valign="middle" colspan="3"><input name="chaptername" type="text" id="chaptername"></td>
			    </tr>
			    <tr><td align="right" valign="middle" colspan="3">章号:</td>
				<td align="left" valign="middle" colspan="3"><input name="chapterId" type="text" id="chapterId"></td>
			    </tr>
                            <tr><td  align="right" valign="middle" colspan="3">创建时间:</td>
                                <td align="left" valign="middle"><input name="Gmt_Create" type="text" id="Gmt_Create" ></td>
                                </tr>
                            <tr><td align="right" valign="middle" colspan="3">最后修改时间:</td>
                                 <td align="left" valign="middle"><input name="Gmt_Modified" type="text" id="Gmt_Modified"></td>
                            </tr>
                            <tr><td colspan="6" align="center" valign="middle"><input type="submit" name="submit" value="提交"/></td>
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

