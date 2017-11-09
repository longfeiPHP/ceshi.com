<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ajax datatype html</title>
<script type="text/javascript" src="../../jquery-1.9.1.js"></script>
</head>

<body>
<button id="ajax">requestAjax</button>
<script type="text/javascript">
$(function(){
	var absUrl = 1;
	var triggerData = 2;
	var settings = 3;
	var deferred = 4;
	
	$("#ajax").click(function(e) {
		console.log(this);
        $.ajax({  
        	url : './index.html',
			type:'get',  
			data:{},  
			dataType : 'html',  
			success  : succ( absUrl, triggerData, settings, deferred ),  
			error : function() {  
				alert('fail');  
			}  
    	});	
    });
});
function succ( absUrl, triggerData, settings, deferred ){
	console.log(this);
	return $.proxy(function( html, textStatus, xhr ) {
		console.log(html);
	},this);
}
</script>
</body>
</html>