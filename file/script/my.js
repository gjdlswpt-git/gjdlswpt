$(function(){
	/*标签切换*/
	nav_tab('#in_market .right .h1 span','#in_market .right .con ul','bg');
	nav_tab('#infor .tab_h1 span','#infor .right .con ul','bg');
	nav_tab('#in_service .tab_h1 span','#in_service .exhibition .c_con ul','bg');
	nav_tab('#in_service .rec .h1 span','#in_service .rec ul','bg');
	nav_tab('.macket .sel_pro .h1 span','.macket .sel_pro .con ul','bg');
	nav_tab1('.box_cate .middle .h1 span','.box_cate .middle ul','span');
	
	/*商城页图片切换*/
	pic_move('.box_mid .img ol li','.box_mid .img ul li','bg',3000);
	pic_move('.box_cate .show .img .btn span','.box_cate .show .img li','bg',3000);
	
	/*商城页图片切换2*/
	pic_move1('.box_mid .pro_l','.box_mid .pro_r','.box_mid .c_pro ul','.box_mid .c_pro ul li','bg_1','bg_2');
	
	/*文本框*/
	var oInput=$('#destoon_kw');
	//oInput.css('color','#999');
	
	oInput.focus(function(){
		$(this).css('color','#000');
        if($(this).val()==this.defaultValue){
            $(this).val('');
        }
	});
	oInput.blur(function(){
		if($(this).val().length==0){
			$(this).val(this.defaultValue);
			$(this).css('color','#a9a9a9');
		}
	});
});


/*标签切换*/
function nav_tab(li,con,bgLi){
	var aLi=$(li);
	var aCon=$(con);
	if(aLi.length>0){
		aLi.mouseover(function(){
			$(this).addClass(bgLi).siblings().removeClass(bgLi);
			aCon.eq(aLi.index(this)).show().siblings().hide();
		});
	}
};

/*求购、供应、招商标签切换*/
function nav_tab1(btn,ul,bg){
	var aBtn=$(btn);
	var aUl=$(ul);
	
	aBtn.mouseover(function(){
		aBtn.eq(0).removeClass(bg+1);
		aBtn.eq(1).removeClass(bg+2);
		aBtn.eq(2).removeClass(bg+3);
		$(this).addClass(bg+(aBtn.index(this)+1));
		aUl.eq(aBtn.index(this)).show().siblings().hide();
	});
};

/*商城页图片切换*/
function pic_move(btn,li,bg,speed){
	var aBtn=$(btn);
	var aLi=$(li);
	var aLiLength=aLi.length;
	
	if(aBtn.length>0){
		aLi.eq(0).css({'opacity':1,'zIndex':5});
		aBtn.mouseover(function(){
			num=aBtn.index(this);
			$(this).addClass(bg).siblings().removeClass(bg);
			aLi.eq(aBtn.index(this)).stop().animate({'opacity':1}).css({'zIndex':5}).siblings().stop().animate({'opacity':0}).css({'zIndex':1});
		});
		var timer=null;
		var num=0;
		timer=setInterval(fnMove,speed);
		
		aLi.eq(0).parent().parent().hover(function(){
			clearInterval(timer);
		},function(){
			timer=setInterval(fnMove,speed);
		});
		
		function fnMove(){
			num++;
			if(num>aLiLength-1)num=0;
			aBtn.eq(num).addClass(bg).siblings().removeClass(bg);
			aLi.eq(num).stop().animate({'opacity':1}).css({'zIndex':5}).siblings().stop().animate({'opacity':0}).css({'zIndex':1});
		};
	}
};


function pic_move1(btn1,btn2,ul,li,bg_1,bg_2){
	var oBtnL=$(btn1);
	var oBtnR=$(btn2);
	var oUl=$(ul);
	var aLi=$(li);
	var aLiLength=aLi.length;
	var Width=aLi.eq(0).outerWidth(true);
	oUl.width(Width*aLiLength);
	
	if(oUl.length>0){
		oBtnR.click(function(){
			if(!oUl.is(':animated'))
			oUl.animate({'left':-Width+'px'},function(){
				oUl.append($(this).children().first()).css('left',0);
			})
		});
		oBtnL.click(function(){
			if(!oUl.is(':animated'))
			oUl.css({'left':-Width+'px'}).prepend(oUl.children().last()).animate({'left':0});
		});
		oBtnL.hover(function(){
			$(this).addClass(bg_1);
		},function(){
			$(this).removeClass(bg_1);
		});
		oBtnR.hover(function(){
			$(this).addClass(bg_2);
		},function(){
			$(this).removeClass(bg_2);
		});
		
		if(aLi.length<=3){
			oBtnL.off('click');
			oBtnR.off('click');
		}
	}
};
















