<?php require_once('../connections/conn.php'); ?>
<?php require '../connections/isrealuser.php';?>
<?php
if(isset($_GET['paperid']))
	{
		$_SESSION["paperid"]=$_GET['paperid'];
		$paperid=$_GET['paperid'];
	}
	else if(isset($_SESSION["paperid"])) {
		$paperid=$_SESSION["paperid"];
	}
	else
	{
		header("location:paperlist.php");
	}
    mysqli_query($conn,"set names 'utf8'");
    $query_papername="select * from paper where id=".$paperid;
    $papername=mysqli_query($conn,$query_papername) or die(mysqli_error($conn));
    $row_paper=mysqli_fetch_assoc($papername);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">	
<title>编辑教师信息</title>
</head>
	<body bgcolor="#f4f4f4">		
        <table width="100%" border="0" align="center"> 
        	<tr>
        		<td>
        			<form id="forml" name="forml" method="post" action="editpnsuccess.php">
        				<table width="100%" border="0" align="center">
        				 <tr><td height="68" colspan="4" align="center"><h2>编辑试卷名称</h2></td></tr>

					     <tr>
					     	<td width="40%" align="right" valign="middle">试卷名称:</td>
					     	<td><input name="papername" type="text" id="papername" size="20" value="<?php echo $row_paper['papername']; ?>" /></td>
					     </tr>

					     <tr>
					     	<td colspan="2" align="center" valign="middle">
					     		<input type="hidden" name="ID" id="ID" value="<?php echo $row_paper['id'];?>">
					     		<input type="submit" name="submit" value="提交"/>
					     	</td>
					     </tr>

		     			</table>
		 			</form>
				</td>
			</tr>
        </table>
    </body>
</html>
