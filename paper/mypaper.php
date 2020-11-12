<?php
///我的试卷
?>
<?php require'../connections/course.php';?>
<?php require'../connections/isrealuser.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
                <a href="index.php">组卷系统</a>
            </td>
        </tr>
		<tr><td><br><br><br></td></tr>
			<tr class="b">
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
