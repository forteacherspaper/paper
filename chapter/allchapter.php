<!--  allchapter.php  显示所有章节 -->
<?php require_once '../connections/conn.php';?>
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
                font-size: 25px;
                background-color:aliceblue;
                text-decoration: none;
            }
    </style>
</head>
<body bgcolor="#f4f4f4">
	<table  border="0" cellspacing="" cellpadding="" width="100%">
           <p align="center"> <tr><td align="center" colspan="6" >  <font face="隶书" size="+5" color="#cccc00">组卷系统-章管理</font></td></p></tr>
            <tr align="center"><td colspan="3"align="left" ><a href="../index.php">返回网站首页</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../course/courselist">返回课程</a></td></tr>
             
            <tr>
            <td width="15%" height="20" align="left" valign="middle" class="a">
                <a href="../index.php">首页</a>
            </td>
            <td width="15%" height="20%" class="a"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="20%" class="a"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
            <td width="15%" height="20%" align="left" valign="middle" class="a">
                <a href="../topic/topicmanage.php">题目管理</a>
            </td>
            <td width="15%" height="20%" align="left" valign="middle" class="a">
                <a href="../paper/index.php">组卷系统</a>
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

