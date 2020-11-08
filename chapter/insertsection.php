<?php require_once '../connections/conn.php';?>
<?php
    $Result1=false;  //假设插入不成功
/*     if(!isset($_SESSION["courseid"]))
        header("location:../selectcourse.php");//判断是否选择课程
    else
        $courseid=$_SESSION["courseid"];
    if(isset($_GET['chapterid']))
    {
        $chapterid=$_GET['chapterid'];
    }else
    {
        header("location:chapterlist.php");//判断是否选择课程
    }*/
    if(isset($_POST['sectionname'])){
       // $courseid=1;
        $chapterid=$_POST['chapterid'];
        $name=$_POST['sectionname'];
        $number=$_POST['number'];
        $lianxu=$_POST["lianxu"];
        $insertSQL="insert into section(chapterid,sectionname,number) values($chapterid,'$name',$number)";
        //echo $insertSQL;
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

<meta http-equiv="refresh" content="1;url=allsection.php">


