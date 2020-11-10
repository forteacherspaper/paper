<?php
//显示某试卷到题目
?>
<!--paperqueslist.php-->
试卷名称：2019-2020上期数据结构试卷A<br/>
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
		<table>
			<div id="head">
            <p align="right"><font>
                <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="../logout.php">【退出】</a></font></p>
            </div>
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
				<td>序号</td><td>题目</td><td>答案</td><td>题型</td><td>分值</td><td>编辑</td><td>删除</td>
			</tr>
			<tr>
				<td>1</td>
				<td>题目1</a></td>
				<td>答案1</td>
				<td>单选题</td>
				<td>2</td>
				<td><a href="" title="修改题目">编辑</a></td>
				<td><a href="deletepaperques.php?id=1001" title="将题目从试卷中删除">删除</a></td>
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
