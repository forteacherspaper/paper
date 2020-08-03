<?php require_once 'connections/conn.php';?>
<?php
mysqli_query($conn,"set names 'utf8'");
if(isset($_POST["ID"]))
{
    $query_Teacher= sprintf("update teacher set name='%s',username='%s',password='%s',email='%s',gmt_modified='%s' where id=%s",
           $_POST['Name'],
           $_POST['UserName'],
           $_POST['Password'],
           $_POST['Email'],
           $_POST['Gmt_modified'],
           $_POST['ID']);
    $editteacher= mysqli_query($conn, $query_Teacher) or die(mysqli_error($conn));
}
header("Location:teachermanage.php");
?>

