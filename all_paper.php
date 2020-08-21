<?php require_once 'connections/conn.php';?>
<?php
$pageRows=6;//每页多少条数据
$page=1;//第几页，刚开始假设是第1页
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
MySQLi_query($conn,"set names 'utf8'");
$query_Chapter="select * from chapter";
$all_Chapter= mysqli_query($conn, $query_Chapter);//得到全部章节
$totalRows= mysqli_num_rows($all_Chapter);//总行数，即共有多少章
$totalPages=ceil($totalRows/$pageRows);//总页数
if($totalPages<1)
    $totalPages=1;
//页号的合法性检查
if($page<1) $page=1;
if($page>$totalPages) $page=$totalPages;
$startRow=($page-1)*$pageRows;//起始行
//limit语法：m，n从m+1条记录开始，取n条记录
$query_limit= sprintf("%s limit %d,%d",$query_Chapter,$startRow,$pageRows);
$Chapter= mysqli_query($conn, $query_limit) or die(mysqli_errno($conn));
$row_Chapter= mysqli_fetch_assoc($chapter);//得到数据行的关联数组，键是字段名，值是数据
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
<title>章节管理</title>
</head>
    <body bgcolor="#f4f4f4">
		<table width="100%">
			<tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章节管理</font></td></tr>              
                        <tr align="center" height="100"><td><a href="querypaper.php.php">首页</a></td>
				<td align="center" valign="middle"><a href="allpaper.php">所有章节</a></td>
				<td align="center" valign="middle"><a href="all_paper.php">所有章节(分页)</a></td>
				<td align="center" valign="middle"><a href="addpaper.php">添加章节</a></td>
				<td align="center" valign="middle"><a href="editpaper.php">编辑章节信息</a></td>
				<td align="center" valign="middle"><a href="deletepaper.php">删除章节</a>
			</td></tr>
			<table border="0"  width="100%">
                             <tr>
                                <td colspan="6" align="center"><h2>所有章节</h2></td>
                            </tr>
                             <tr>
                                <td  valign="middle" align="center"><b>本章所属的课程id</b></td>
                                <td  valign="middle" align="center" ><b>章名称</b></td>
                                <td  valign="middle"  align="center"><b>章号</b></td>
				</tr>
                             <?php do{ ?>
                            <tr valign="middle" align="center">
                                <td><?php echo $row_Paper['courseid'];?></td>
                                <td><?php echo $row_Paper['chaptername'];?></td>
                                <td><?php echo $row_Paper['chapterId'];?></td>
                               </tr>
                            <?php }while ($row_Chapter= mysqli_fetch_assoc($Chapter));
                            ?>
			</table>
                          <tr>
                <td colspan="2"align="center">
                    <?php
			if($page==1)echo "首页";
                            else{
				echo "<a href='all_paper.php?page=1'>首页</a>";
				}
                    ?>
                </td>
                <td align="center">
                    <?php
                        if($page==1) echo "上一页";
                            else{
                                $newpage=$page-1;
                                echo "<a href='all_paper.php?page={$newpage}'>上一页</a>";
                                }
                    ?>
                    </td>
                <td align="center">
                    <?php 
			if($page==$totalPages) echo "下一页";
                            else{
				$newpage=$page+1;
				echo "<a href='all_paper.php?page={$newpage}'>下一页</a>";
				}
                    ?>
                    </td>
                <td  colspan="2" align="center">
                    <?php
			if($page==$totalPages) echo "尾页";
                            else{
				$newpage=$totalPages;
				echo "<a href='all_paper.php?page={$newpage}'>尾页</a>";
				}
                    ?>
               </td>
            </tr>
			 <tr>
            <td colspan="6"><table align="center">
                <hr>
                <tr>
                    <td align="center" valign="middle">Copyright@2020 yingzhong</td>
		</tr>
		<tr>
                    <td align="center" valign="middle">XXX Email:yingzhong@myweb.com </td>
                </tr>
		</table>
	</body>
</html>

