<?php require_once 'connections/conn.php';?>
<?php
    $Result1=false;  //假设插入不成功
    if(isset($_POST['Id'])){
        $id=$_POST['Id'];
        $coursename=$_POST['CourseName'];
        $manager=$_POST['Manager'];
        $gmt_create=$_POST['Gmt_Create'];
        $gmt_modified=$_POST['Gmt_Modified'];
        $insertSQL="insert into course(id,coursename,manager,gmt_create,gmt_modified) values($id,'$coursename','$manager','$gmt_create','$gmt_modified')";
        $Result1= mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));
    }
    mysqli_close($conn);
    if($Result1){
        echo "<script>alert('插入成功！');</script>";
    }else{
        echo "<script>alert('插入失败！');</script>";
    }
?>
<meta http-equiv="refresh" content="1;url=allcourselist.php">




