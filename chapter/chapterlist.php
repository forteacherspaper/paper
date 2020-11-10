<!--  chapterlist.php  编辑章节列表 -->
<?php require_once('../connections/conn.php'); //连接数据库 
?>
<?php require'../connections/isrealuser.php';?>
<?php require'../connections/course.php';//判断是否用户登陆？ 
?>
<?php
    if(isset($_SESSION["courseid"]))
    {
       $courseid=$_SESSION["courseid"];
    }
    else
    {
       header("location:../selectcourse.php");//判断是否选择课程
    }
mysqli_query($conn,'set names utf8');
$query_Chapter="select * from chapter where courseid=$courseid";
$Chapter=mysqli_query($conn,$query_Chapter) or die(mysqli_error($conn));
$row_Chapter=mysqli_fetch_assoc($Chapter);//取出一行数据的关联数组（索引数组）
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>编辑章节页面</title>
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
                <font face="隶书" size="+3" color="#000000">组卷系统-章管理</font></td><td align="right" width="50px" bgcolor=""><font>
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
            <td width="15%" height="20" align="center" class="a">
                <a href="../index.php">首页</a>
            </td>
            <td width="15%" height="20%" class="a" align="center"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="20%" class="a" align="center"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
            <td width="15%" height="20%" align="center" valign="middle" class="a">
                <a href="../teacher/teachermanage.php">教师管理</a>
            <td width="15%" height="20%" align="center" valign="middle" class="a">
                <a href="../topic/topicmanage.php">题目管理</a>
            </td>
            <td width="15%" height="20%" align="center" valign="middle" class="a">
                <a href="../paper/index.php">组卷系统</a>
            </td>
           
            <tr>
                <td  valign="middle"  align="center"><b>章号</b></td>
                <td  valign="middle" align="center" ><b>章名称</b></td>
                <td  valign="middle"  align="center"><b>操作</b></td>
                <td  valign="middle"  align="center"><a href="addchapter.php"><font color="#1B2AE0" size="4"  >添加章</font></a></td>
               
            </tr>
            <?php do { ?>
            <tr valign="middle" align="center">
                <td><?php echo $row_Chapter['number']; ?></td>
                <td><a href="allsection.php"><?php echo $row_Chapter['chaptername'] ; ?></a></td>
		        <input type="hidden" name="id" id="id" value="<?php echo $row_Chapter['id'] ?>">
		        <td width="25%">
                    <a href="editOr.php?id=<?php echo $row_Chapter['id'] ?>" title="editOr.php?id=<?php echo $row_Chapter['id'] ?>">编辑&nbsp;&nbsp;&nbsp;
                    </a>
                    <a href="deleteOr.php?id=<?php echo $row_Chapter['id'] ?>" title="deleteOr.php?id=<?php echo $row_Chapter['id'] ?>" onclick="javascript:return confirm('您确定删除该章吗？');" >删除
                        &nbsp;&nbsp;&nbsp;
                    </a>
                    <a href="addsection.php?chapterid=<?php echo $row_Chapter['id'] ?>" title="addsection.php?chapterid=<?php echo $row_Chapter['id'] ?>">添加节</a>&nbsp;&nbsp;&nbsp;
                    <a href="allsection.php?chapterid=<?php echo $row_Chapter['id'] ?>" title="allsection.php?chapterid=<?php echo $row_Chapter['id'] ?>">显示节序列</a></td>
                    <td align="center" width="15%"></td> 
            </tr>
            <?php }while ($row_Chapter=mysqli_fetch_assoc($Chapter)) ;
            ?>
	</table>  
        </table>
        <table width="100%" border="0">
                    <hr>
                    <tr>
                        <td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table> 
    </body>
</html>
