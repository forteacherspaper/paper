<?php require_once 'connections/conn.php';?>
<?php
    $Result1=false;  //假设插入不成功
    if(isset($_POST['courseId'])){
        $id=$_POST['courseId'];
        $chaptername=$_POST['chapterName'];
        $Chapterid=$_POST['chapterId'];
        $insertSQL="insert into chapter(courseid,chaptername,chapterid  values($courseid,'$chaptername','$Chapterid')";
        $Result1= mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));
    }
    mysqli_close($conn);
    if($Result1){
        echo "<script>alert('插入成功！');</script>";
    }else{
        echo "<script>alert('插入失败！');</script>";
    }
?>
<meta http-equiv="refresh" content="1;url=allpaper.php">


