<?php require_once('../connections/conn.php'); ?>
<?php
if(isset($_GET['ID']))
    $teacherid=$_GET['ID'];
else{
      header("Location:teachermanage.php");
}
    mysqli_query($conn,"set names 'utf8'");
    date_default_timezone_set('prc');
    $data=date('Y-m-d H:i:s',time());
    $query_Teacher="select * from teacher where id=".$teacherid;
    $Teacher=MySQLi_query($conn,$query_Teacher) or die(mysqli_error($conn));
    $row_Teacher=mysqli_fetch_assoc($Teacher) or header("Location:teachermanage.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">	
<title>编辑教师信息</title>
 <style type="text/css">
        .a{
                font-family: 黑体;
                font-size: 25px;
                background-color:aliceblue;
                text-decoration: none;
            }
    </style>
</head>
	<body bgcolor="#f4f4f4">		
        <table width="100%" border="0" align="center"> 
        	<tr>
	            <td height="68" colspan="4" align="center">
	                <font face="隶书" size="+4" color="#cccc00">组卷系统-教师管理</font>
	            </td>
	            
        	</tr>
		
			<tr>
				<td width="15%" height="20%" align="left" valign="middle" class="a">
					<a href="../index.php">首页</a>
				</td>
				<td width="15%" height="20%" class="a"><a href="../course/courselist.php">课程管理</a></td>
				<td width="15%" height="20%" class="a"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
				<td width="15%" height="20%" align="left" valign="middle" class="a">
					<a href="../topic/topicmanage.php">题目管理</a>
				</td>
				<td width="15%" height="20%" class="a"><a href="../teacher/teachermanage.php">教师管理</a></td>
				<td width="20%" height="20%" align="left" valign="middle" class="a">
					<a href="../paper/index.php">组卷系统</a>
				</td>
	        </tr>
        	<tr><table><hr></table></tr>

        	<tr>
        		<td>
        			<form id="forml" name="forml" method="post" action="editsuccess">
        				<table width="100%" border="0" align="center">
        				 <tr><td height="68" colspan="4" align="center"><h2>编辑教师信息</h2></td></tr>
					     <tr>
					     	<td width="40%" align="right" valign="middle">姓名:</td>
					     	<td><input name="Name" type="text" id="Name" size="20" value="<?php echo $row_Teacher['name']; ?>" /></td>
					     </tr>
					     <tr>
					     	<td width="40%" align="right" valign="middle">用户名:</td>
					     	<td><input name="UserName" type="text" id="UserName" size="20" value="<?php echo $row_Teacher['username']; ?>" /></td>
					     </tr>
					     <tr>
					     	<td width="40%" align="right" valign="middle">密码:</td>
					     	<td><input name="Password" type="text" id="Password" size="20" value="<?php echo $row_Teacher['password'];?>" /></td>
					     </tr>
					     <tr>
					     	<td width="40%" align="right" valign="middle">邮箱:</td>
					     	<td><input name="Email" type="text" id="Email" size="20" value="<?php echo $row_Teacher['email'];?>" /></td>
					     </tr>
					     <tr>
					     	<td width="40%" align="right" valign="middle">最后修改时间:</td>
					     	<td><input name="Gmt_modified" type="text" id="Gmt_modified" size="20" value="<?php echo $data;?>" /></td>
					     </tr>
					     <tr>
					     	<td colspan="2" align="center" valign="middle">
					     		<input type="hidden" name="ID" id="ID" value="<?php echo $row_Teacher['id'];?>">
					     		<input type="submit" name="submit" value="提交"/>
					     	</td>
					     </tr>
		     			</table>
		 			</form>
				</td>
			</tr>
			<tr>
            <td colspan="6"><table align="center">
                <hr>
                <tr>
                    <td align="center" valign="middle">Copyright@2020 组卷系统-教师管理</td>
                </tr>
                </table>
            </td>
        </tr>
        </table>
    </body>
</html>
