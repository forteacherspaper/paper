<?php require_once('../connections/conn.php');?>
<?php
    //error_reporting(E_All & ~E_DEPRECATED);
	 $colname_TopicInfo="-1";
	 if(isset($_POST['question'])){
		 $colname_TopicInfo=trim($_POST['question']);
		 $questiontype=$_POST['questiontype'];
	 }    
	 $query_Topicinfo="select * from question where question like '%$colname_TopicInfo%' and questiontypeid='$questiontype'";
	 mysqli_query($conn,"set names 'utf8'");//设置字符编码格式
	 //$topicinfo=mysqli_query($conn,$query_TopicInfo) or die(mysqli_error($conn));//查询数据
	 //mysqli_fetch_assoc从结果集中取出一行数据，成为相关数组，键名是字段名，值是数据
	 //$row_topicinfo=mysqli_fetch_assoc($topicinfo);//
	 //$query_topic="select * from question where questiontypeid='%s'";
	$Topic=mysqli_query($conn,$query_Topicinfo) or die(mysqli_error($conn));
	$row_topic=mysqli_fetch_assoc($Topic);
	//mysqli_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>查询题目</title>
<style type="text/css">
		.a{
				font-family: 黑体;
				font-size: 25px;
				background-color:aliceblue;
				text-decoration: none;
			}
	</style>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center">
	   <tr>
            <td height="68" colspan="4" align="center">
                <font face="隶书" size="+4" color="#cccc00">组卷系统-题目管理</font>
            </td>
            
        </tr>
        
         <tr>
            <td width="15%" height="20%" align="left" valign="middle" class="a">
                <a href="../index.php">首页</a>
            </td>
            <td width="15%" height="20%" class="a"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="20%" class="a"><a href="../teacher/teachermanage.php">教师管理</a></td>
            <td width="15%" height="20%" class="a"><a href="../topic/topicmanage.php">题目管理</a></td>
            <td width="15%" height="20%" class="a"><a href="../chapter/chapterlist.php">课程章节管理</a></td>
            <td width="20%" height="20%" align="left" valign="middle" class="a">
                <a href="../paper/index.php">组卷系统</a>
            </td>
        </tr>
        <tr><table><hr></table></tr>
        <tr>
			<td height="169" colspan="5" align="center">
				<table width="100%" border="0" align="center">
					<tr valign="middle">
		                            <td align="center"><b>题号</b></td>
		                            <td align="center"><b>题干</b></td>
		                            <td align="center"><b>题型</b></td>
		                            <td align="center"><b>答案</b></td>
		                            <td align="center"><b>出题人</b></td>
		                            <td align="center"><b>创建时间</b></td>
		                            <td align="center"><b>最后修改时间</b></td>
					</tr> 
					<?php do{ ?>
							<tr>
					            <td width="10%" align="center">
									<?php echo $row_topic['sectionid'];?>
								</td>
					            <td width="10%" align="center">
									<?php echo $row_topic['question'];?>
								</td>
					            <td width="10%" align="center">
									<?php echo $row_topic['questiontypeid'];?>
								</td>
								<td width="10%" align="center">
									<?php echo $row_topic['answer'];?>
								</td>
								<td width="10%" align="center">
									<?php echo $row_topic['username'];?>
								</td>
					            <td width="10%" align="center">
									<?php echo $row_topic['gmt_create'];?>
								</td>
					            <td width="10%" align="center">
									<?php echo $row_topic['gmt_modified'];?>
								</td>
							</tr>
					<?php }while ($row_topic=mysqli_fetch_assoc($Topic));?>
					 <tr>
                            <td colspan="6" align="center" valign="middle"><a href="topicmanage.php"><input type="submit" name="submit" value="返回"/></a></td>
                        </tr>
	            </table>
			</td>
		</tr>
        <tr>
			<td colspan="6">
				<table width="100%" border="0">
					<hr>
					<tr>
                    	<td align="center" valign="middle">Copyright@2020 组卷系统-题目管理</td>
                	</tr>
				</table>	
			</td>
		</tr>
    </table>
</body>
</html>