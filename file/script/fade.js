;(function($){
    $.fn.fade=function(options){
    	var defaults={
    		oBox:$(".fadeBox"),
    		oLi:$(".fadeUl li"),
            sUl:$(".fadeList ul"),
            oPrev:$(".prev"),
            oNext:$(".next"),
            oSpeed:700,
            oTimer:2000,
            thisClass:"this",
            oNumber:0,
            isFinshed:true
    	}
    	return this.each(function(){
    		var opts=$.extend({},defaults,options);
    		//自动生成圆点
    		var oLength=opts.oLi.length;
    		for(var i=0;i<oLength;i++){
                opts.sUl.append("<li><a href='javascript:void(0)'></a></li>");
    		}
    		//自动播放
    		opts.oLi.eq(0).show();
    		opts.sUl.find("li").eq(0).addClass(opts.thisClass);
    		function fadeAuto(){
    			opts.sUl.find("li").eq(opts.oNumber).addClass(opts.thisClass).siblings("li").removeClass(opts.thisClass);
    			opts.oLi.eq(opts.oNumber).fadeIn(opts.oSpeed).siblings("li").fadeOut(opts.oSpeed);
    		}
    		function fadeMove(){
    			fadeAuto();
    			opts.oNumber=opts.oNumber+1>oLength-1?0:opts.oNumber+1;
    		}
    		var setTimer=setInterval(fadeMove,opts.oTimer);
    		//鼠标移入停止，移出继续
    		opts.oBox.on({
    			"mouseenter":function(){
    				clearInterval(setTimer);
    			},
    			"mouseleave":function(){
    				setTimer=setInterval(fadeMove,opts.oTimer);
    			}
    		})
    		//点击圆点，对应的图片显示，其它图片渐变消失
    		opts.sUl.find("li").click(function(){
    			var _index=opts.sUl.find("li").index($(this));
    			$(this).addClass(opts.thisClass).siblings("li").removeClass(opts.thisClass);
    			opts.oLi.eq(_index).fadeIn(opts.oSpeed).siblings("li").fadeOut(opts.oSpeed);
    			opts.oNumber=_index;
    		})
    	})
    }
})(jQuery);