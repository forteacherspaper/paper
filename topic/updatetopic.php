<?php require_once('../connections/conn.php'); ?>
<?php
session_start();
//$name=session_name();
//$id=$_GET[$name];
//session_id($id);
echo $_SESSION['topicmanage'];
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
	</head>
	<body bgcolor="#f4f4f4">
		<table width="100%" border="0" align="center">
		     <tr>
		          <td width="27%" height="68" rowspan="2">
		          </td>
		          <td height="68" colspan="4">
		       <font face="隶书" size="+4" color="#cccc00">组卷系统-题目管理</font>
		          </td>
		          <td width="10%" rowspan="2">&nbsp;</td>
		     </tr>
		    <tr>
			<td width="15%" height="20"  valign="middle"><a href="../index.php">首页</a></td>
			<td width="15%" height="20%" valign="middle"><a href="../course/courselist.php">课程管理</a></td>
			<td width="15%" height="20%" valign="middle"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
			<td width="15%" height="20%" valign="middle"><a href="../teacher/teachermanage.php">教师管理</a></td>
			<td width="15%" height="20%" valign="middle"><a href="../paper/index.php">组卷系统</a></td>
		</tr>
		     <tr>
		          <td width="15%" height="20">&nbsp;</td>
		          
		          <td height="169" colspan="6" align="center">
		          	<form id="form1" name="form1" method="post" action="updatesuccess.php">
		          		<table width="100%" border="0" align="center">
		          			<tr align="center">
		          				<h1 align="center">修改题目</h1>
		          			</tr>
		          			<tr valign="middle">
		          				<td align="center">题目</td>
		     	<td><input name="question" type="text" id="question" size="30" value="<?php echo $row_Topic['question'];?>" title="<?php echo $id;?>" /></td>
		     </tr>
		     
		      <tr>
		     	<td align="center">答案</td>
		     	<td><input name="answer" type="text" id="answer" size="20" value="<?php echo $row_Topic['answer'];?>" /></td>
		     </tr>
		    <!--<tr>
		     	<td align="center">出题人</td>
		     	<td><input name="username" type="text" id="username" size="20" value="<?php echo $row_Topic['username']; ?>" /></td>
		     </tr>-->
		     	<td align="center">题型</td>
		     	<td align="left" valign="middle">
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
		     	<td colspan="2">
		     		<input type="hidden" name="id" id="id" value="<?php echo $row_Topic['id'];?>">
		     		<input type="submit" name="submit" value="提交" url="topicmanage.php"/>
		     	</td>
		     </tr>
		</table>
			</form>
	</body>
</html>