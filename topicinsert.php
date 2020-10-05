
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"  charset="utf-8"/>
    <title>新增题目</title>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center">
        <tr>
            <td width="27%" height="68" rowspan="2">
                
            </td>
	<td hight="68" colspan="4">
            <font face="隶书" size="+4" color="#cccc00">新增题目</font>
	</td>
	<td width="10%" rowspan="2">&nbsp;</td>
	</tr>
	<tr>
            <td colspan="4" align="center"></td>
	</tr>
	<tr>
            <td width="15%" height="20%" align="left" valign="middle">
                <a href="index.php">首页</a>
            </td>
            <td width="15%" height="20%" align="left" valign="middle">
                <a href="alltopiclist.php">所有题目类型</a>
            </td>
            <td width="20%" height="20"><a href="alltopiclist_pg.php">所有题干</a></td>
            <td width="15%" height="20" align="left " valign="middle">
                <a href="tiku.php">插入题目</a>
            </td>		   
            <td width="20%" height="20" align="left " valign="middle">
		<a href="deletetopic.php">编辑删除题目</a>
            </td>
        </tr>
        <tr>
            <td height="169" colspan="6" align="center">
                <form id="form1" name="form1" method="post" action="insertSuccess.php">
                    <table width="100%" border="0" align="center">
                        <tr align="center"><td width="60%"></td></tr>
                        <tr>
                            <td width="40%" align="right" valign="middle">题目类型:
                            </td>
                            <td align="left" valign="middle"><select name="BookType" id="BookType">
                                            <option value="1">单选题</option>
                                            <option value="2">多选题</option>
                                            <option value="3">填空题</option>
                                            <option value="1">判断题</option>
                                            <option value="2">计算题</option>
                                            <option value="3">证明题</option>
                                            <option value="1">应用题</option>
                                            <option value="2">论证题</option>
                                    </select></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" valign="middle">题量:</td>
                            <td align="left" valign="middle"><input  type="text" id="tiliang"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" valign="middle">分值:</td>
                            <td align="left" valign="middle"><input  type="text" id="fenzhi"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" valign="middle"></td>
                                    <td align="left" valign="middle"></td>
                        </tr>
                        <tr>
                        	
                            <td colspan="2" align="center" valign="middle"><input type="button" name="button" value="重置"/><input type="submit" name="submit" value="提交"/></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="6"><table align="center">
                <hr>
                <tr>
               
                </tr>
                <tr>
                    
                </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

