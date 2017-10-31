/**
 * Created by Administrator on 2017/10/30.
 */
$(function(){
    var onoff = true;
    var all_img_l=$(".slideul li").length;
    for(var i=0;i<all_img_l;i++){
        $(".slidelist ul").append("<li><a href='javascript:void(0)'></a></li>");
    }


    $(".slideul li").eq(0).show();
    $(".slidelist li").eq(0).addClass("active");
    var img_num=0;
    var img_index = null;
    function home_slide(){
        if(onoff){
            $(".slidelist li").eq(img_num).addClass("active").siblings("li").removeClass("active");
            $(".slideul li").eq(img_num).fadeIn(700).siblings("li").fadeOut(700);
            img_num=img_num+1>4?0:img_num+1;
        }
    }
    var timer=setInterval(home_slide,2000);


    $(".banner_box").on({
        "mouseenter":function(){
            onoff = false;
            clearInterval(timer);
        },
        "mouseleave":function(){
            onoff = true;
            timer=setInterval(home_slide,2000);
        }
    })


    $(".slidelist li").click(function(){
        img_index=$(".slidelist li").index($(this));
        $(this).addClass("active").siblings("li").removeClass("active");
        $(".slideul li").eq(img_index).fadeIn(700).siblings("li").fadeOut(700);
        img_num=img_index;
    })
})

$(function(){
    var w=1198;
    var l=0;
    var timer=null;
    var len=$(".scroll li").length*2;
    $(".scroll ul").append($(".scroll ul").html()).css({'width':len*w, 'left': -len*w/2});


    timer=setInterval(init,5000);

    function init(){
        l=parseInt($(".scroll ul").css("left"))-w;
        showCurrent(l);
    }



    $(".scroll li").hover(function(){
        clearInterval(timer);
    },function(){
        timer=setInterval(init,5000);
    });



    function showCurrent(l){
        if($(".scroll ul").is(':animated')){
            return;
        }

        $(".scroll ul").animate({"left":l},500,function(){
            if(l==0){
                $(".scroll ul").css("left",-len*w/2);
            }else if(l==(1-len)*w){
                $(".scroll ul").css('left',(1-len/2)*w);
            }
        });
    }
});