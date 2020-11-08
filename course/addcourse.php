   <?php require'../connections/isrealuser.php';?>
   <?php
    date_default_timezone_set('prc');
    $data = date('Y-m-d H:i:s',time());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"  charset="utf-8"/>
    <title>新增课程</title>
     <style type="text/css">
        .a{
                font-family: 黑体;
                font-size: 25px;
                background-color:aliceblue;
                text-decoration: none;
            }
    </style>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center">
        
                    
        <tr>
            <td height="169" colspan="5" align="center">
                <form id="form1" name="form1" method="post" action="insertSuccess.php">
                    <table width="100%" border="0" align="center">
                        <tr align="right"><td width="40%" colspan="5" class="a">插入课程</td></tr>
                        
                        <tr>
                            <td width="40%" align="right" valign="middle" colspan="5" class="a">课程名称:</td>
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
                    <td align="center" valign="middle">Copyright@2020 组卷系统—教师管理</td>
		</tr>
                </table>
            </td>
        </tr>
    </table>
</body>

