<?php require_once('../connections/conn.php');?>
<?php require '../connections/isrealuser.php';?>
<?php
    MySQLi_query($conn, "set names 'utf8'");
    $query_paper="select * from paper";
    $paper=MySQLi_query($conn,$query_paper) or die(mysqli_error($conn));
    $row_paper=mysqli_fetch_assoc($paper); 
    $i=1;
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>试卷列表</title>
</head> 
<body bgcolor="">
	<table width="100%" border="0" align="center">
		<tr>
            <td height="68" colspan="4" align="center">
            <font face="隶书" size="+4" color="#cccc00">试卷列表</font></td>
		</tr>
		<tr>
		    <td height="169"  align="center">
			    <table width="100%" border="0">
					<tr valign="middle">
			            <td align="center"><b>序号</b></td>
			            <td align="center"><b>试卷名称</b></td>
			            <td align="center"><b>添加&nbsp;&nbsp;编辑&nbsp;&nbsp;删除</b></td>                
					</tr>
					<?php do { ?>
			            <tr valign="middle" align="center">
			                <td><?php echo $i++; ?></td>
							<td><a href="paperqueslist.php?paperid=<?php echo $row_paper['id']; ?>"><?php echo $row_paper['papername'] ; ?></a></td>
			                <td>
			                	<a href="addques.php?paperid=<?php echo $row_paper['id'] ; ?>">添加题目</a>
			                    <a href="editpapername.php?paperid=<?php echo $row_paper['id'] ; ?>">编辑</a>
			                    <a href="deletepaper.php?paperid=<?php echo $row_paper['id'] ; ?>" onclick="javascript:return confirm('您确定删除该试卷吗？');">删除</a>
							</td>
			            </tr>
					<?php }while ($row_paper=mysqli_fetch_assoc($paper));?>
				</table>
		    </td>
	    </tr>
        <tr>
			<td colspan="6">
				<table width="100%" border="0">
					<hr>
					<tr>
						<td align="center" valign="middle">Copyright@2006 lanmo</td>
					</tr>
					<tr>
						<td align="center" valign="middle">XXX Email:lanmo@myweb.com </td>
            		</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>



