<!--  addpaper.php  添加章节 -->
 <?php require'../connections/isrealuser.php';?>

<?php
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
    <table border="0" width="100%">
	 
    <table width="100%" border="0" align="center">
        <tr>
            <p align="center"><td height="68" colspan="4" align="center">
                <font face="隶书" size="+5" color="#cccc00">组卷系统-章节管理</font>
            </td></p>
        </tr>
       <!-- <tr><td align="center" colspan="6" ><font color="#1B2AE0" size="6"  >章管理</font></td></tr> -->
        <tr>
            <td width="15%" height="20" align="left" valign="middle" class="a">
                <a href="../index.php">首页</a>
            </td>
            <td width="15%" height="20%" class="a"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="20%" class="a"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
             <td width="15%" height="20%" class="a"><a href="../topic/topicmanage.php">题目管理</a></td>
            <td width="15%" height="20%" align="left" valign="middle" class="a">
                <a href="../teacher/teachermanage.php">教师管理</a>
            </td>
            <td width="15%" height="20%" align="left" valign="middle" class="a">
                <a href="../paper/index.php">组卷系统</a>
            </td>
        </tr>
        </table> <br><br>  <br><br>      
            <tr align="center"><td align="left"><a href="allchapter.php"><font color="#1B2AE0" size="4"  >章目录</font></a></td><br>
            <td align="center"><a href="addchapter.php"><font color="#1B2AE0" size="4"  >添加章</font></a></td><br>
            <td align="right" ><a href="chapterlist.php"><font color="#1B2AE0" size="4"  >编辑章信息</font></a></td>
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
        <table width="100%" border="0">
                    <hr>
                    <tr>
                        <td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table>    
</body>
</html>

