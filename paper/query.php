<?php require_once('../connections/conn.php');?>
<?php
error_reporting(E_ERROR|E_WARNING|E_PARSE);
//$link=mysql_connect("localhost","root","root");
//mysql_select_db("sortclass",$link) or die("no such database!");
//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);  //Ajax中先用encodeURIComponent对要提交的中文进行编码
mysqli_query($conn,"set names 'utf8'");
$pid=$_GET["pid"];
$tid=$_GET["tid"];
$res=mysqli_query($conn,"select id,question,answer from question where questiontypeid='$tid' and sectionid in(select id from section where chapterid =$pid)");
header('Content-type: text/html;charset=utf-8');
$str="";
if(mysqli_fetch_row($res)>0)
{
	$str="<table><tr><td>选择题目</td><td>题干</td><td>答案</td></tr>";
while($info=mysqli_fetch_array($res)){
   $str.="<tr><td><input type='checkbox' name='xztm[]' value='$info[0]'</td><td>".$info[1]."</td><td>".$info[2]."</td></tr>";
    }
    $str.="</table>";
}else
{
	$str="没有该章该题型的题目。";
}
echo $str;

/*echo "\n";

$timu=mysqli_query($conn,"select question from question where questiontypeid='$tid' and sectionid in(select id from section where chapterid =$pid)");
while($info2=mysqli_fetch_array($timu)){
   $str2.=$info2[0];
   $str2.="\n";
}
echo $str2;*/

?>