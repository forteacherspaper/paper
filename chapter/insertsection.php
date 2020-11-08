<?php require_once '../connections/conn.php';?>
<?php
    $Result1=false;  //假设插入不成功
    if(isset($_POST['sectionname'])){
        $courseid=1;
        $chapterid=1;
        $name=$_POST['sectionname'];
        $number=$_POST['number'];
        $insertSQL="insert into section(courseid,chapterid,sectionname,number) values($courseid,$chapterid,'$name',$number)";
        echo $insertSQL;
        $Result1= mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));
    }
    mysqli_close($conn);
    if($Result1){
        echo "<script>alert('插入成功！');</script>";
    }else{
        echo "<script>alert('插入失败！');</script>";
    }
?>
<meta http-equiv="refresh" content="1;url=allsection.php">


