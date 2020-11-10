	<?php require'../connections/isrealuser.php';?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<style type="text/css">
		.a{
				font-family: 黑体;
				font-size: 25px;
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
	<body>
	<table width="100%" border="0" align="center">
		<div id="head">
            <p align="right"><font>
                <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="../logout.php">【退出】</a></font></p>
            </div>
		<tr>
			<p align="center"><td height="48" colspan="6" align="center">
				<font face="隶书" size="+4" color="#cccc00">欢迎进入组卷系统</font>
			</td></p>
		</tr>
		
		<tr>
			<td width="16%" height="20" align="left" valign="middle" class="a">
				<a href="../index.php">首页</a>
			</td>
			<td width="16%" height="20%" class="a"><a href="../course/courselist.php">课程管理</a></td>
			<td width="16%" height="20%" class="a"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
			<td width="16%" height="20%" class="a"><a href="../topic/topicmanage.php">题目管理</a></td>
			<td width="16%" height="20%" align="left" valign="middle" class="a">
				<a href="../teacher/teachermanage.php">教师管理</a>
			</td>
			<td width="16%" height="20%" align="left" valign="middle" class="a">
				<a href="../paper/index.php">组卷系统</a>
			</td>
		</tr>
		<tr></table>
<table align="center">
	<tr><td><h1><a href="createpaper.php">创建试卷</a></h1></td></tr>
	<tr><td><h1><a href="mypaper.php">我的试卷</a></h1></td></tr>
</table>
<table width="100%" border="0">
                    <hr>
                    <tr>
                        <td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table> 
	</body>
	</html>
	