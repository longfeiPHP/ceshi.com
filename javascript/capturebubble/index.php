<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>js捕获与冒泡</title>
</head>

<body>
<div id="outid" style="width:100px; height:100px; border:1px solid #f00;">
	<div id="innerid" style="width:50px; height:50px; border:1px solid #0F0;"></div>
</div>
<script type="text/javascript">
var outid = window.document.getElementById("outid");
var innerid = window.document.getElementById("innerid");

//冒泡事件,当点击innerDIV的时候先执行innerDIV事件,后执行outDIV事件
//outid.addEventListener('click',function(e){
//	alert('out');
//},false);
//innerid.addEventListener('click',function(e){
//	alert('inner');	
//	console.log(e);
//	e.cancelBubble=true;//阻止事件冒泡
//},false);
//捕获事件,当点击innerDIV的时候先执行outDIV事件,后执行innerDIV事件
outid.addEventListener('click',function(e){
	console.log(e);
	e.defaultPrevented = true;
	alert('out');
},true);
innerid.addEventListener('click',function(e){
	alert('inner');	
},true);
</script>
</body>
</html>