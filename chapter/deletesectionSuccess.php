<?php require_once '../connections/conn.php';?>
<?php
mysqli_query($conn,"set names 'utf8'");
if(isset($_POST["sectionname"]))
{
    $query_section= sprintf("update section set chapterid='%s',sectionname='%s',number='%s' where id=%s",
           $_POST['chapterid'],
           $_POST['sectionName'],
           $_POST['number'],
           $_POST['id']);
    $editsection= mysqli_query($conn, $query_section) or die(mysqli_error($conn));
}
header("Location:allsection.php");
?>
