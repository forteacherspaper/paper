<?php require_once 'conn.php';?>
<?php
    if(isset($_SESSION["courseid"]))
    {
    	$courseid=$_SESSION["courseid"];
    	mysqli_query($conn,'set names utf8');
    	$sql="select coursename from course where id=$courseid";
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	    $name=mysqli_fetch_assoc($res);
	    $coursename=$name["coursename"];
    }
    else
    {
    	header("location:selectcourse.php");
    }
?>