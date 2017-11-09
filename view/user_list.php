<script type="text/javascript" src="jquery-1.9.1.js"></script>
<form method="post">
用户名:<input type="text" name="username" /><br />
密  码:<input type="password" name="password" /><br />
验证码:<input type="text" /><a href="javascript:void(0)" onclick="checkCode()">获取验证码</a><br />
<input type="button" value="提交" />
</form>
<script type="text/javascript">
function checkCode(){
	$.ajax({
		type: "POST",
		url: "http://127.0.0.1:8080/ceshi.com/index.php?act=user&op=sentRandNum",
		success: function(data){
			alert(data);
			if(data){
				$.ajax({
					type: "POST",
					data:{num:data},
					url:"http://127.0.0.1:8080/ceshi.com/index.php?act=user&op=sentSns",
					success: function(data2){
						alert(data2);
					}
				});	
			}
		}
	});
}
</script>