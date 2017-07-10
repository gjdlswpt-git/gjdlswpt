(function($){
    $.fn.floatAd = function(options){
            var defaults = {
                    imgSrc : "../images/floatAd.png", //漂浮图片路径
                    url : "www.baidu.com", //图片点击跳转页
                    openStyle : 1, //跳转页打开方式 1为新页面打开  0为当前页打开
                    speed : 20 //漂浮速度 单位毫秒
            };
            var options = $.extend(defaults,options);
            var _target = options.openStyle == 1 ?  "target='_blank'" : '' ;
            var html = "<div id='float_ad'>";
                html += "  <a href='" + options.url + "' " + _target + "><img src='" + options.imgSrc + "' class='float_ad_img'/></a><a href='javascript:void(0);' id='close_float_ad'><div class='float_word'>关闭&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='float_img'></div></a>";
                html += "</div>";

            $('body').append(html);
            function init(){
                    var x = 0,y = 0 
                    var xin = true, yin = true 
                    var step = 1 
                    var delay = 10 
                    var obj=$("#float_ad") 
                    obj.find('img.float_ad_img').load(function(){
                        var float = function(){
                            var L = T = 0;
                                var OW = obj.width();   //当前广告的宽
                                var OH = obj.height();  //当前广告的高
                                var DW = $(window).width(); //浏览器窗口的宽
                                var DH = $(window).height(); 

                            x = x + step *( xin ? 1 : -1 ); 
                                if (x < L) { 
                                        xin = true; x = L
                                } 
                                if (x > DW-OW-1){  //-1为了ie
                                        xin = false; x = DW-OW-1
                                } 

                                y = y + step * ( yin ? 1 : -1 ); 
                                if (y > DH-OH-1) { 

                                        yin = false; y = DH-OH-1 ;
                                }
                                if (y < T) {
                                        yin = true; y = T
                                } 

                                var left = x ; 
                                var top = y; 

                                obj.css({'top':top,'left':left});
                        }
                        var itl = setInterval(float,options.speed);
                        $('#float_ad').mouseover(function(){clearInterval(itl)}); 
                        $('#float_ad').mouseout(function(){itl=setInterval(float, options.speed)})
                    });
                    // 点击关闭
                    $('#close_float_ad').click(function(){
                        $('#float_ad').hide();
                    });
            }

       init();

    };  //floatAd

})(jQuery);