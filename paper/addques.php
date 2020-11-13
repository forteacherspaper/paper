<?php require_once('../connections/conn.php');?>
<?php require '../connections/isrealuser.php';?>
<?php require '../connections/course.php';?>
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
<style type="text/css">
		.b{
                font-size: 22px;
            }.a{
                font-family: 黑体;
                font-size: 16px;
                background-color:aliceblue;
                text-decoration: none;
                background-color: #ced1f2;
            }
            body{
                background: aliceblue;
                text-decoration: none;
            }
             a:link{
                 text-decoration: none;
                 color:#000000;
            
            }
            a:visited{
                color:#000000;
             }
             a:hover{
                color:#000000;
             }
             a:active{
                color:#000000;
             }
    </style>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
        
        <tr>
            <td></td>
            <p align="center"><td colspan="4" align="center">
                <font face="隶书" size="+3" color="#000000">组卷系统-试卷管理</font>
            </td></p>
            <td><div>
            <p align="right"><font>
                 <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="../logout.php">【退出】</a><br/>
                <?php
                echo "当前课程：".$coursename;
                ?>
                </p>
            </div></td>
        </tr>
        
       <tr>
            <td width="15%" height="40px" align="center" valign="middle" class="a">
                <a href="../index.php">首页</a>
            </td>
            <td width="15%" height="40px" class="a"><a href="../teacher/teachermanage.php">教师管理</a></td>
            <td width="15%" height="40px" class="a"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="40px" class="a"><a href="../chapter/chapterlist.php">章节管理</a></td>
            <td width="15%" height="40px" class="a">
                <a href="../topic/topicmanage.php">题目管理</a>
            </td>
            <td width="15%" height="40px"  class="a">
                 <a href="paperlist.php">组卷系统</a>
            </td>
        </tr>
        <tr><td><br><br><br></td></tr>
        <tr align="center"><td colspan="6" align="center">
		<h2>试卷名称：<?php echo $row_paper['papername'] ?> </h2>
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
			</td></tr>
			<br>	
			<tr>
					<td align="center" colspan="6">每题分值：<input type="number" name="score" id="score">
					<input type="submit" value="确定添加" name="submit" /></td>
				</tr>
				<tr><td colspan="6"><br><br><br></td></tr>
				<tr><td colspan="6"><hr></td></tr>
			 <tr>
                        <td align="center" colspan="6" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                    </tr></table>
</form>
</body>
</html>