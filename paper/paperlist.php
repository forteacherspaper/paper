<?php require_once('../connections/conn.php');?>
<?php require '../connections/isrealuser.php';?>
<?php require '../connections/course.php';?>
<?php

    MySQLi_query($conn, "set names 'utf8'");
    $query_paper="select * from paper";
    $paper=MySQLi_query($conn,$query_paper) or die(mysqli_error($conn));
    $row_paper=mysqli_fetch_assoc($paper); 
    $i=1;
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>试卷列表</title>
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
            <p align="center"><td colspan="3" align="center">
                <font face="隶书" size="+3" color="#000000">组卷系统-试卷列表</font>
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
        <tr><td><br></td></tr>
        <tr><td colspan="6">
         <tr align="right">
                <td width="27%" height="20" align="right" valign="middle" colspan="5">
                <a href="createpaper.php"><font face="幼圆" size="+1"><b>创建试卷</b></font></a>
                </td>
            <tr>
	<table width="100%" border="0" align="center">
       
		<tr>
		    <td height="169"  align="center">
			    <table width="100%" border="0">
					<tr valign="middle">
			            <td align="center" class="b"><b>序号</b></td>
			            <td align="center" class="b"><b>试卷名称</b></td>
						<td align="center" class="b"><b>查看试卷文本及答案</b></td>
						<td align="center"><b>试卷覆盖率分析</b></td>
			            <td align="center" class="b"><b>添加&nbsp;&nbsp;编辑&nbsp;&nbsp;删除</b></td>                
					</tr>
					<?php do { ?>
			            <tr valign="middle" align="center">
			                <td><?php echo $i++; ?></td>
							<td><a href="paperqueslist.php?paperid=<?php echo $row_paper['id']; ?>"><?php echo $row_paper['papername'] ; ?></a></td>
							<td><a href="writepaper.php?paperid=<?php echo $row_paper['id']; ?>">查看试卷文本及答案</a></td>
							<td><a href="analysispaper.php?paperid=<?php echo $row_paper['id']; ?>">试卷覆盖率分析</a></td>
			                <td>
			                	<a href="addques.php?paperid=<?php echo $row_paper['id'] ; ?>">添加题目</a>
			                    <a href="editpapername.php?paperid=<?php echo $row_paper['id'] ; ?>">编辑</a>
			                    <a href="deletepaper.php?paperid=<?php echo $row_paper['id'] ; ?>" onclick="javascript:return confirm('您确定删除该试卷吗？');">删除</a>
							</td>
			            </tr>
					<?php }while ($row_paper=mysqli_fetch_assoc($paper));?>
				</table>
		    </td>
	    </tr>
        <tr>
			<td colspan="6">
				<table width="100%" border="0">
					<hr>
					<tr>
						<td align="center" valign="middle">Copyright@2006 lanmo</td>
					</tr>
					<tr>
						<td align="center" valign="middle">XXX Email:lanmo@myweb.com </td>
            		</tr>
				</table>
			</td>
		</tr>
	</table></td></tr></table>
</body>
</html>



