<?php require_once('../connections/conn.php'); ?>
<?php require '../connections/isrealuser.php';?>
<?php require '../connections/course.php';?>
<?php
if(isset($_GET['paperid']))
	{
		$_SESSION["paperid"]=$_GET['paperid'];
		$paperid=$_GET['paperid'];
	}
	else if(isset($_SESSION["paperid"])) {
		$paperid=$_SESSION["paperid"];
	}
	else
	{
		header("location:paperlist.php");
	}
    mysqli_query($conn,"set names 'utf8'");
    $query_papername="select * from paper where id=".$paperid;
    $papername=mysqli_query($conn,$query_papername) or die(mysqli_error($conn));
    $row_paper=mysqli_fetch_assoc($papername);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">	
<title>编辑教师信息</title>
<style type="text/css">
		.b{
                font-size: 22px;
            }.a{
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
                <font face="隶书" size="+3" color="#000000">组卷系统-试卷管理</font>
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
        </tr>
        <tr><td><br><br><br></td></tr>
        <tr align="center"><td colspan="6" align="center">	
        <table width="100%" border="0" align="center"> 
        	<tr>
        		<td>
        			<form id="forml" name="forml" method="post" action="editpnsuccess.php">
        				<table width="100%" border="0" align="center">
        				 <tr><td height="68" colspan="4" align="center"><h2>编辑试卷名称</h2></td></tr>

					     <tr>
					     	<td width="40%" align="center" valign="middle" colspan="6">试卷名称:
					     	<input name="papername" type="text" id="papername" size="20" value="<?php echo $row_paper['papername']; ?>" /></td>
					     </tr>

					     <tr>
					     	<td colspan="2" align="center" valign="middle"><br>
					     		<input type="hidden" name="ID" id="ID" value="<?php echo $row_paper['id'];?>">
					     		<input type="submit" name="submit" value="提交"/>
					     	</td>
					     </tr>

		     			</table>
		 			</form>
				</td>
			</tr>
        </table>
    </td></tr></table>
    </body>
</html>
