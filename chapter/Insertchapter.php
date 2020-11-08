<?php require_once '../connections/conn.php';?>
<?php require'../connections/isrealuser.php';?>
<?php
     if(!isset($_SESSION["courseid"]))
        header("location:../selectcourse.php");//判断是否选择课程
    else
        $courseid=$_SESSION["courseid"];
    $Result1=false;  //假设插入不成功
    if(isset($_POST['chaptername'])){
        //$courseid=1;//从Session中获取课程id
        $name=$_POST['chaptername'];
        $number=$_POST['number'];
        $insertSQL="insert into chapter(courseid,chaptername,number) values($courseid,'$name',$number)";
        echo $insertSQL;
        mysqli_query($conn,"set names 'utf8'");
        $Result1= mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));
    }
    mysqli_close($conn);
    if($Result1){
        echo "<script>alert('插入成功！');</script>";
    }else{
        echo "<script>alert('插入失败！');</script>";
    }
?>
<meta http-equiv="refresh" content="1;url=chapterlist.php">


