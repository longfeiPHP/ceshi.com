<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="rs/jquery.mobile-1.3.2.min.css">
    <script src="rs/jquery-1.8.3.min.js"></script>
    <script src="rs/jquery.lazyload.js"></script>
    <script src="rs/jquery.mobile-1.3.2.js"></script>
     
    <style>
		ul,li{ margin:0; padding:0;}
		li{ list-style-type:none;}
	</style>
</head>
<body>
<div data-role="page">
<form action="">
	<input type="text" name="test" />
</form>
    <?php include "header.php"; ?>
    <a href="page2.php">进入第二个页面</a>
    <a href="page3.php">进入第三个页面</a>
    <!--<div data-role="content">
        <ul>
        	<li><img class="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img class="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img class="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img class="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img class="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img class="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img class="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img class="lazy" data-original="1.jpg" width="100%" height="259"></li>
        </ul>
    </div>-->
    <script type="text/javascript">
    	//$(function() {
//    		$("img.lazy").lazyload({
//				//event : "click",	
//			});
//		});
	</script>
    <?php include "footer.php"; ?>
</div>
</body>
</html>