<!--  addsection.php  添加节 -->
 <?php require'../connections/isrealuser.php';?>
 <?php require'../connections/course.php';//判断是否用户登陆？ 
?>
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
<style type="text/css">
        .a{
                font-family: 黑体;
                font-size: 16px;
                background-color:aliceblue;
                text-decoration: none;
            }
            body{
                background: aliceblue;
                text-decoration: none;
            }
            a:link{
                 text-decoration: none;
            }
            
    </style>
</head>
<body bgcolor="#f4f4f4">
    <table border="0" width="100%">
     
    <table width="100%" border="0" align="center">
        
        <tr>
            <p align="center"><td colspan="5" align="center">
                <font face="隶书" size="+3" color="#000000">组卷系统-小节管理</font></td><td align="right" width="50px" bgcolor=""><font>
                <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="../logout.php">【退出】</a><br/>
                <?php
                echo "当前课程：".$coursename;
                ?>
                </font>
            </td></p>
        </tr>
             <tr>
            <td width="15%" height="20%" align="center" valign="middle">
                <a href="../index.php" class="a">首页</a>
            </td>
            <td width="15%" height="20%" class="a"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="20%" class="a"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
            <td width="15%" height="20%" class="a"><a href="../topic/topicmanage.php">题目管理</a></td>
            <td width="15%" height="20%" class="a"><a href="../teacher/teachermanage.php">教师管理</a></td>
            <td width="20%" height="20%"  class="a">
                <a href="../paper/index.php">组卷系统</a>
            </td>
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
         <table width="100%" border="0">
                    <hr>
                    <tr>
                        <td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table>    
</body>
</html>

