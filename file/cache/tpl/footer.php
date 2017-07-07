<?php defined('IN_DESTOON') or exit('Access Denied');?><div style = "clear:both;"> </div>
<!--4个悬浮侧栏-->
<div id="div1" class="div"><a href="/" target="_blank"><img src="<?php echo DT_SKIN;?>image/fixed-img01.png" alt="" /></a><div class="fixed-close">关闭</div></div>
<div id="div2" class="div"><a href="/" target="_blank"><img src="<?php echo DT_SKIN;?>image/fixed-img02.png" alt="" /></a><div class="fixed-close">关闭</div></div>
<div id="div3" class="div"><a href="/" target="_blank"><img src="<?php echo DT_SKIN;?>image/fixed-img03.png" alt="" /></a><div class="fixed-close">关闭</div></div>
<div id="div4" class="div"><a href="/" target="_blank"><img src="<?php echo DT_SKIN;?>image/fixed-img04.png" alt="" /></a><div class="fixed-close">关闭</div></div>
<!--end 4个悬浮侧栏-->
<!--底部-->
<div class="bottom">
    <div class="nav">
        <a href="/">网站首页</a>
        <em>|</em><a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/">网站地图</a>
        <em>|</em><a href="<?php echo $EXT['spread_url'];?>">排名推广</a>
        <?php if($EXT['ad_enable']) { ?><em>|</em><a href="<?php echo $EXT['ad_url'];?>">广告服务</a><?php } ?>
        <?php if($EXT['gift_enable']) { ?><em>|</em><a href="<?php echo $EXT['gift_url'];?>">积分换礼</a><?php } ?>
        <?php if($EXT['guestbook_enable']) { ?><em>|</em><a href="<?php echo $EXT['guestbook_url'];?>">网站留言</a><?php } ?>
    </div>
    <div class="p">
        <?php if($DT['icpno']) { ?> | <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php echo $DT['icpno'];?></a><?php } ?>
 
    </div>
</div>
<div id="back2top" class="back2top"><a href="javascript:void(0);" title="返回顶部">&nbsp;</a></div>
<script type="text/javascript">
    <?php if($destoon_task) { ?>
        show_task('<?php echo $destoon_task;?>');
    <?php } else { ?>
        <?php include DT_ROOT.'/api/task.inc.php';?>
    <?php } ?>
    <?php if($lazy) { ?>$(function(){$("img").lazyload();});<?php } ?>
    $('#back2top').click(function(){
        $("html, body").animate({scrollTop:0}, 200);
    });
</script>
<script type="text/javascript">
    /* 搜索点击下拉列表 */
    $(".search_list").click(function(){
        if($(".search_list_li").css("display")=="none"){
            $(".search_list_li").stop().slideDown("fast");
        }else{
            $(".search_list_li").stop().slideUp("fast");
        }
    });
    $(".search_list_li li").click(function(){
        var this_text=$(this).text();
        $(".search_list_this span").text(this_text);
    });
    /* 轮播图 */
    $(function(){
        $(".banner").fade({
            oBox:$(".banner"),          
            oLi:$(".slideul li"), 
            sUl:$(".slidelist ul"),
            oSpeed:700,
            oTimer:2000,
            thisClass:"this"
        })
    });
    
    /* 招聘求职tab切换 */
    $(".inter_center_header .ac").mouseenter(function(){
        $(this).addClass("this").siblings(".ac").removeClass("this");
        var i=$(".inter_center_header .ac").index($(this));
        $(".inter_center_list01").eq(i).show().siblings(".inter_center_list01").hide();
    });
    /* 飘窗 */
    /*$("body").floatAd({
        imgSrc: '<?php echo DT_SKIN;?>image/floatAd.png',
        url: '/'
    });*/
    /* 悬浮侧栏 */
    window.onresize=window.onload=window.onscroll=function(){
        var oDiv1=document.getElementById("div1"),
            oDiv2=document.getElementById("div2"),
            oDiv3=document.getElementById("div3"),
            oDiv4=document.getElementById("div4");
        var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
        startMove(oDiv1,{top:scrollTop+100});
        startMove(oDiv2,{top:scrollTop+450});
        startMove(oDiv3,{top:scrollTop+100});
        startMove(oDiv4,{top:scrollTop+450});
    };
    $(".fixed-close").click(function(){
        $(this).parents(".div").hide();
    }); 
</script>
</body>
</html>
<!--商务通-->
<!--<script language="javascript" src="http://ddt.zoosnet.net/JS/LsJS.aspx?siteid=DDT14520663&float=1&lng=cn"></script>-->