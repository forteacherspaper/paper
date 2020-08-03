<?php require_once 'connections/conn.php';?>
<?php
    mysqli_query($conn,"set names 'utf8'");
    $Result1=false;  //假设插入不成功
    if(isset($_POST['Name'])){
        $name=$_POST['Name'];
        $username=$_POST['UserName'];
        $password=$_POST['Password'];
        $email=$_POST['Email'];
        $gmt_create=$_POST['Gmt_create'];
        $gmt_modified=$_POST['Gmt_modified'];
        $insertSQL="insert into teacher(name,username,password,email,gmt_create,gmt_modified) values('$name','$username','$password','$email','$gmt_create','$gmt_modified')";
        $Result1= mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));
    }
    mysqli_close($conn);
    if($Result1){
        echo "<script>alert('插入成功！');</script>";
    }else{
        echo "<script>alert('插入失败！');</script>";
    }
?>
<meta http-equiv="refresh" content="1;url=teachermanage.php">



