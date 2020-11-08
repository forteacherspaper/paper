<?php require_once 'connections/conn.php';?>
<?php
session_start();
// 处理用户登录信息
$user=trim($_POST['username']);/*获取登录表单提交过来的数据*/
$pwd=trim($_POST['password']);
$sql = "select * from `teacher` where `username` = '$user' and `password` = '$pwd'";
$teacherinfo=mysqli_query($conn,$sql) or die(mysqli_error($conn));//查询数据
//$row=mysqli_fetch_array($teacherinfo);
//echo $row["0"];
$row=mysqli_num_rows($teacherinfo);
//echo $row;
//echo $row["0"];
if($row>0){
    echo "<script>alert('成功！');</script>";
    header('location:selectcourse.php');
    $_SESSION['username']=$user;
}else{
    header('refresh:3; url=login.php');
    echo "用户名或密码错误或为空,系统将在3秒后跳转到登录界面,请重新填写登录信息!";
    //header('location:login.php');
}
?>
