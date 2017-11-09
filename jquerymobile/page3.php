<div data-role="page">
    <?php include "header.php"; ?>
    <div data-role="content">
    	<ul>
        	<li><img lazyname="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img lazyname="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img lazyname="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img lazyname="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img lazyname="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img lazyname="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img lazyname="lazy" data-original="1.jpg" width="100%" height="259"></li>
            <li><img lazyname="lazy" data-original="1.jpg" width="100%" height="259"></li>
        </ul>
        <a href="javascript:void(0)" data-rel="back" data-role="button">返回page2</a>
    </div>
    <script type="text/javascript">
		function lazyLoadImg(contentHeight,placeholder){
			var bodyHeight = document.body.offsetHeight;//body（页面）可见区域的总高度
			var showNum = Math.ceil(bodyHeight/contentHeight);//默认显示图片个数
			var imgElements = $("img[lazyname='lazy']");//所有class=lazy的img元素
			imgElements.attr('src',placeholder);//默认图片
			for(var m=0;m<showNum;m++){
				imgElements[m].src = $(imgElements[m]).attr('data-original');
			}
			var temp = -1;//用来判断是否是向下滚动（向上滚动就不需要判断延迟加载图片了） 
			window.onscroll = function() { 
				var lazyImgArr = new Array(); 
				var j = 0; 
				for(var i=0; i<imgElements.length; i++) { 
					lazyImgArr[j++] = imgElements[i]; 
				} 		
				var scrollHeight = document.body.scrollTop;//滚动的高度  
				if(temp < scrollHeight) {//为true表示是向下滚动，否则是向上滚动，不需要执行动作。 
					for(var k=0; k<lazyImgArr.length; k++) { 
						var imgTop = lazyImgArr[k].offsetTop;//1305（图片纵坐标） 
						if((imgTop - scrollHeight) <= bodyHeight) { 
							lazyImgArr[k].src = $(lazyImgArr[k]).attr('data-original');
							//lazyImgArr[k].className = "notlazy"
						} 
					} 
					temp = scrollHeight; 
				} 
			};
		}
		lazyLoadImg(260,'default.png'); 
	</script>
    <?php include "footer.php"; ?>
</div>