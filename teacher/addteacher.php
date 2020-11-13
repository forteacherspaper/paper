<?php require'../connections/isrealuser.php';?>
<?php
    if($_SESSION['username']!="admin")
    {
       header("location:../login.php");
    }
?>
<?php
date_default_timezone_set('prc');
$data=date('Y-m-d H:i:s',time());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"  charset="utf-8"/>
    <title>添加教师</title>
     <style type="text/css">
        .a{
                font-family: 黑体;
                font-size: 16px;
                background-color:aliceblue;
                text-decoration: none;
                background-color: #ced1f2;
            }
            body{
                background: aliceblue;
                text-decoration: none;
            }
             a:link{
                 text-decoration: none;
                 color:#000000;
            
            }
            a:visited{
                color:#000000;
             }
             a:hover{
                color:#000000;
             }
             a:active{
                color:#000000;
             }

    </style>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
        
        <tr>
            <td></td>
            <p align="center"><td colspan="4" align="center">
                <font face="隶书" size="+3" color="#000000">组卷系统-教师管理</font>
            </td></p>
            <td><div>
            <p align="right"><font>
                <?php
                echo $_SESSION['username'];
                ?>
                <a class="login" href="../logout.php">【退出】</a></font><br/>
               
                </p>
            </div></td>
        </tr>
        
       <tr>
            <td width="15%" height="40px" align="center" class="a"><a href="../index.php">首页</a> </td>
            <td width="15%" height="40px" class="a" align="center"><a href="teachermanage.php">教师管理</a></td>
            <td width="15%" height="40px" class="a"align="center"><a href="../course/courselist.php">课程管理</a></td>
            <td width="15%" height="40px" class="a" align="center"><a href="../chapter/chapterlist.php">章节管理</a></td>
            <td width="15%" height="40px" class="a" align="center"><a href="../topic/topicmanage.php">题目管理</a></td>
            <td width="15%" height="40px"  class="a" align="center"> <a href="../paper/paperlist.php">组卷系统</a></td>
        </tr>
        <tr><table><hr></table></tr>
        <tr>
            <td height="169" colspan="6" align="center">
                <form id="forml" name="forml" method="post" action="addsuccess.php">
                    <table width="100%" border="0" align="center">
                        <tr><td height="68" colspan="6" align="center"><h2>添加教师信息</h2></td></tr>
                        <tr>
                            <td width="40%" align="right" colspan="3" valign="middle">姓名:</td>
                            <td align="left" valign="middle" colspan="3"><input name="Name" type="text" id="Name"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" colspan="3" valign="middle">用户名:</td>
                            <td align="left" valign="middle" colspan="3"><input name="UserName" type="text" id="UserName"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" colspan="3" valign="middle">密码:</td>
                            <td align="left" valign="middle" colspan="3"><input name="Password" type="text" id="Password"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" colspan="3" valign="middle">邮箱:</td>
                            <td align="left" valign="middle" colspan="3"><input name="Email" type="text" id="Email"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right"colspan="3" valign="middle">创建时间:</td>
                            <td align="left" valign="middle" colspan="3"><input name="Gmt_create" type="text" id="Gmt_create" value="<?php echo $data;?>"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right" colspan="3" valign="middle">最后修改时间:</td>
                            <td align="left" valign="middle" colspan="3"><input name="Gmt_modified" type="text" id="Gmt_modified" value="<?php echo $data;?>"></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="center" valign="middle"><input type="submit" name="submit" value="提交"/></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="6"><table align="center">
                <hr>
                <tr>
                    <td align="center" valign="middle">Copyright@2020 组卷系统-教师管理</td>
                </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

