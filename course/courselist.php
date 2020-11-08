<?php require_once('../connections/conn.php'); ?>
<?php
mysqli_query($conn,'set names utf8');
$query_course="select * from course";
$course=mysqli_query($conn,$query_course) or die(mysql_error($conn));
$row_course=mysqli_fetch_assoc($course);//取出一行数据的关联数组（索引数组）
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
            #mune{
		margin:0px 0;
                height: 85px;
		background-color:aliceblue;
		text-decoration: none;
            }
            #mune ul{
		list-style: none;
            }
            #mune ul li{
		float: left;
		margin: 20px 50px;
		font-family: 黑体;
		font-size: 22px;
		color: white;
            }
            #foot{
		height:30px;
		background-color:powderblue;
		margin: 0px 0px;
		font-size:30;
            }
	</style>
</head>
<body bgcolor="white">
	<table width="100%" border="0" align="center">
            <div id="head">
			<p align="right"><font color="white"><a class="login" href="../login.php">【登录】</a>
            <a class="reg"  target="_blank" href="">【注册】</a></font></p>
            </div>
<!--导航栏-->
        <div id="mune">
            <ul>
                <li><a href="../index.php">网站首页</a></li>
                <li><a href="../teacher/teachermanage.php">教师管理</a></li>
		<li><a href="../course/courselist.php">课程管理</a></li>
		<li><a href="../chapter/chapterlist.php">章节管理</a></li>
		<li><a href="../topic/topicmanage.php">题目管理</a></li>
		<li><a href="../paper/index.php">组卷系统</a></li>
            </ul>    
	</div>    
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td width="27%" height="20" align="center" valign="middle">
                <a href="addcourse.php">插入课程</a>
                </td>
            <tr>
		<td height="169" colspan="5" align="center">
                    <table width="100%" border="0">
			<tr valign="middle">
                            <td align="center"><b>序号</b></td>
                            <td align="center"><b>课程名称</b></td>
                            <td align="center"><b>管理员</b></td>
                            <td align="center"><b>编辑删除</b></td>
			</tr>
			<?php do { ?>
                        <tr valign="middle" align="center">
				<td><?php echo $row_course['id']; ?></td>
				<td><?php echo $row_course['coursename'] ; ?></td>
				<td><?php echo $row_course['manager']; ?></td>
				<input type="hidden" name="Id" id="Id" value="<?php echo $row_course['id'] ?>">
				<td>
                                <a href="edit.php?Id=<?php echo $row_course['id'] ?>" title="edit.php?Id=<?php echo $row_course['id'] ?>">编辑</a>
                                <a href="delete.php?Id=<?php echo $row_course['id'] ?>" onclick="javascript:return confirm('您确定删除该课程吗？');">删除</a>
				</td>
                            </tr>
				<?php }while ($row_course=mysqli_fetch_assoc($course)) ;
				?>
			</table>
		</td>
	</tr>
	<tr>
            <td colspan="6">
                <table width="100%" border="0"><hr>
                    <div id="foot">
                        <p align="center"><font color="white">版权所有&copy;郑州师范学院</font></p>
                    </div>
		</table>	
			</td>
		</tr>
	</table>
</body>
</html>