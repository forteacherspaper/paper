<?php require_once('connections/conn.php');?>
<?php
        //error_reporting(E_All & ~E_DEPRECATED);
	 $colname_CourseInfo="-1";
	 if(isset($_POST['CourseName'])){
		 $colname_CourseInfo=$_POST['CourseName'];
	 }    
	 //sprintf函数生成字符串
	 $query_CourseInfo=sprintf("select * from course where coursename='%s'",$colname_CourseInfo);
	 mysqli_query($conn,"set names 'utf8'");//设置字符编码格式
	 $courseinfo=mysqli_query($conn,$query_CourseInfo) or die(mysqli_error($conn));//查询数据
	 //mysqli_fetch_assoc从结果集中取出一行数据，成为相关数组，键名是字段名，值是数据
	 $row_courseinfo=mysqli_fetch_assoc($courseinfo);//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"  charset="utf-8"/>
    <title>课程管理</title>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center">
        <tr>
                <td hight="68" colspan="6" align="center">
                    <font face="隶书" size="+4" color="darkcyan">课程管理</font>
                </td> 
        </tr>
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
			<td height="169" colspan="5" align="center">
			<table width="100%" border="0" align="center">
			<tr valign="middle">
                            <td align="center"><b>序号</b></td>
                            <td align="center"><b>课程名称</b></td>
                            <td align="center"><b>管理员</b></td>
                            <td align="center"><b>创建时间</b></td>
                            <td align="center"><b>最后修改时间</b></td>
			</tr> 
<?php do{ ?>
		<tr>
                    <td width="10%" align="center">
				<?php echo $row_courseinfo['id'];?>
			</td>
                    <td width="10%" align="center">
				<?php echo $row_courseinfo['coursename'];?>
			</td>
                    <td width="10%" align="center">
				<?php echo $row_courseinfo['manager'];?>
			</td>
                    <td width="10%" align="center">
				<?php echo $row_courseinfo['gmt_create'];?>
			</td>
                    <td width="10%" align="center">
				<?php echo $row_courseinfo['gmt_modified'];?>
			</td>
		</tr>
<?php }while ($row_courseinfo=mysqli_fetch_assoc($courseinfo));?>
                        </table>
			</td>
		</tr>
		<tr>
			<td colspan="6"><table width="100%" border="0">
			<hr>
			<tr>
				<td align="center" valign="middle">Copyright@2020 lanmo</td>
			</tr>
			<tr>
				<td align="center" valign="middle">XXX Email:lanmo@myweb.com </td>
                        </tr>
			</table>
			</td>
		</tr>
</body>			
</html>
