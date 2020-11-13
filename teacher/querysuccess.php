<?php require_once('../connections/conn.php'); ?>
<?php require'../connections/isrealuser.php';?>
<?php
    if($_SESSION['username']!="admin")
    {
       header("location:../login.php");
    }
?>
<?php
    //error_reporting(E_All & ~E_DEPRECATED);
	 $colname_TeacherInfo="-1";
	 if(isset($_POST['Name'])){
		 $colname_TeacherInfo=$_POST['Name'];
	 }    
	 //sprintf函数生成字符串
	 $query_TeacherInfo=sprintf("select * from teacher where name='%s'",$colname_TeacherInfo);
	 mysqli_query($conn,"set names 'utf8'");//设置字符编码格式
	 $teacherinfo=mysqli_query($conn,$query_TeacherInfo) or die(mysqli_error($conn));//查询数据
	 //mysqli_fetch_assoc从结果集中取出一行数据，成为相关数组，键名是字段名，值是数据
	 $row_teacherinfo=mysqli_fetch_assoc($teacherinfo);//

	$query_teacher=sprintf("select id from teacher where name='%s'",$colname_TeacherInfo);
	$Teacher=mysqli_query($conn,$query_teacher) or die(mysql_error($conn));
	$row_teacher=mysqli_fetch_assoc($Teacher);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>查询教师</title>
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
            <p align="center"><td colspan="4" align="center">
                <font face="隶书" size="+3" color="#000000">组卷系统-教师管理</font>
            </td></p>
            <td><div>
            <p align="right"><font>
                <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="../logout.php">【退出】</a></font><br/>
               
                </p>
            </div></td>
        </tr>
        
       <tr>
            <td width="15%" height="40px" align="center" class="a"><a href="../index.php">首页</a> </td>
            <td width="15%" height="40px" class="a" align="center"><a href="teachermanage.php">教师管理</a></td>
            <td width="15%" height="40px" class="a"align="center"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="40px" class="a" align="center"><a href="../chapter/chapterlist.php">章节管理</a></td>
            <td width="15%" height="40px" class="a" align="center"><a href="../topic/topicmanage.php">题目管理</a></td>
            <td width="15%" height="40px"  class="a" align="center"> <a href="../paper/paperlist.php">组卷系统</a></td>
        </tr>
        <tr><table><hr></table></tr>
        <tr>
			<td height="169" colspan="5" align="center">
				<table width="100%" border="0" align="center">
					<tr valign="middle">
		                <td align="center"><b>编号</b></td>
		                <td align="center"><b>姓名</b></td>
		                <td align="center"><b>用户名</b></td>
		                <td align="center"><b>密码</b></td>
		                <td align="center"><b>邮箱</b></td>
		                <td align="center"><b>创建时间</b></td>
		                <td align="center"><b>最后修改时间</b></td>
					<?php do{ ?>
							<tr>
					            <td width="10%" align="center">
									<?php echo $row_teacherinfo['id'];?>
								</td>
					            <td width="10%" align="center">
									<?php echo $row_teacherinfo['name'];?>
								</td>
					            <td width="10%" align="center">
									<?php echo $row_teacherinfo['username'];?>
								</td>
								<td width="10%" align="center">
									<?php echo $row_teacherinfo['password'];?>
								</td>
								<td width="10%" align="center">
									<?php echo $row_teacherinfo['email'];?>
								</td>
					            <td width="10%" align="center">
									<?php echo $row_teacherinfo['gmt_create'];?>
								</td>
					            <td width="10%" align="center">
									<?php echo $row_teacherinfo['gmt_modified'];?>
								</td>
							</tr>
					<?php }while ($row_teacherinfo=mysqli_fetch_assoc($teacherinfo));?>
	            </table>
			</td>
		</tr>
        <tr>
			<td colspan="6">
				<table width="100%" border="0">
					<hr>
					<tr>
                    	<td align="center" valign="middle">Copyright@2020 组卷系统-教师管理</td>
                	</tr>
				</table>	
			</td>
		</tr>
    </table>
</body>
</html>
