<div data-role="page">
    <?php include "header.php"; ?>
    <div data-role="content">
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
    </div>
     <script type="text/javascript">
    	$(function() {
    		$("img.lazy").lazyload({
				//event : "click",
				//container : window//$('div[data-role="page"]')
			});
		});
	</script>
    <?php include "footer.php"; ?>
</div>