<?php require_once('../connections/conn.php');?>
<?php require '../connections/isrealuser.php';?>
<?php require '../connections/course.php';?>
<?php
    mysqli_query($conn,"set names 'utf8'");
    if(isset($_GET['paperid']))
    {
        $_SESSION["paperid"]=$_GET['paperid'];
        $paperid=$_GET['paperid'];
        
    }
    else if(isset($_SESSION["paperid"])) {
        
    }
    else
    {
        header("location:paperlist.php");
    }
    $num=0;
    foreach ($_POST['xztm'] as $v) {
        $paperid=$_SESSION["paperid"];
        $score=$_POST['score'];
        $selecttimu="select * from paperquestion where paperid=$paperid and questionid=$v";
        $res=mysqli_query($conn,$selecttimu);
        $count=mysqli_num_rows($res);
        if($count==0){
            $insertQuestion="insert into paperquestion(paperid,questionid,score) values($paperid,$v,$score)";
            $result= mysqli_query($conn, $insertQuestion) or die(mysqli_error($conn));
            if($result>0)
                $num++;
        }
        
        }
    mysqli_close($conn);
    if($num>0){
        echo "<script>alert('添加了 ".$num." 道题目，成功！');</script>";
    }else{
        echo "<script>alert('添加题目失败，存在重复添加题目！');</script>";
    }
 ?>
<meta http-equiv="refresh" content="1;url=paperqueslist.php">