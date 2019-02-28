<html xmlns=”http://www.w3.org/1999/xhtml”>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
<title>Show Center Dialog</title>
<link rel = "Shortcut Icon" href="http://game.bihe0832.com/resource/images/zixie_32.ico">
<style type="text/css">
/*全局样式*/
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,p,blockquote,th,td{margin:0;padding:0;list-style:none;}
fieldset,img{border:0;}
address,caption,cite,code,dfn,em,th,var{font-style:normal;font-weight:normal;}
body { 
	font-family: "Microsoft Yahei"; 
	font-size: 16px; 
	background:#03284C;
	background-repeat: no-repeat;
	background-position:top;
	background-attachment:fixed;
}
.show{
	position:absolute;
	background-color: #fff;
	border-color: #888;
	border: 1px solid transparent;
    border-radius: 4px 4px 4px 4px;
	width:250px;
	height:140px;
}
.tipsTitle{
	font-size: 12px;
	color: #333;
	line-height: 1.42857;
    margin-top: 10px;
	margin-left: 7px;
    text-align: center;
}
.tipsHr{
	height:1px;
	border:0;
	border-bottom:2px solid #eee;
	noshade:noshade;
}
.tipsContent{
	font-family: "Microsoft Yahei"; 
	font-size: 14px;
	color: #333;
    line-height: 1.5;
    padding: 5px;
	margin-top: 5px;
	margin-left: 15px;
	margin-right: 15px;
    text-align: left;
	font-weight: bold; 
}
.tipsBtn{
	font-size: 12px;
	color: #333;
    text-align: center;
	line-height: 1.7;
}
</style>
</head>
<body>
<div id="show" class="show" style="display:none">
	<div class="tipsTitle">Title</div>
<HR class="tipsHr">
	<div class="tipsContent" id="tipsContent">Desc</div>
	<HR class="tipsHr">
	<div class="tipsBtn" onClick="javascript:hideTips();">确定</div>
</div>
<script type="text/javascript">
window.onload=function(){
	showTips("This is a test!");
}
function hideTips (){
	document.getElementById("show").style.display="none";
}

function showTips (tips){
	document.getElementById("tipsContent").innerHTML=tips;
	var x = (document.body.clientWidth - 250) /2 ;
	document.getElementById("show").style.left = x+"px";
	var a = tips.length;
	if(a > 15){
		document.getElementById("show").style.height = "145px";
		var y = (document.body.clientHeight - 140) / 2;
	}else{
		document.getElementById("show").style.height = "125px";
		var y = (document.documentElement.clientHeight - 120) / 2;
	}
	document.getElementById("show").style.top = y+"px";
	document.getElementById("show").style.display="";
}
</script>
<script type="text/javascript" src="https://tajs.qq.com/stats?sId=25799863" charset="UTF-8"></script>
</body></html>

