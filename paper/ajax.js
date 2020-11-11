var http_request = false;
function createRequest(url) {
//初始化对象并发出XMLHttpRequest请求
http_request = false;
if (window.XMLHttpRequest) {            //Mozilla等其他浏览器
   http_request = new XMLHttpRequest();
   if (http_request.overrideMimeType) {
    http_request.overrideMimeType("text/xml");
   }
} else if (window.ActiveXObject) {          //IE浏览器
   try {
    http_request = new ActiveXObject("Msxml2.XMLHTTP");
   } catch (e) {
    try {
     http_request = new ActiveXObject("Microsoft.XMLHTTP");
     } catch (e) {}
   }
}
if (!http_request) {
   alert("不能创建XMLHTTP实例!");
   return false;
}
http_request.onreadystatechange = alertContents;         //指定响应方法

http_request.open("GET", url, true);         //发出HTTP请求
http_request.send(null);
}
function alertContents() {                   //处理服务器返回的信息
if (http_request.readyState == 4) {
    if (http_request.status == 200) {
    var smallClassName=document.getElementById("timu01");
    smallClassName.innerHTML=http_request.responseText;

    //var bigClassName=document.getElementById("timu02");
    //bigClassName.innerText=http_request.responseText;

    /*var big2ClassName=document.getElementById("timu03");
    //big2ClassName.innerText=http_request.responseText;
    //big2ClassName.innerText.add("<tr><td>选择</td><td>题目</td><td>答案</td></tr>");
    //big2ClassName.innerText=http_request.responseText;
    var timutext=http_request.responseText;
    //var dataArray=[];
    var tt="";
    //big2ClassName.innerText=timutext;

    var stringArray = timutext.split(";;;;");//以;分隔字符串
    var len=stringArray.length;//题目数量
    for(var i=0;i<len;i++){   
       var dataArray= stringArray[i].split(",,,,");// 循环数据条数按,分割字符串
       tt=tt+dataArray[0]+"|"+dataArray[1]+"|"+dataArray[2]+"<br/>";
       // big2ClassName.innerText.add("<tr><td><input type='checkbox' name='tmsl[]'</td><td>"+dataArray[i][1]+"</td><td>"+dataArray[i][2]+"</td></tr>");
       //big2ClassName.innerText.add("<div>"+dataArray[i][0]+"</div><div>"+dataArray[i][1]+"</div><div>"+dataArray[i][2]+"</div>")
      //big2ClassName.innerText.add(dataArray[0]+"<br/>"+dataArray[1]+"<br/>"+dataArray[2]+"<br/>")
      //big2ClassName.innerText.add(stringArray[i]+"<br/>");
    }
     big2ClassName.innerText=tt;*/
  
    //alert(http_request.responseText);

    //smallClassName.innerHtml=http_request.responseText;
    /*var dataArray=[];

    //alert(http_request.responseText);
    myVariable=http_request.responseText;//形如: 1,新闻中心;2,学习园地;
    var stringArray = myVariable.split(";");//以;分隔字符串
    stringArray.pop();//移除数组最后一个元素,stringArray[0]==1,新闻中心 stringArray[1]==2,学习园地   
    var len=stringArray.length;
    for(var i=0;i<len;i++){   
     dataArray[i]= stringArray[i].split(",");// 循环数据条数按,分割字符串
    }
    //alert(dataArray[1][0]);//返回 新闻中心
    //初始化smallClassName的数据
    smallClassName.length=0;
    var alertOption=document.createElement_x("OPTION");
    alertOption.value="";
    alertOption.text="--选择题目--";
    smallClassName.add(alertOption);
   
    for(var j=0;j<len;j++){//添加数据
       var objOption=document.createElement_x("OPTION");
     objOption.value = dataArray[j][0];
     objOption.text = dataArray[j][1];
     smallClassName.add(objOption);
    }*/
   
   } else {
    alert('您请求的页面发现错误');
   }
}
}