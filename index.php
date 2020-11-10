<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>首页-教师组卷系统</title>
      <style type="text/css">
            * {
                margin: 0px;
                padding: 0px;
            }
            #lunbotu {
                width: 1290px;
                height: 496px;
                overflow: hidden;
                position: relative;
                margin: 0px auto;
                position: relative;
            }

            #banner {
                height: 496px;
                width: 6130px;
                position: absolute;
                transition: 2s;
                left: 0px;
            }
            #banner img {
                float: left;
            }
            #biao {
                position: absolute;
                top: 430px;
                left: 43%;
            }
            #biao_1 {
                height: 20px;
                width: 20px;
                border: 1px solid #000;
                z-index: 10;
                float: left;
                list-style: none;
                border-radius: 50%;
                margin-left: 20px;
                text-align: center;
                cursor:pointer;
            }
            
           #head{
				background-color: aliceblue;
				height: 20px;
			}
            #mune{
				margin:0px 0;
				height: 85px;
				background-color:aliceblue;
				text-decoration: none;
			}
			#mune ul{
				list-style: none;
			}
			#mune ul li{
				float: left;
				margin: 20px 50px;
				font-family: 黑体;
				font-size: 22px;
				color: white;
			}
			#foot{
				height:30px;
				background-color:powderblue;
				margin: 0px 0px;
				font-size:30;
			}
            body{
                background: aliceblue;
                text-decoration: none;
            }
            a:link{
                 text-decoration: none;
            }
		</style>
</head>
<body>
    <tr height="60">
           <p align="center"> <td align="center" colspan="6" ><font face="隶书" size="+5" color="#000000">教师组卷系统</font></td></tr> </p>
		<div id="head">
			<p align="right"><font color="black">
            <?php if(isset($_SESSION["username"])){ 
            echo $_SESSION['username'];
                ?> 
            <a class="reg"  target="_blank" href="logout.php">【退出】</a>
        <?php }else{ ?>
            <a class="login" href="login.php">【登录】</a>
            <?php } ?>
        </font></p>
		</div>
<!--导航栏-->
        <div id="mune">
				<ul>
					<li><a href="index.php">网站首页</a></li>
                                        <li><a href="teacher/teachermanage.php">教师管理</a></li>
					<li><a href="course/courselist.php">课程管理</a></li>
					<li><a href="chapter/chapterlist.php">章节管理</a></li>
					<li><a href="topic/topicmanage.php">题目管理</a></li>
					<li><a href="paper/index.php">组卷系统</a></li>
				</ul>    
		</div>    
				
<!--图片轮播-->
	<div id="lunbotu">
            <div id="banner">
                <img class="m" src="images/photo1.jpg" />
                <img class="m" src="images/photo2.jpg" />
                <img class="m" src="images/photo3.jpg" />
            </div>
            <div id="biao">
                <ul>
                    <li id="biao_1">1</li>
                    <li id="biao_1">2</li>
                    <li id="biao_1">3</li>
                </ul>
            </div>
        </div>

    <script type="text/javascript">
        var slid = document.getElementById("banner");
        //var id = document.getElementById("bt");
        var imgwidth = document.getElementsByClassName("m");
        var oli=document.getElementsByTagName("li");
        //console.log(oli);
        //console.log(imgwidth );
        var i =0;
        auto();
        oli[0].style.cssText="background:;color:#fff;";
        function auto(){

            time = setInterval(function(){
                i++;
            if(i <= 4) {
                slid.style.left = slid.offsetLeft - 1226 + "px";
                oli[i].style.cssText="background:;color:#fff;";
                oli[i-1].style.cssText="background:none;color:#000;";
            } else {
                slid.style.left ="0px";
                oli[4].style.cssText="background:none;color:#000;";
                oli[0].style.cssText="background:;color:#fff;";
                i=0;
            }
            console.log(i);

        }, 3000)

        }

            for(var j=0;j<=4;j++){
                //console.log(imgwidth[j].index);
            imgwidth[j].index=j;
            oli[j].index=j;
            oli[j].onmouseover=function(){
                this.style.cssText="background:;color:#fff;"    
                this.onmouseout=function(){
                    this.style.cssText="background:none;color:#000;"
                }
            }

            oli[j].onclick=function(){
                clearInterval(time);
                m=this.index;
                slid.style.left=-m*1226+"px";    
                i=m;
                auto();
                console.log(i);
            }
            }    
    </script>
<!--图片轮播结束-->	

<!--底部设计-->
            <div id="foot">
		<p align="center"><font color="white">版权所有&copy;郑州师范学院</font></p>
	    </div>
	</body>
</html>