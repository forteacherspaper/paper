﻿<!--  editsec.php  编辑章节 -->
<?php require_once '../connections/conn.php';?>
 <?php require'../connections/isrealuser.php';?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location:sectionlist.php"); //页面重定向
}
    MySQLi_query($conn, "set names 'utf8'");
    $query_section="select * from section where id=".$id;
    $section=MySQLi_query($conn,$query_section) or die(mysqli_error($conn));
    $row_section=mysqli_fetch_assoc($section) or header("Location:editsection.php");
    date_default_timezone_set('prc');
    $data = date('Y-m-d H:i:s',time());
 ?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>编辑章节</title>
</head>
<body bgcolor="#f4f4f4">
    <table border="0" cellspacing="" cellpadding="" width="100%">
	<tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >小节管理</font></td></tr>              
        <td align="center" valign="middle"><a href="allsection.php">小章序列</a></td> 
        <td align="center" valign="middle"><a href="addsection.php">添加小节</a></td>
        <td align="center" valign="middle"><a href="sectionlist.php">编辑小节信息</a></td>

        </tr>
        <tr><td height="169" colspan="3" align="center">
                <form id="form1" name="form1" method="post" action="updatesection.php">
                <table border="0"  width="100%"align="center">
                    <tr><td width="50%" align="right" valign="middle"  colspan="3" >
                    <font size="5" color="darkolivegreen ">编辑小节</font></td>
                </tr>
                    <tr><td align="right" valign="middle" colspan="3">节序号:</td>
                    <td align="left" valign="middle" colspan="3">
                    <input name="number" type="text" id="number"value="<?php echo $row_section['number'];?>" title="<?php echo $row_section['number'];?>" /></td>
		</tr>
		<tr><td align="right" valign="middle" colspan="3">节名称:</td>
                    <td align="left" valign="middle" colspan="3"><input name="sectionname" type="text" id="sectionname" value="<?php echo $row_section['sectionname']; ?>"  title="<?php echo $id;?>" /></td>
		</tr>
			<tr><td colspan="6" align="center" valign="middle"><input type="hidden" name="id" id="id" value="<?php echo $row_section['id'];?>">
                    <input type="submit" name="submit" value="提交"/></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
