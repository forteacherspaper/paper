<?php require_once 'connections/conn.php';?>
<?php
if(isset($_GET['TopicID']))
    $bookid=$_GET['TopicID'];
else{
      header('Location:deletetopic.php');
}
    MySQLi_query($conn, "set names 'utf8'");
    $query_Topic="select * from topictable where topicid=".$topicid;
    $Topic=MySQLi_query($conn,$query_Topic) or die(mysqli_error($conn));
    $row_Topic=mysqli_fetch_assoc($Topic) or header("Location:deletetopic.php");
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>试卷管理</title>
	</head>
	<body bgcolor="#f4f4f4">
		<table width="100%" border="0" align="center">
		     <tr>
		          <td width="27%" height="68" rowspan="2">
		                <img width="200" height="106" src="images/book_logo.jpg" />
		          </td>
		          <td height="68" colspan="4">
		          <font face="隶书" size="+4" color="#cccc00">题目管理</font>
		          </td>
		          <td width="10%" rowspan="2">&nbsp;</td>
		     </tr>
		     <tr>
		          <td colspan="4" align="center">选题</td>
		     </tr>
		     <tr>
		           <td width="15%" height="20" align="left" valign="middle">
		           <a href=".php">首页</a> 
		           </td>
		           <td width="15%" height="20" align="left" valign="middle">
		           <a href="course_chapter.php">所有题目</a>
		           <select name="Topictype" id="Topictype">
		     		<option value="1" <?php if($row_Topic['topictype']=="1") echo "selected='selected'"; ?>><a href="alltopiclist.php">
		     			选择题</a></option>
		     		<option value="2" <?php if($row_Topic['topictype']=="2") echo "selected='selected'"; ?>><a href="alltopiclist.php">填空题</a></option>
		     		<option value="3" <?php if($row_Topic['topictype']=="3") echo "selected='selected'"; ?>><a href="alltopiclist.php">计算题</a></option>
					<option value="4" <?php if($row_Topic['topictype']=="4") echo "selected='selected'"; ?>><a href="alltopiclist.php">应用题</a></option>
		     		<option value="5" <?php if($row_Topic['topictype']=="5") echo "selected='selected'"; ?>><a href="alltopiclist.php">多选题</a></option>
					<option value="6" <?php if($row_Topic['topictype']=="6") echo "selected='selected'"; ?>><a href="alltopiclist.php">判断题</a></option>
		     		<option value="7" <?php if($row_Topic['topictype']=="7") echo "selected='selected'"; ?>><a href="alltopiclist.php">连线题</a></option>
		     	</select>
		           </td>
		           <td width="20%" height="20"><a href="course_chapter.php">所有题干</a></td>
		           <td width="15%" height="20" align="left" valign="middle">
		           <a href="topicinsert.php">插入题干</a>
		           </td>
		           <td width="20%" height="20" align="left" valign="middle">
		           	<a href="topicdelete.php">编辑删除题干</a>
		           </td>
		          <td width="15%" height="20">&nbsp;</td>
		          
		          <td height="169" colspan="6" align="center">
		          	<form id="form1" name="form1" method="post" action="updatetopic.php">
		          		<table width="100%" border="0">
		          			<tr>
		          				<td colspan="2" align="center">题目类型</td>
		          			</tr>
		          			<tr valign="middle">
		          				<td align="center">出题人</td>
		     	<td><a href="teachermanage.php"><input name="TopicName" type="text" id="TopicNmae" size="30" value="<?php echo $row_Topic['topicname'];?>" title="<?php echo $Topicid;?>" /></a></td>
		     </tr>
		     <tr>
		     	<td align="center">题干量</td>
		     	<td><input name="TopicAuthor" type="text" id="TopicAuthor" size="20" value="<?php echo $row_Topic['topicauthor']; ?>" /></td>
		     </tr>
		      <tr>
		     	<td align="center">题干名</td>
		     	<td><input name="TopicPrice" type="text" id="TopicPrice" size="20" value="<?php echo $row_Topic['topicpricerice'];?>" /></td>
		     </tr>
		   
		     	
		     	<td align="left" valign="middle">
		     	<select name="Topictype" id="Topictype">
		     		<option value="1" <?php if($row_Topic['topictype']=="1") echo "selected='selected'"; ?>>1.</option>
		     		<option value="2" <?php if($row_Topic['topictype']=="2") echo "selected='selected'"; ?>>2.</option>
		     		<option value="3" <?php if($row_Topic['topictype']=="3") echo "selected='selected'"; ?>>3.</option>
					<option value="4" <?php if($row_Topic['topictype']=="4") echo "selected='selected'"; ?>>4.</option>
		     		<option value="5" <?php if($row_Topic['topictype']=="5") echo "selected='selected'"; ?>>5.</option>
					<option value="6" <?php if($row_Topic['topictype']=="6") echo "selected='selected'"; ?>>6.</option>
		     		<option value="7" <?php if($row_Topic['topictype']=="7") echo "selected='selected'"; ?>>。。。</option>
		     	</select>
		     	</td>
		     </tr>
		     <tr>
		     	<td colspan="2">
		     		<input type="hidden" name="TopicID" id="TopicId" value="<?php echo $row_Book['topicid'];?>">
		     			<input type="button" name="button" value="重置"/>
		     		<input type="submit" name="submit" value="提交"/>
		     	</td>
		     </tr>
		</table>
			</form>
	</body>
</html>
