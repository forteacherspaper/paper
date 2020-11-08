<?php require_once '../connections/conn.php';?>
<?php 
 
if(isset($_POST['submit'])){
 
    $b1 = $_FILES['b1']['name'];
    $tmp1 = $_FILES['b1']['tmp_name']; 
    $b1l = $_POST['b1l'];
    $b2 = $_FILES['b2']['name'];
    $tmp2 = $_FILES['b2']['tmp_name'];
    $b2l = $_POST['b2l'];
 
    move_uploaded_file($tmp1,"ads/$b1");
    move_uploaded_file($tmp2,"ads/$b2");
 
    $insert_posts = "insert into ads (b1,b2) value ('$b1','$b2')";
    $run_posts = mysql_query($insert_posts);
}
?>
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


