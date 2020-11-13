<?php require_once('../connections/conn.php');?>
<?php require '../connections/isrealuser.php';?>
<?php
    mysqli_query($conn,"set names 'utf8'");
    if(!isset($_SESSION["courseid"]))
       header("location:../selectcourse.php");

    if(isset($_POST['papername']))
    {
        $courseid=$_SESSION["courseid"];//
        $username=$_SESSION['username'];
        $papername=$_POST['papername'];  
        $insertSQL="insert into paper(papername,courseid,username) values('$papername','$courseid','$username')";
        $result = mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));
    }   
    mysqli_close($conn);
    if($result){
        echo "<script>alert('插入成功！');</script>";
    }else{
        echo "<script>alert('插入失败！');</script>";
    }
 ?>
<meta http-equiv="refresh" content="1;url=paperlist.php">