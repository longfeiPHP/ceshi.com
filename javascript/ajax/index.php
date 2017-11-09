<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ajax跨域</title>
<script type="text/javascript" src="../../jquery-1.9.1.js"></script>
</head>

<body>
<button id="ajax">requestAjax</button>
<script type="text/javascript">
$(function(){
	$("#ajax").click(function(e) {
        $.ajax({  
			type:'get',  
			url : 'http://192.168.1.230/post.php',
			data:{loginuser:'lee',loginpass:'123456'},  
			dataType : 'jsonp',  
			jsonp:"jsoncallback",  
			success  : function(data) {  
				//alert("用户名："+ data.user +" 密码："+ data.pass);
				console.log(data); 
			},  
			error : function() {  
				alert('fail');  
			}  
    	});	
    });
});
</script>
</body>
</html>