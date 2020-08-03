<?php require_once 'connections/conn.php';?>
<?php
$pageRows=6;//每页多少条数据
$page=1;//第几页，刚开始假设是第1页
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
MySQLi_query($conn,"set names 'utf8'");
$query_Course="select * from course";
$all_Course= mysqli_query($conn, $query_Course);//得到全部课程
$totalRows= mysqli_num_rows($all_Course);//总行数，即共有多少科
$totalPages=ceil($totalRows/$pageRows);//总页数
if($totalPages<1)
    $totalPages=1;
//页号的合法性检查
if($page<1) $page=1;
if($page>$totalPages) $page=$totalPages;
$startRow=($page-1)*$pageRows;//起始行
//limit语法：m，n从m+1条记录开始，取n条记录
$query_limit= sprintf("%s limit %d,%d",$query_Course,$startRow,$pageRows);
$Course= mysqli_query($conn, $query_limit) or die(mysqli_errno($conn));
$row_Course= mysqli_fetch_assoc($Course);//得到数据行的关联数组，键是字段名，值是数据
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
<title>课程管理</title>
</head>
    <body bgcolor="#f4f4f4">
        <table width="100%" border="0" align="center"/>
            <tr>
                <td hight="68" colspan="6" align="center">
                    <font face="隶书" size="+4" color="darkcyan">课程管理</font>
                </td> 
            </tr>
            <tr>
            <td width="15%" height="20%" align="center" valign="middle">
                <a href="querycourse.php">首页</a>
		</td>
            <td width="15%" height="20%" align="center" valign="middle">
                    <a href="allcourselist.php">所有课程</a>
		</td>
            <td width="20%" height="20" align="center">
                    <a href="allcourselist_pg.php">所有课程（分页）</a>
                </td>
            <td width="15%" height="20" align="center" valign="middle">
                    <a href="addcourse.php">插入课程</a>
                </td>
            <td width="15%" height="20" align="center" valign="middle">
                    <a href="editcourse.php">编辑课程信息</a>
                </td>		   
            <td width="20%" height="20" align="center" valign="middle">
                    <a href="deletecourse.php">删除课程</a>
        </tr>
            <tr>
                <td height="169" colspan="6" align="center">
                <table width="100%" border="0">
                <tr>
                    <td colspan="6" align="center"><h2>所有课程</h2></td>
                </tr>
            <tr valign="middle" height="20">
                    <td align="center"><b>序号</b></td>
                    <td align="center"><b>课程名称</b></td>
                    <td align="center"><b>管理员</b></td>
                    <td align="center"><b>创建时间</b></td>
                    <td align="center"><b>最后修改时间</b></td>            
            </tr>
                            <?php do{ ?>
                            <tr valign="middle" align="center" height="20">
                                <td><?php echo $row_Course['id'];?></td>
                                <td><?php echo $row_Course['coursename'];?></td>
                                <td><?php echo $row_Course['manager'];?></td>
                                <td><?php echo $row_Course['gmt_create'];?></td>
                                <td><?php echo $row_Course['gmt_modified'];?></td>
                            </tr>
                            <?php }while ($row_Course= mysqli_fetch_assoc($Course));
                            ?>
                </table>
            </td>
                
        </tr>
            <tr>
                <td colspan="2"align="center">
                    <?php
			if($page==1)echo "首页";
                            else{
				echo "<a href='allcourselist_pg.php?page=1'>首页</a>";
				}
                    ?>
                </td>
                <td align="center">
                    <?php
                        if($page==1) echo "上一页";
                            else{
                                $newpage=$page-1;
                                echo "<a href='allcourselist_pg.php?page={$newpage}'>上一页</a>";
                                }
                    ?>
                    </td>
                <td align="center">
                    <?php 
			if($page==$totalPages) echo "下一页";
                            else{
				$newpage=$page+1;
				echo "<a href='allcourselist_pg.php?page={$newpage}'>下一页</a>";
				}
                    ?>
                    </td>
                <td  colspan="2" align="center">
                    <?php
			if($page==$totalPages) echo "尾页";
                            else{
				$newpage=$totalPages;
				echo "<a href='allcourselist_pg.php?page={$newpage}'>尾页</a>";
				}
                    ?>
               </td>
            </tr>
            <tr>
			<td colspan="6"><table width="100%" border="0">
			<hr>
			<tr>
				<td align="center" valign="middle">Copyright@2006 lanmo</td>
			</tr>
			<tr>
				<td align="center" valign="middle">XXX Email:lanmo@myweb.com </td>
                        </tr>
                        </table>
			</td>
            </tr>
        </body>
    </html>

