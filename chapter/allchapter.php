<!--  allchapter.php  显示所有章节 -->
<?php require_once '../connections/conn.php';?>
<?php require'../connections/course.php';//判断是否用户登陆？ 
?>
<?php
    if(!isset($_SESSION["courseid"]))
        header("location:../selectcourse.php");//判断是否选择课程
    else
        $courseid=$_SESSION["courseid"];
MySQLi_query($conn,"set names 'utf8'");
$query_Chapter="select * from Chapter where courseid=$courseid";
$Chapter=MySQLi_query($conn,$query_Chapter) or die(mysqli_error($conn));
$row_Chapter=mysqli_fetch_assoc($Chapter);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>所有章节</title>
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
                <font face="隶书" size="+3" color="#000000">组卷系统-章节管理</font>
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
        
        <tr align="center">
            <td width="15%" height="40px" align="center" valign="middle" class="a">
                <a href="../index.php">首页</a>
            </td>
            <td width="15%" height="40px" class="a"><a href="../teacher/teachermanage.php">教师管理</a></td>
            <td width="15%" height="40px" class="a"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="40px" class="a"><a href="chapterlist.php">章节管理</a></td>
            <td width="15%" height="40px" class="a">
                <a href="../topic/topicmanage.php">题目管理</a>
            </td>
            <td width="15%" height="40px"  class="a">
                 <a href="../paper/paperlist.php">组卷系统</a>
            </td>
        </tr>
            <td align="center" valign="middle"><a href="allchapter.php"><font color="#1B2AE0" size="4"  >章目录</font></a></td>
            <td align="center" valign="middle"><a href="addchapter.php"><font color="#1B2AE0" size="4"  >添加章</font></a></td>
            <td align="center" valign="middle"><a href="chapterlist.php"><font color="#1B2AE0" size="4"  >编辑章信息</font></a></td>
        </tr>
            <table border="0" align="center"  >
                    <tr><td colspan="3" align="center"><h2>所有章</h2></td></tr>
                    <tr> <td valign="middle" align="center"width="300"><b>章序号</b></td>
                        <td valign="middle" align="center" width="300"><b>章名称</b></td>
                    </tr>
                        <?php do{ ?> 
                            <tr valign="middle" align="center"> 
                                <td align="center"><?php echo $row_Chapter['number'];?></td>
                                <td align="center"><a href="allsection.php"><?php echo $row_Chapter['chaptername'];?></a></td>
                            </tr>
                        <?php }while ($row_Chapter= mysqli_fetch_assoc($Chapter));
                        ?>
		</table>
        <table width="100%" border="0">
                    <hr>
                    <tr>
                        <td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table> 
	</body>
</html>

