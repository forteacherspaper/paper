<?php require'../connections/isrealuser.php';?>
<?php require_once('../connections/conn.php'); ?>
<?php require'../connections/course.php';?>
<?php
//session_start();
//$name=session_name();
//$id=$_GET[$name];
//session_id($id);
//echo $_SESSION['topicmanage'];
?>
<!--会话技术-->
<?php
if(isset($_GET['id']))
    $id=$_GET['id'];
else{
      header('Location:topicmanager.php');
}
    MySQLi_query($conn, "set names 'utf8'");
    $query_Topic="select * from question where id=".$id;
    $Topic=MySQLi_query($conn,$query_Topic) or die(mysqli_error($conn));
    $row_Topic=mysqli_fetch_assoc($Topic) or header("Location:topicmanager.php");
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>题目修改</title>
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
		     <tr>
		          <td  height="20">&nbsp;</td>
		          
		          <td height="169" colspan="6" align="center">
		          	<form id="form1" name="form1" method="post" action="updatesuccess.php">
		          		<table width="100%" border="0" align="center">
		          			<tr >
		          				<td align="center"></td>
		     	<td width="800px">题目<input name="question" type="text" id="question" size="30" value="<?php echo $row_Topic['question'];?>" title="<?php echo $id;?>" /></td>
		     </tr>
		     
		      <tr>
		     	<td></td>
		     	<td width="800px">答案<input name="answer" type="text" id="answer" size="20" value="<?php echo $row_Topic['answer'];?>" /></td>
		     </tr>
		    <!--<tr>
		     	<td align="center">出题人</td>
		     	<td><input name="username" type="text" id="username" size="20" value="<?php echo $row_Topic['username']; ?>" /></td>
		     </tr>-->
		     	<td></td>
		     	<td width="800px" valign="middle">题型
		     	<select name="questiontypeid" id="questiontypeid">
		     		<option value="选择题" <?php if($row_Topic['questiontypeid']=="选择题") echo "selected='selected'"; ?>>选择题</option>
		     		<option value="填空题" <?php if($row_Topic['questiontypeid']=="填空题") echo "selected='selected'"; ?>>填空题</option>
		     		<option value="应用题" <?php if($row_Topic['questiontypeid']=="应用题") echo "selected='selected'"; ?>>应用题</option>
		     		<option value="单选题" <?php if($row_Topic['questiontypeid']=="单选题") echo "selected='selected'"; ?>>单选题</option>
		     		<option value="多选题" <?php if($row_Topic['questiontypeid']=="多选题") echo "selected='selected'"; ?>>多选题</option>
		     		<option value="计算题" <?php if($row_Topic['questiontypeid']=="计算题") echo "selected='selected'"; ?>>计算题</option>
		     		<option value="简答题" <?php if($row_Topic['questiontypeid']=="简答题") echo "selected='selected'"; ?>>简答题</option>
		     		<option value="论述题" <?php if($row_Topic['questiontypeid']=="论述题") echo "selected='selected'"; ?>>论述题</option>
		     	</select>
		     	</td>
		     </tr>
		     <tr>
		     	<td colspan="2" align="center">
		     		<input type="hidden" name="id" id="id" value="<?php echo $row_Topic['id'];?>">
		     		<input type="submit" name="submit" value="提交" url="topicmanage.php"/>
		     	</td>
		     </tr>
		</table>
			</form>
			<table width="100%" border="0">
                    <hr width="100%">
                    <tr >
                        <td align="center" valign="middle" width="100%">Copyright@2020 组卷系统-题目管理</td>
                    </tr>
                </table> 
	</body>
</html>