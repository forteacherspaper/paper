<?php require_once('../connections/conn.php'); ?>
<?php
error_reporting(E_ERROR|E_WARNING|E_PARSE);
//$link=mysqli_connect("localhost","root","");
//mysql_select_db("paper1",$link) or die("no such database!");
//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);    //Ajax中先用encodeURIComponent对要提交的中文进行编码
mysqli_query($conn,"set names 'utf8'");
$pid=$_GET["pid"];
$res=mysqli_query($conn,"select id,sectionname from section where chapterid=$pid");
header('Content-type: text/html;charset=utf-8');   //指定发送数据的编码格式为GB2312
while($info=mysqli_fetch_array($res)){
   $str.=$info[0].",".$info[1];
   $str.=";";
}
echo $str;
?>