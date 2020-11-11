<?php require_once '../connections/conn.php';?>
<?php
mysqli_query($conn,"set names 'utf8'");
if(isset($_POST["ID"]))
{
    $query_paper= sprintf("update paper set papername='%s' where id=%s",
           $_POST['papername'],
           $_POST['ID']);
    $editpaper= mysqli_query($conn, $query_paper) or die(mysqli_error($conn));
}
	header("Location:paperlist.php");
?>
