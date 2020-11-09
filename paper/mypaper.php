<?php
///我的试卷
?>
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
	</style>
</head>
<body>
		<table>
			<tr height="100">
           <p align="center"> <td align="center" colspan="6" ><font face="隶书" size="+5" color="#cccc00">组卷系统-试卷管理</font></td></p></tr> 
			<tr>
			<td width="15%" height="20" align="left" valign="middle" class="a">
				<a href="../index.php">首页</a>
			</td>
			<td width="15%" height="20%" class="a"><a href="../course/courselist.php">课程管理</a></td>
			<td width="15%" height="20%" class="a"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
			<td width="15%" height="20%" class="a"><a href="../topic/topicmanage.php">题目管理</a></td>
			<td width="15%" height="20%" align="left" valign="middle" class="a">
				<a href="../teacher/teachermanage.php">教师管理</a>
			</td>
			<td width="15%" height="20%" align="left" valign="middle" class="a">
				<a href="../paper/index.php">组卷系统</a>
			</td>
		</tr>
			<tr>
				<td>序号</td><td>试卷名称</td><td>手工添加试题</td><td>自动添加试题</td><td>编辑</td><td>删除</td>
			</tr>
			<tr>
				<td>1</td><td><a href="paperqueslist.php?id=1" title="查看试卷题目">2019-2020上期数据结构试卷A</a></td>
				<td><a href="addques.php">手工添加试题</a></td><td><a href="autoselectques.php">自动添加试题</a></td>
				<td><a href="">编辑</a></td><td><a href="">删除</a></td>
			</tr>
		</table>
         <table width="100%" border="0">
                    <hr>
                    <tr>
                        <td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table> 
</body>
</html>
