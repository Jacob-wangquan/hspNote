/**
 * Created by Administrator on 2016/9/8.
 */
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