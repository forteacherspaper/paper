<?php
//创建试卷
require '../connections/isrealuser.php';

?>
<?php require'../connections/course.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>创建试卷</title>
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
                <font face="隶书" size="+3" color="#000000">欢迎进入创建试卷---请输入试卷名称</font></td><td align="right" width="50px" bgcolor=""><font>
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
		<br><br>
		<table><tr>
			<td width="15%" height="20" align="center" class="a">
				<a href="../index.php">首页</a>
			</td>
			<td width="19%" height="20%" class="a" align="center"><a href="../course/allcourse.php">课程管理</a></td>
			<td width="19%" height="20%" class="a" align="center"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
            <td width="19%" height="20%" class="a" align="center"><a href="../topic/topicmanage.php">题目管理</a></td>
			<td width="19%" height="20%" align="center" class="a">
				<a href="../teacher/teachermanage.php">教师管理</a>
			</td>
			<td width="19%" height="20%" align="center" class="a">
				<a href="../paper/index.php">组卷系统</a>
			</td>
		</tr></table>
		<br /><br /><br />
		<tr><td>试卷名称：<input type="text" name="papername"/></td>&nbsp;&nbsp;<td><input type="submit" name="submit" value="提交"/></td></tr>
	</form>
	<table width="100%" border="0">
		<tr><td><br><br><br></td></tr>
                   <tr><td><hr></td></tr>
                    <tr>
                         <td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table> 
</body>
</html>
