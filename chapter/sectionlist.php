<!--  sectionlist.php  编辑章节 -->
<?php require_once('../connections/conn.php'); ?>
<?php require'../connections/course.php';?>
<?php
if(!isset($_SESSION["chapterid"]))
     header("location:../addchapter.php");//判断是否选择章节
else
    $chapterid=$_SESSION["chapterid"];
date_default_timezone_set('prc');
$data = date('Y-m-d H:i:s',time());
date_default_timezone_set('prc');
$data = date('Y-m-d H:i:s',time());

mysqli_query($conn,'set names utf8');
$query_section="select * from section";
$section=mysqli_query($conn,$query_section) or die(mysqli_error($conn));
$row_section=mysqli_fetch_assoc($section);//取出一行数据的关联数组（索引数组）
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>编辑小节页面</title>
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
        
       <tr>
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
                <a href="../paper/index.php">组卷系统</a>
            </td>
        </tr>  
        <tr><table border="0"  width="100%">
            <tr><td align="center" colspan="5" ><font   size="5"  >编辑节页面</font></td><br></tr>  
            <tr align="center">  <td height="50" ><a href="allsection.php">所有小节</a></td>
		<td><a href="addsection.php">添加小节</a></td>
		<td><a href="sectionlist.php">编辑小节信息</a></td>
            <tr>
                <td  valign="middle"  align="center"><b>节序号</b></td>
                <td  valign="middle" align="center" ><b>节名称</b></td>
                <td  valign="middle"  align="center"><b>编辑删除</b></td>
            </tr>
            <?php do { ?>
            <tr valign="middle" align="center">
                <td><?php echo $row_section['number']; ?></td>
                <td><?php echo $row_section['sectionname'] ; ?></a></td>
		<input type="hidden" name="id" id="id" value="<?php echo $row_section['id'] ?>">
		<td><a href="editsec.php?id=<?php echo $row_section['id'] ?>" title="editsec.php?id=<?php echo $row_section['id'] ?>">编辑</a>
                    <a href="deletesec.php?id=<?php echo $row_section['id'] ?>" title="deletesec.php?id=<?php echo $row_section['id'] ?>" onclick="javascript:return confirm('您确定删除该小节吗？');" >删除</a>
		</td>
            </tr>
            <?php }while ($row_section=mysqli_fetch_assoc($section)) ;
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
