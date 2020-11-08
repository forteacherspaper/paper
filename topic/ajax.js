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
    var smallClassName=document.getElementById("smallClassName");
    var dataArray=[];

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
    var alertOption=document.createElement("OPTION");
    alertOption.value="";
    alertOption.text="--选择节--";
    smallClassName.add(alertOption);
   
    for(var j=0;j<len;j++){//添加数据
       var objOption=document.createElement("OPTION");
     objOption.value = dataArray[j][0];
     objOption.text = dataArray[j][1];
     smallClassName.add(objOption);
    }
   
   } else {
    alert('您请求的页面发现错误');
   }
}
}