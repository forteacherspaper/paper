<?php require_once('../connections/conn.php'); ?>
<?php require'../connections/course.php';?>
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
                 <a href="../paper/paperlist.php">组卷系统</a>
            </td>
        </tr>
            <tr>
		<td height="169"  align="center">
                    <table width="100%" border="0">
			<tr valign="middle">
                            <td align="center"><b>课程名称</b></td>
			</tr>
			<?php do { ?>
                        <tr valign="middle" align="center">
				<td><?php echo $row_course['coursename'] ; ?></td>
				<input type="hidden" name="Id" id="Id" value="<?php echo $row_course['id'] ?>">
				<td>
				<a href="edit.php?Id=<?php echo $row_course['id'] ?>" title="edit.php?Id=<?php echo $row_course['id'] ?>">编辑</a>
                                <a href="delete.php?Id=<?php echo $row_course['id'] ?>" title="delete.php?Id=<?php echo $row_course['id'] ?>">删除</a>
				</td>
                            </tr>
				<?php }while ($row_course=mysqli_fetch_assoc($course)) ;
				?>
			</table>
		</td>
	</tr>
	<tr>
            <td colspan="6">
		<table width="100%" border="0">
                <hr>
		<tr>
                    <td align="center" valign="middle">Copyright@2020 组卷系统—教师管理</td>
		</tr>
		</table>	
            </td>
	</tr>
    </table>
</body>
</html>
