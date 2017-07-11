<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
    <title><?php if($seo_title) { ?><?php echo $seo_title;?><?php } else { ?><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
<?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php } ?>
</title>
    <?php if($head_keywords) { ?>
    <meta name="keywords" content="<?php echo $head_keywords;?>"/>
    <?php } ?>
    <?php if($head_description) { ?>
    <meta name="description" content="<?php echo $head_description;?>"/>
    <?php } ?>
    <?php if($head_mobile) { ?>
    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?php echo $head_mobile;?>">
    <meta http-equiv="mobile-agent" content="format=html5; url=<?php echo $head_mobile;?>">
    <?php } ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
    <link rel="bookmark" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
    <?php if($head_canonical) { ?>
        <link rel="canonical" href="<?php echo $head_canonical;?>"/>
    <?php } ?>
    <?php if($EXT['archiver_enable']) { ?>
        <link rel="archives" title="<?php echo $DT['sitename'];?>" href="<?php echo $EXT['archiver_url'];?>"/>
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style22.css"/>
    
    <?php if($moduleid>4) { ?><link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $module;?>.css"/><?php } ?>
    <?php if($CSS) { ?>
        <?php if(is_array($CSS)) { foreach($CSS as $css) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $css;?>.css"/>
        <?php } } ?>
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>public.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>index.css"/>
    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ie6.css"/>
    <![endif]-->
    <?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror=function(){return true;}</script><?php } ?>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.js"></script>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/my.js"></script>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/fade.js"></script>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/floatAd.js"></script>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/move.js"></script>
    <?php if($lazy) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.lazyload.js"></script><?php } ?>
    <?php if($JS) { ?>
    <?php if(is_array($JS)) { foreach($JS as $js) { ?>
    <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/<?php echo $js;?>.js"></script>
    <?php } } ?>
    <?php } ?>
    <?php $searchid = ($moduleid > 3 && $MODULE[$moduleid]['ismenu'] && !$MODULE[$moduleid]['islink']) ? $moduleid : 5;?>
    <script type="text/javascript">
        <?php if($head_mobile && $EXT['wap_goto']) { ?>
            GoMobile('<?php echo $head_mobile;?>');
        <?php } ?>
            var searchid = <?php echo $searchid;?>;
            <?php if($itemid && $DT['anticopy']) { ?>
                document.oncontextmenu=function(e){return false;};
                document.onselectstart=function(e){return false;};
            <?php } ?>
    </script>
    
    
    
</head>
<body style="position:relative;overflow:hidden">
<!-- 顶部 -->
<div class="inter_top">
    <div class="w1000 clear">
        <div class="inter_top_left" id="destoon_member">
        </div>
        <div class="inter_top_right">
            <ul>
                <?php if($DT['city']) { ?><span class="s_change">[<em><?php echo $city_name;?></em>]<a href="<?php echo DT_PATH;?>api/city.php" title="点击切换城市" rel="nofollow">切换</a></span><?php } ?>
                <span><script type="text/javascript">addFav('收藏本页');</script></span>
                <?php if($EXT['wap_enable']) { ?><span class="s_phone"><a href="<?php echo $EXT['wap_url'];?>mobile.php">手机版</a></span><?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="advert" style="display:none;">
    <!-- <a href="javascript:void(0)">
        <img src="<?php echo DT_SKIN;?>image/advert.png" alt="玻尿酸 注射美容" title="玻尿酸 注射美容" width="1000" height="167" />
    </a> -->
    <?php echo ad(25);?>
</div>
<!--头部中间-->
<div class="inter_header">
    <div class="w1000 clear">
        <div class="g_logo"><a href="/" style="width:253px;height:72px;"><img src="<?php echo DT_SKIN;?>image/logo.png" ></a></div>
        <div class="search">
            <div class="search_box clear">
                <form id="destoon_search" action="<?php echo $MODULE[$searchid]['linkurl'];?>search.php" onsubmit="return Dsearch(1);">
                    <input type="hidden" name="moduleid" value="5" id="destoon_moduleid"/>
                    <input type="hidden" name="spread" value="0" id="destoon_spread"/>
                    <input name="kw" id="destoon_kw" type="text" class="goods" value="啥都有，你想找点啥" onfocus="if(this.value=='啥都有，你想找点啥'){this.value='';this.style.color='#333';}" onblur="if(this.value==''){this.value='啥都有，你想找点啥';this.style.color='#909090';}" autocomplete="off" x-webkit-speech speech />
                    <div class="search_list">
                        <div class="search_list_this">
                            <input type="text" id="destoon_select" class="search_m" value="供应" readonly onfocus="this.blur();" onclick="$('#search_module').fadeIn('fast');" />
                            <i style="background:url(<?php echo DT_SKIN;?>image/bottom_arrow.png) no-repeat;"></i>
                        </div>
                    </div>
                    <div class="submit_btn"><input type="submit" id="submit" value="" style="background:url(<?php echo DT_SKIN;?>image/search.png) no-repeat center center;"/></div>
                </form>
                <div id="search_module" style="display:none;" onmouseout="Dh('search_module');" onmouseover="Ds('search_module');">
           <?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu'] && !$m['islink']) { ?>
           <a href="javascript:void(0);" onclick="setModule('<?php echo $m['moduleid'];?>','<?php echo $m['name'];?>')"><?php echo $m['name'];?></a><?php } ?>
           <?php } } ?>
        </div>
            </div>
            
            <div class="head_search_kw">
                <a href="" onclick="Dsearch_adv();return false;"><strong>热搜：</strong></a>
                <span id="destoon_word">
                    <?php $tags_data=tag("moduleid=$searchid&table=keyword&condition=moduleid=$searchid and status=3&pagesize=6&order=total_search desc&template=list-search_kw")?>
                    <?php if(is_array($tags_data)) { foreach($tags_data as $i => $t) { ?>
                        <a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a>&nbsp;
                    <?php } } ?>
                </span>
            </div>
        </div>
        <div class="publish"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>" style="background:url(<?php echo DT_SKIN;?>image/icon_release.png) no-repeat 16px center;">发布信息</a></div>
    </div>
</div>
<!-- 导航栏 -->
<div class="inter_nav">
    <div class="w1000">
        <ul>
            <li class="industry_classify">
                <span style="background:url(<?php echo DT_SKIN;?>image/icon_classify.png) no-repeat 14px center;">
                <a href="#" onclick="Go('<?php echo DT_PATH;?>sitemap/<?php echo rewrite('index.php?mid=5');?>');return false;" style="display:block;color:#FFF;font-size:16px;width:75px;margin-left:0;">行业分类</a>
                </span>
            </li>
        </ul>
        <a id="this" <?php if($moduleid<2) { ?> class="this" <?php } ?>
 href="<?php echo $MODULE['1']['linkurl'];?>"><h2>首页</h2></a>
        <?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?>
            <?php if($m['ismenu']) { ?>          
                <a id="nav_list" href="<?php echo $m['linkurl'];?>" <?php if($m['isblank']) { ?> target="_blank"<?php } ?>
 <?php if($m['moduleid']==$moduleid) { ?> class="this"<?php } ?>
  <?php if($m['moduleid']==23) { ?> rel="nofollow" <?php } ?>
>
                    <h2 <?php if($m['style']) { ?> style="color:<?php echo $m['style'];?>;"<?php } ?>
><?php echo $m['name'];?></h2>
                </a>
            <?php } ?>
            <?php } } ?>
    </div>
</div>
<hr style="display:block;border-top:2px solid #1C86E5;" />
