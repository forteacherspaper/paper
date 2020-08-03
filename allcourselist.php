<!-- allbooklist.php 显示所有课程 -->
<?php require_once 'connections/conn.php';?>
<?php
MySQLi_query($conn,"set names 'utf8'");
$query_Course="select * from course";
$Course=MySQLi_query($conn,$query_Course) or die(mysqli_error($conn));
$row_Course=mysqli_fetch_assoc($Course);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
<title>课程管理</title>
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
                        <table width="100%" border="0">
                            <tr>
                                <td colspan="6" align="center"><h2>所有课程</h2></td>
                            </tr>
                            <tr valign="middle">
                                <td align="center"><b>序号</b></td>
                                <td align="center"><b>课程名称</b></td>
                                <td align="center"><b>管理员</b></td>
                                <td align="center"><b>创建时间</b></td>
                                <td align="center"><b>最后修改时间</b></td>
                            </tr>
                            <?php do{ ?>
                            <tr valign="middle" align="center">
                                <td><?php echo $row_Course['id'];?></td>
                                <td><?php echo $row_Course['coursename'];?></td>
                                <td><?php echo $row_Course['manager'];?></td>
                                <td><?php echo $row_Course['gmt_create'];?></td>
                                <td><?php echo $row_Course['gmt_modified'];?></td>
                            </tr>
                            <?php }while ($row_Course= mysqli_fetch_assoc($Course));
                            ?>
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
