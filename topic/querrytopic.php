<?php require'../connections/isrealuser.php';?>
<?php require'../connections/course.php';?>
<?php require_once('../connections/conn.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>查询题目</title>
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
            <p align="center"><td colspan="4" align="center">
                <font face="隶书" size="+3" color="#000000">题目管理-搜索</font>
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
             <td width="15%" height="40px" align="center" class="a"><a href="../index.php">首页</a> </td>
            <td width="15%" height="40px" class="a" align="center"><a href="../teacher/teachermanage.php">教师管理</a></td>
            <td width="15%" height="40px" class="a"align="center"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="40px" class="a" align="center"><a href="../chapter/chapterlist.php">章节管理</a></td>
            <td width="15%" height="40px" class="a" align="center"><a href="topicmanage.php">题目管理</a></td>
            <td width="15%" height="40px"  class="a" align="center"> <a href="../paper/paperlist.php">组卷系统</a></td>
        </tr>
        <tr><table><hr></table></tr>
        <tr>
			<td height="169" colspan="6" align="center">
                <form id="forml" name="forml" method="post" action="querrysuccess.php">
                	<table width="100%" border="0" align="center">
	                   <tr align="right"><td width="40%">请填写需要查找的题目类型：</td>
                         <td align="left" valign="middle">
                                <select id="questiontype" name="questiontype">
                                    <option value="单选题" checked="checked">选择题</option>
                                    <option value="单选题">单选题</option>
                                    <option value="多选题">多选题</option>
                                    <option value="填空题">填空题</option>
                                    <option value="计算题">计算题</option>
                                    <option value="应用题">应用题</option>
                                    <option value="连线题">连线题</option>
                                    <option value="判断题">判断题</option>
                                    <option value="简答题">简答题</option>
                                </select>
                            </td></tr>
                        <tr>
                           <td width="20%" align="right" valign="middle" >题干:</td>
                            <td align="left" valign="middle">
                                <textarea rows="5" cols="70" id="question" name="question"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" align="center" valign="middle"><input type="submit" name="submit" value="提交" url="topicmanage.php"/></td>
                        </tr>
                	</table>
                </form>
            </td>
        </tr>
        <tr>
			<td colspan="6">
				<table width="100%" border="0">
					<hr>
					<tr>
                    	<td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                	</tr>
				</table>	
			</td>
		</tr>
    </table>
</body>
</html>