<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<!--    <link href="Untitled-1.css" rel="stylesheet" type="text/css" />-->
    <script type="text/javascript">
        //这里我们写一个函数
        function $(id){
            return document.getElementById(id);
        }

        //创建ajax引擎
        function getXmlHttpObject(){

            var xmlHttpRequest;
            //不同的浏览器获取对象xmlhttprequest 对象方法不一样
            if(window.ActiveXObject){

                xmlHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");

            }else{

                xmlHttpRequest=new XMLHttpRequest();
            }

            return xmlHttpRequest;

        }

        var myXmlHttpRequest;

        function updateGoldPrice(){

            myXmlHttpRequest=getXmlHttpObject();

            if(myXmlHttpRequest){

                //创建ajax引擎成功
                var url="goldPricePro.php";
                var data="city[]=dj&city[]=tw&city[]=ld";

                myXmlHttpRequest.open("post",url,true);

                myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

                myXmlHttpRequest.onreadystatechange=function chuli(){

                    //接收数据json
                    if(myXmlHttpRequest.readyState==4){
                        if(myXmlHttpRequest.status==200){

                            //取出并转成对象数组
                            var res_objects=eval("("+myXmlHttpRequest.responseText+")");

                            $('dj').innerText=res_objects[0].price;
                            $('tw').innerText=res_objects[1].price;
                            $('ld').innerText=res_objects[2].price;

                        }
                    }

                }
                myXmlHttpRequest.send(data);

            }

        }

        //使用定时器每隔5 秒
        window.setInterval("updateGoldPrice()",5000);

    </script>
</head>
<div style=" margin:30px auto;">
    <h1>每隔5秒中更新数据(以1000为基数计算涨跌)</h1>
    <table border=0 class="abc">
        <tr><td colspan="3"><img src="" /></td></tr>
        <tr><td>市场</td><td>最新价格$</td><td>涨跌</td></tr>
        <tr><td>伦敦</td><td id="ld">788.7</td><td><img src="img/down.png" />211.3</td></tr>
        <tr><td>台湾</td><td id="tw">854.0</td><td><img src="img/down.png" />146.0</td></tr>
        <tr><td>东京</td><td id="dj">1791.3</td><td><img src="img/up.png" />791.3</td></tr>
    </table>
</div>
</html>