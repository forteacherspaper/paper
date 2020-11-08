<?php require_once '../connections/conn.php';?>
<?php
    MySQLi_query($conn, "set names 'utf8'");
    $Result1=false;  //假设插入不成功
    if(isset($_POST['CourseName'])){
        $coursename=$_POST['CourseName'];
        $insertSQL="insert into course(coursename,manager) values('$coursename','吴美娜')";
        $Result1= mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));
    }
 
    mysqli_close($conn);
    if($Result1){
        echo "<script>alert('插入成功！');</script>";
    }else{
        echo "<script>alert('插入失败！');</script>";
    }
    
?>
<meta http-equiv="refresh" content="1;url=courselist.php">




