<?php require_once('connections/conn.php'); ?>
<?php
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
}else{
    header('location: login.php'); 
}
mysqli_query($conn,'set names utf8');
$query_course="select * from course";
$course=mysqli_query($conn,$query_course) or die(mysql_error($conn));
$row_course=mysqli_fetch_assoc($course);//取出一行数据的关联数组（索引数组）
$query_teacher="select name from teacher where username='$username'";
$teacher=mysqli_query($conn,$query_teacher) or die(mysql_error($conn));
$row_teacher=mysqli_fetch_assoc($teacher);
//$_SESSION['id']=$courseid;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>首页-教师组卷系统</title>
        <style type="text/css">
            * {
                margin: 0px;
                padding: 0px;
            }
            #lunbotu {
                width: 1290px;
                height: 496px;
                overflow: hidden;
                position: relative;
                margin: 0px auto;
                position: relative;
            }

            #banner {
                height: 496px;
                width: 6130px;
                position: absolute;
                transition: 2s;
                left: 0px;
            }
            #banner img {
                float: left;
            }
            #biao {
                position: absolute;
                top: 430px;
                left: 43%;
            }
            #biao_1 {
                height: 20px;
                width: 20px;
                border: 1px solid #000;
                z-index: 10;
                float: left;
                list-style: none;
                border-radius: 50%;
                margin-left: 20px;
                text-align: center;
                cursor:pointer;
            }
            
           #head{
		background-color: aliceblue;
		height: 20px;
            }
            #foot{
		height:30px;
		background-color:powderblue;
		margin: 0px 0px;
		font-size:30;
            }
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
             #d{
                position: fixed;
                bottom: 0px;
              text-align: center;
             }
	</style>
</head>
<body bgcolor="white">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="38" colspan="6" align="center">
               <p align="center"> <font face="隶书" size="+3" color="#000000" >组卷系统-请选择课程</font>
            </p></td>
        </tr>
       <tr><td><br></td></tr>
         <div id="head">
            <p align="right"><font>
                <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="logout.php">【退出】</a></font></p>
            </div>
        <tr align="center">
            <td width="15%" height="40px" align="center" valign="middle" class="a">
                <a href="index.php">首页</a>
            </td>
            <td width="15%" height="40px"  class="a">
                <a href="teacher/teachermanage.php">教师管理</a>
            </td>
            <td width="15%" height="40px" class="a"><a href="course/courselist.php">课程管理</a></td>
            <td width="15%" height="40px" class="a"><a href="chapter/chapterlist.php">章节管理</a></td>
             <td width="15%" height="40px" class="a"><a href="topic/topicmanage.php">题目管理</a></td>
            
            <td width="15%" height="40px"  class="a">
                <a href="paper/paperlist.php">组卷系统</a>
            </td>
        </tr>
        <tr></table>
	<table width="100%" border="0" align="center">
        <tr><td><br><br></td></tr>
<!--导航栏-->
        <!-- <tr> 
                      <td align="center" colspan="6">欢迎 <?php echo $row_teacher['name'] ?> 老师登录组卷系统！</td>
	     </tr> -->   
            <tr>
                
                <td></td>
                <td></td>
                <td width="40%" colspan="5"><a href="course/addcourse.php">创建课程</td>
            </tr>
            <tr>
		<td height="169" colspan="5" align="center">
                    <table width="100%" border="0">
			<tr valign="middle" >
                            <td align="center"><b>序号</b></td>
                            <td align="center"><b>课程名称</b></td>
                            <td align="center"><b>管理员</b></td>
                            
			</tr>
			<?php do { ?>
                <tr valign="middle" align="center">
				<td><?php echo $row_course['id']; ?></td>
				<td><a href="recordcourse.php?id=<?php echo $row_course['id'] ?>" title="选择课程，开始组卷"><?php echo $row_course['coursename'] ; ?></a></td>
				<td><?php echo $row_course['manager']; ?></td></tr>
			<?php }while ($row_course=mysqli_fetch_assoc($course)) ;?>
		    </table>
		</td>
	</tr>
	<tr>
            <td colspan="6">
                <table width="100%" border="0"><div id="d"><hr>
                    
                        <p align="center"><font>版权所有&copy;郑州师范学院</font></p>
                    </div>
		</table>	
			</td>
		</tr>
	</table>
</body>
</html>
