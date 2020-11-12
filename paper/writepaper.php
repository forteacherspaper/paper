<?php require_once('../connections/conn.php'); ?>
<?php require '../connections/isrealuser.php'; ?>
<?php require '../connections/course.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>试卷显示</title>
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
            <p align="center"><td colspan="3" align="center">
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
                <a href="index.php">组卷系统</a>
            </td>
        </tr>
        <tr align="center"><td colspan="6" align="center">
        	<?php
if(isset($_GET['paperid']))
	{
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

	$query_paper="select papername from paper where id='$paperid'";
    $paper2=mysqli_query($conn,$query_paper) or die(mysql_error($conn));
    $row_paper2=mysqli_fetch_assoc($paper2);
	$name = $row_paper2['papername'];

	$query_ques="select question,answer,questiontypeid,score from question,paperquestion where question.id=paperquestion.questionid and paperid=$paperid ";
	$ques=mysqli_query($conn,$query_ques) or die(mysqli_error($conn));
	$row_ques=mysqli_fetch_all($ques,MYSQLI_ASSOC);

	echo '<h3>'.$name.'——试题</h3>';
	$tx=array_column($row_ques, 'questiontypeid');
	$txcount=array_count_values($tx);
	$timu="";
	$tihao=[1=>'一、',2=>"二、",3=>"三、",4=>"四、",5=>"五、",6=>"六",7=>"七",8=>"八、"];
	$i=1;
	$j=0;
	foreach ($txcount as $key => $value) {
		$timu.=$tihao[$i].$key."（有小题{$value}道，每小题{$row_ques[$j]['score']}分，共".$value*$row_ques[$j]['score']."分。）<br/>";
		for($jj=1;$jj<=$value;$jj++,$j++)
		{
			$timu.="{$jj}、".$row_ques[$j]["question"]."<br/>";
		}
		$i++;
	}
	echo "$timu";

	echo "<br><br>";

	
	echo '<h3>'.$name.'——答案</h3>';
	$daan="";
	$i=1;
	$j=0;
	foreach ($txcount as $key => $value) {
		$daan.=$tihao[$i].$key."（有小题{$value}道，每小题{$row_ques[$j]['score']}分，共".$value*$row_ques[$j]['score']."分。）<br/>";
		for($jj=1;$jj<=$value;$jj++,$j++)
		{
			$daan.="{$jj}、".$row_ques[$j]["answer"]."<br/>";
		}
		$i++;
	}
	echo "$daan";

	
?>
        </td></tr></table>
	
</body>
</html>