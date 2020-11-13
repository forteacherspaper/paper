<?php
//
//
//创建试卷
require '../connections/isrealuser.php';
?>
<?php require_once('../connections/conn.php');?>
<?php require'../connections/course.php';?>
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
	<title>创建试卷</title>
	<style type="text/css">
       .a{
                font-family: 黑体;
                font-size: 16px;
                background-color:aliceblue;
                text-decoration: none;
                background-color: #ced1f2;
            }
            body{
                background: aliceblue;
                text-decoration: none;
            }
             a:link{
                 text-decoration: none;
                 color:#000000;
            
            }
            a:visited{
                color:#000000;
             }
             a:hover{
                color:#000000;
             }
             a:active{
                color:#000000;
             }
    </style>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
        
        <tr>
            <td></td>
            <p align="center"><td colspan="3" align="center">
                <font face="隶书" size="+3" color="#000000">组卷系统-创建试卷</font>
            </td></p>
            <td><div>
            <p align="right"><font>
                 <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="../logout.php">【退出】</a><br/>
                <?php
                echo "当前课程：".$coursename;
                ?>
                </p>
            </div></td>
        </tr>
        
       <tr>
            <td width="15%" height="40px" align="center" valign="middle" class="a">
                <a href="../index.php">首页</a>
            </td>
            <td width="15%" height="40px" class="a"><a href="../teacher/teachermanage.php">教师管理</a></td>
            <td width="15%" height="40px" class="a"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="40px" class="a"><a href="../chapter/chapterlist.php">章节管理</a></td>
            <td width="15%" height="40px" class="a">
                <a href="../topic/topicmanage.php">题目管理</a>
            </td>
            <td width="15%" height="40px"  class="a">
                 <a href="paperlist.php">组卷系统</a>
            </td>
        </tr></table>
<table width="100%" border="0" align="center">
       <tr><td><br><br></td></tr>
        <tr>
            <td height="169"  align="center">
                <form name="form1" action="createsuccess.php" method="post">
                    试卷名称：<input type="text" name="papername"/><br/>
                    <p><input type="submit" name="submit" value="提交"/></p>
                </form>
            </td>
        </tr>
    </table>
	<table width="100%" border="0">
		<tr><td><br><br><br></td></tr>
                   <tr><td><hr></td></tr>
                    <tr>
                         <td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table>
</body>
</html>