
<?php require_once 'connections/conn.php';?>
<?php
if(isset($_GET['Id']))
    $id=$_GET['Id'];
else{
      header('Location:editcourse.php');//页面重定向
}
    MySQLi_query($conn, "set names 'utf8'");
    $query_Course="select * from course where id=".$id;
    $Course=MySQLi_query($conn,$query_Course) or die(mysqli_error($conn));
    $row_Course=mysqli_fetch_assoc($Course) or header("Location:editcourse.php");
 ?>
<?php
    date_default_timezone_set('prc');
    $data = date('Y-m-d H:i:s',time());
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>编辑课程</title>
</head>
	<body bgcolor="#f4f4f4">
	<table width="100%" border="0" align="center"/>
        <td hight="68" colspan="6" align="center">
                <font face="隶书" size="+4" color="darkcyan">课程管理</font>
            </td>
            <tr>
            <td width="15%" height="20%" align="center" valign="middle">
                <a href="querycourse.php">首页</a>
		</td>
            <td width="15%" height="20%" align="center" valign="middle">
                    <a href="allcourselist.php">所有课程</a>
		</td>
            <td width="20%" height="20" align="center">
                    <a href="allcourselist_pg.php">所有课程（分页）</a>		     
		    </td>
            <td width="15%" height="20" align="center" valign="middle">
                    <a href="addcourse.php">插入课程</a>
                </td>
            <td width="15%" height="20" align="center" valign="middle">
                    <a href="editcourse.php">编辑课程信息</a>
                </td>		   
            <td width="20%" height="20" align="center" valign="middle">
                    <a href="deletecourse.php">删除课程</a>
            </tr>  
            <tr>        
		<td height="169" colspan="6" align="center">
		    <form id="form1" name="form1" method="post" action="updatecourse.php">
		        <table width="100%" border="0" align="center">
                            <tr align="center">
		          	<td colspan="2" align="center">课程信息</td>
                            </tr>
		<tr valign="middle">
                    <td align="right">序号</td>
		    <td><input name="Id" type="text" id="Id" value="<?php echo $row_Course['id'];?>" title="<?php echo $id;?>" /></td>
		</tr>
                <tr>
                    <td align="right">课程名称</td>
		    <td><input name="CourseName" type="text" id="CourseName" value="<?php echo $row_Course['coursename'];?>" title="<?php echo $id;?>" /></td>
		</tr>
		<tr>
                    <td align="right">管理员</td>
		    <td><input name="Manager" type="text" id="Manager"value="<?php echo $row_Course['manager']; ?>" /></td>
		</tr>
		<tr>
                    <td align="right">创建时间</td>
		<td><input name="Gmt_Create" type="text" id="Gmt_Create" value="<?php echo $data;?>"  /></td>
		</tr>
                <tr>
                    <td align="right">最后修改时间</td>
		<td><input name="Gmt_Modified" type="text" id="Gmt_Modified" value="<?php echo $data;?>"/></td>
		</tr>
            </tr>
            <tr>
                <td colspan="4" align="center">
		<input type="hidden" name="Id" id="Id" value="<?php echo $row_Course['id'];?>">
                    <input type="submit" name="submit" value="提交"/>
		</td>
            </tr>
        </table>
	</form>
	</body>
</html>
