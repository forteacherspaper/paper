<?php
//
//
//创建试卷
require '../connections/isrealuser.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>创建试卷</title>
	<style type="text/css">
        .a{
                font-family: 黑体;
                font-size: 75px;
                background-color:aliceblue;
                text-decoration: none;
            }
    </style>
</head>
<body>
	<form name="form1" action="createsuccess.php" method="post">
		<tr>
			<td width="15%" height="20" align="left" valign="middle" class="a">
				<a href="../index.php">首页</a>
			</td>
			<td width="15%" height="20%" class="a"><a href="../course/allcourse.php">课程管理</a></td>
			<td width="15%" height="20%" class="a"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
            <td width="15%" height="20%" class="a"><a href="../topic/topicmanage.php">题目管理</a></td>
			<td width="15%" height="20%" align="left" valign="middle" class="a">
				<a href="../teacher/teachermanage.php">教师管理</a>
			</td>
			<td width="15%" height="20%" align="left" valign="middle" class="a">
				<a href="../paper/index.php">组卷系统</a>
			</td>
		</tr>
		<tr><试卷名称：<input type="text" name="papername"/><br/>/tr>
		
		<tr><input type="submit" name="submit" value="提交"/></tr>
	</form>
</body>
</html>
