<?php require_once '../connections/conn.php';?>
<?php
session_start();
$username=$_SESSION['username'];
    mysqli_query($conn,"set names 'utf8'");
    $Result1=false;  //假设插入不成功
    if(isset($_POST['question'])){
       // $sectionid=$_POST['sectionid'];
       // $sectionid=1;
        $question=trim($_POST['question']);
        //$username=trim($_POST['username']);;
        $questiontype=$_POST['questiontype'];
        $answer=trim($_POST['answer']);
        //$bigClassName=trim($_POST['bigClassName']);
        $smallClassName=trim($_POST['smallClassName']);
         //$insertSQL="insert into question(sectionid,question, questiontypeid,answer,username,gmt_create,gmt_modified) values($sectionid,'$question','$questiontype','$answer','$username','$gmt_create','$gmt_modified')";
        $insertSQL="insert into question(sectionid,question,questiontypeid,answer,username) values($smallClassName,'$question','$questiontype','$answer','$username')";
        echo($insertSQL);
        
        $Result1= mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));
        //echo $insertSQL;
        //$Result1= mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));
    }
    mysqli_close($conn);
    if($Result1){
        echo "<script>alert('插入成功！');</script>";
    }else{
        echo "<script>alert('插入失败！');</script>";
    }
    //echo "$insertSQL";
?>
<meta http-equiv="refresh" content="1;url=topicmanage.php">

