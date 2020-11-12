<?php require_once '../connections/conn.php';?>
<?php require'../connections/isrealuser.php';?>
<?php require'../connections/course.php';?>
<?php
if(isset($_GET['Id']))
    $id=$_GET['Id'];
else{
      header('Location:editcourse.php');//页面重定向
}
    MySQLi_query($conn, "set names 'utf8'");
    $query_course="select * from course where id=".$id;
    $course=MySQLi_query($conn,$query_course) or die(mysqli_error($conn));
    $row_course=mysqli_fetch_assoc($course) or header("Location:editcourse.php");
 ?>
<?php
    date_default_timezone_set('prc');
    $data = date('Y-m-d H:i:s',time());
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>编辑课程</title>
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
                <font face="隶书" size="+3" color="#000000">组卷系统-课程管理</font>
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
            <td width="15%" height="40px" class="a"><a href="courselist.php">课程管理</a></td>
            <td width="15%" height="40px" class="a"><a href="../chapter/chapterlist.php">章节管理</a></td>
            <td width="15%" height="40px" class="a">
                <a href="../topic/topicmanage.php">题目管理</a>
            </td>
            <td width="15%" height="40px"  class="a">
                <a href="../paper/index.php">组卷系统</a>
            </td>
        </tr>
             
            <tr>        
		<td height="169" colspan="6" align="center">
		    <form id="form1" name="form1" method="post" action="updatecourse.php">
		        <table width="100%" border="0" align="center">
                            <tr align="center">
		          	<td colspan="2" align="center">课程信息</td>
                            </tr>
		
                <tr>
                    <td align="right">课程名称</td>
		    <td><input name="CourseName" type="text" id="CourseName" value="<?php echo $row_course['coursename'];?>" title="<?php echo $id;?>" /></td>
		</tr>
		
            <tr>
                <td colspan="4" align="center">
                    <input type="hidden" name="Id" id="Id" value="<?php echo $row_course['id'];?>">
                    <input type="submit" name="submit" value="提交"/>
		</td>
            </tr>
        </table>
	</form>
    <table width="100%" border="0">
                    <hr>
                    <tr>
                        <td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table> 
	</body>
</html>
 
