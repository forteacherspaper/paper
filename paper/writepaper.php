<?php require_once('../connections/conn.php'); ?>
<?php require '../connections/isrealuser.php'; ?>

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>试卷显示</title>
</head>
<body>
	
</body>
</html>