/**
 * 滑动显示按钮效果
 * @divID string 滑动div的id
 * @divw  int    滑动的宽度 80/160
 */
function slideOper(divID,divw) {
	//var divw = 80;
	var divID = divID;
	var divw = divw;
    var default_start = -10;//默认开始滑动的位置
    //[].forEach.call(document.querySelectorAll('[moveElm=true]'), function (el) {//执行所有moveElm=true的div
        el = document.getElementById(divID);
		el.isLeftStop =false;
		el.isRightStop =false;
		//滑动前
		el.addEventListener('touchstart', function() {//给对象绑定事件
			var obj = this;//滑动对象
            this.initX = event.targetTouches[0].pageX;//鼠标点击的X坐标
		}, false);//touchstart end  

		//滑动中
		el.addEventListener('touchmove', function(event) {
			//event.preventDefault();
			var obj = this;
			var moveX = event.targetTouches[0].pageX;//动态获取鼠的X坐标
			var X = moveX - this.initX;
				if(this.isLeftStop && !this.isRightStop && X > 0) {//右滑
					obj.style.WebkitTransform = "translateX(" + (X-80) + "px)";
					if(X > divw){
						obj.style.WebkitTransform = "translateX(" + 0 + "px)";
						this.isRightStop =true;
						this.isLeftStop =false;
					}
				}
				if (!this.isLeftStop && X < default_start) {//左滑 
					var l = Math.abs(X) + default_start;//g
					obj.style.WebkitTransform = "translateX(" + -l + "px)";
					if(l>divw){
						l=divw;
						obj.style.WebkitTransform = "translateX(" + -l + "px)";
						this.isRightStop =false;
						this.isLeftStop =true;
						
					}
				}
			});//touchmove end
			
		//滑动后
		el.addEventListener('touchend', function() {
			var obj = this;
			objX =(obj.style.WebkitTransform.replace(/translateX\(/g,"").replace(/px\)/g,""))*1;
			if(objX > -40){
				obj.style.WebkitTransform = "translateX(" + 0 + "px)";
				this.isRightStop =true;
				this.isLeftStop =false;
			}else{
				obj.style.WebkitTransform = "translateX(" + -divw + "px)";
				this.isRightStop =false;
				this.isLeftStop =true;
			}	
		}, false);//touchend end  
		
	//});//querySelectorAll end  
	
}