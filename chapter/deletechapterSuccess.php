<?php require_once '../connections/conn.php';?>
<?php
mysqli_query($conn,"set names 'utf8'");
if(isset($_POST["chaptername"]))
{
    $query_chapter= sprintf("update chapter set courseid='%s',chaptername='%s',number='%s',gmt_modified='%s' where id=%s",
           $_POST['courseid'],
           $_POST['chapterName'],
           $_POST['number'],
           $_POST['Gmt_modified'],
           $_POST['id']);
    $editchapter= mysqli_query($conn, $query_chapter) or die(mysqli_error($conn));
}
header("Location:allchapter.php");
?>
