<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>xhr level 异步上传</title>
<script type="text/javascript" src="../../jquery-1.9.1.js"></script>
</head>

<body>
<?php define(DEMO,1);?>
<?php if(DEMO==1){?>
	<label for="text">名称</label>
	<input type="text" id="text" name="name"/>
	<label for="file">文件</label>
	<input type="file" id="file" name="file"/>
	<button type="button" onclick="ajaxUploadFile()">确定</button>
	<script type="text/javascript">
		function ajaxUploadFile(){
			var formData = new FormData();
			var xmlhttp;
			if(window.XMLHttpRequest){//IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("POST","http://upload.com/cors.php",true);//
// 			xmlhttp.setRequestHeader("X-Requested-With","XMLHttpRequest");
			formData.append("name","file");
			formData.append("file",document.getElementById("file").files[0]);
			xmlhttp.send(formData);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState==4){
					if(xmlhttp.status==200){
						console.log("上传成功"+xmlhttp.responseText);
					}else{
						console.log("上传失败"+xmlhttp.responseText);
					}
				}
			}
		}
	</script>
<?php }?>
<?php if(DEMO==0){?>
<button id="ajax">requestAjax</button>
<script type="text/javascript">
$(function(){
	

	$("#ajax").click(function(){

		 $.ajax({
//              async : true,
             url : "http://upload.com/cors.php",
             type : "POST",
//              dataType : "jsonp", // 返回的数据类型，设置为JSONP方式
//              jsonp : 'callback', //指定一个查询参数名称来覆盖默认的 jsonp 回调参数名 callback
//              jsonpCallback: 'handleResponse', //设置回调函数名
             data : {
                 q : "javascript", 
                 count : 1
             }, 
             success: function(response, status, xhr){
                 console.log(response);
             }
         });
    });
});
</script>
<?php }?>
</body>
</html>