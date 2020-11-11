<?php require_once('../connections/conn.php');?>
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
	mysqli_query($conn,'set names utf8');
	$query_paper="select courseid,papername from paper where id='$paperid'";
    $paper=mysqli_query($conn,$query_paper) or die(mysql_error($conn));
    $row_paper=mysqli_fetch_assoc($paper);
    $courseid=$row_paper["courseid"];
?>

<html>
<head>	
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>组卷</title>
<script language="javascript" src="ajax.js"></script>
<script language="javascript">
function query(){
	var pid = document.getElementById("chapterClassName").value;
	var tid = document.getElementById("typeClassName").value;
	if(pid!=""){
	   createRequest('query.php?pid='+pid+'&tid='+tid);
	}
}
</script>
</head>
<body>
<div align="center"><td><h2>试卷名称：<?php echo $row_paper['papername'] ?> </h2></td></div>
<form action="addquessuccess.php" name="class" method="post" id="class">
	请选择：
	<select name="chapterClassName" id="chapterClassName" Onchange="query()">
	<option>--选择章--</option>
	<?php
		$sql1="select id,chaptername from chapter where courseid=$courseid";
		mysqli_query($conn,"set names 'utf8'");
		$res1=mysqli_query($conn,$sql1);
		while($result1=mysqli_fetch_assoc($res1)){
		   echo "<option value='".$result1["id"]."'>".$result1["chaptername"]."</option>";
		}
	?>
	</select>
		&nbsp;
	<select name="typeClassName" id="typeClassName"  Onchange="query()">
	<?php
		$sql2="select id,questiontypename from questiontype";
		mysqli_query($conn,"set names 'utf8'");
		$res2=mysqli_query($conn,$sql2);
		while($result2=mysqli_fetch_assoc($res2)){
		   echo "<option value='".$result2["questiontypename"]."'>".$result2["questiontypename"]."</option>";
		}
	?>
	</select>
	<br>	
	<div id="timu01">
		
	</div>
	<table width="100%">
		<tr valign="middle" align="center">
			<td align="right">每题分值：<input type="number" name="score" id="score"></td>
			<td align="left"><input type="submit" value="确定添加" name="submit" /></td>
		</tr>
	</table>
</form>
</body>
</html>