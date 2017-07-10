<?php defined('IN_DESTOON') or exit('Access Denied');?>﻿<?php $CSS = array('index');?>
<?php include template('header22');?>
<!-- 轮播图 -->
<div class="banner">
    <ul class="slideul">
        <li><a href="javascript:void(0);"><img src="<?php echo DT_SKIN;?>image/banner03.png" alt="工业电缆" title="工业电缆" width="1920" height="456" /></a></li>
        <li><a href="javascript:void(0);"><img src="<?php echo DT_SKIN;?>image/banner02.png" alt="工业电缆" title="工业电缆" width="1920" height="456" /></a></li>
        <li><a href="javascript:void(0);"><img src="<?php echo DT_SKIN;?>image/banner01.png" alt="工业电缆" title="工业电缆" width="1920" height="456" /></a></li>
    </ul>
    <div class="slidelist">
        <ul></ul>
    </div>
</div>
<!-- 广告位 -->
<div class="inter_products">
    <div class="w1000 clear">
        <ul>
            <li>
                <a href="#" target="_blank"><img src="<?php echo DT_SKIN;?>image/ad05.png" alt="电缆护套"></a>
            </li>
            <li>
                <a href="#" target="_blank"><img src="<?php echo DT_SKIN;?>image/ad01.png" alt="橡套电缆"></a>
            </li>
            <li>
                <a href="#" target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/ad06.png" alt="电线电缆价格"></a>
            </li>
        </ul>
    </div>
</div>
<div class="supply_demand">
    <div class="w1000 clear">
        <div style="width:660px;float:left;">
            <!--品牌展示-->
            <div style="height: 290px;border: 1px solid #ccc">
                <h2 style=" border-bottom: 1px solid #ccc;height: 31px;line-height: 31px;padding: 0 10px 0 10px;background: #F3F8FC url(image/box_head_bg.gif) repeat-x;">品牌展示<span style="float: right;font-weight: normal"><a href="<?php echo $MODULE['13']['linkurl'];?>" style="color: #F2975A;">更多..</a></span></h2>
                    <div style="padding: 15px 5px 15px 5px;">
                        <ul>
                            <?php $tags = tag("moduleid=13&condition=status=3 and level>0 and thumb<>''&areaid=$cityid&pagesize=12&order=addtime desc&width=120&height=40&cols=4&target=_blank&lazy=$lazy&template=null");?>
                            <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                            <li style="float: left">
                                <div style="display: inline-block;margin: 5px 10px">
                                    <a href="<?php echo $t['linkurl'];?>" <?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><img style="border: 1px solid #ccc" src="<?php echo $t['thumb'];?>" width="140" height="50"/>
                                    <p style="text-align: center"><?php echo $t['title'];?></p></a>
                                </div>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
            </div>
            <!--品牌展示end-->
            <!--市场行情-->
            <div style="height: 280px;border: 1px solid #ccc;margin-top: 10px">
                <h2 style=" border-bottom: 1px solid #ccc;height: 31px;line-height: 31px;padding: 0 10px 0 10px;background: #F3F8FC url(image/box_head_bg.gif) repeat-x;">市场行情<span style="float: right;font-weight: normal"><a href="<?php echo $MODULE['7']['linkurl'];?>" style="color: #F2975A;">更多..</a></span></h2>
                <div style="padding: 15px 5px 15px 5px;">
                    <div style="padding: 0 5px;width: 425px;display: inline-block">
                        <ul>
                            <?php $tags=tag("moduleid=7&condition=status=3&areaid=$cityid&pagesize=8&datetype=2&order=addtime desc&target=_blank&template=null")?>
                            <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                            <li style="padding-bottom: 10px ;font-size:13px">
                                <span class="points"><i style=""></i></span>
                                <a href="<?php echo $t['linkurl'];?>" <?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php echo dsubstr($t['title'], 50, '...');?></a>
                                <span style="float: right">[<?php echo date('Y-m-d', $t['addtime']);?>]</span>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
                    <div style="float: right">
                        <ul>
                            <li style="padding-bottom:5px "><a href="#"><img src="" width="200" height="65" /></a></li>
                            <li style="padding-bottom:5px "><a href="#"><img src="" width="200" height="65" /></a></li>
                            <li style="padding-bottom:5px "><a href="#"><img src="" width="200" height="65" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--市场行情end-->
        </div>
        <!-- 行业资讯 -->
        <div style="width:330px;float:right;border:1px solid #ccc">
            <h2 style="padding: 0 10px;background: #F3F8FC url(image/box_head_bg.gif) repeat-x;border-bottom: 1px solid #ccc;height: 31px;line-height: 31px">行业资讯<a href="<?php echo $MODULE['21']['linkurl'];?>"><span style="float: right;font-weight: normal;color: #F2975A">更多..</span></a></h2>
            <div class="sd_body">
                    <?php $tags=tag("moduleid=21&condition=status=3 and level=1&areaid=$cityid&order=addtime desc&pagesize=16&datetype=2&template=null")?>
                 <ul>
                    <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                     <li style="padding:5px 0;font-size: 12px;"><span class="points"><i></i></span><a href="<?php echo $t['linkurl'];?>" <?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php echo dsubstr($t['title'], 33, '...');?></a><span style="float: right">[<?php echo date('Y-m-d', $t['addtime']);?>]</span></li>
                    <?php } } ?>
                 </ul>
                <div style="width: 92%;margin: 19px 13px">
                    <span><a href=""><img src=""  width="125" height="95"/></a></span>
                    <span style="float: right"><a href=""><img src=""  width="125" height="95"/></a></span>
                </div>
            </div>
        </div>
        <!-- 行业资讯 end-->
    </div>
</div>
<!-- 推荐产品 -->
<div class="recommend">
    <div class="w1000">
        <div class="recommend_header">推荐产品<a href="<?php echo $MODULE['5']['linkurl'];?>">MORE >></a></div>
        <div class="boxbox">
            <div class="picbox">
                <ul class="piclist mainlist">
                    <?php $tags=tag("moduleid=5&length=36&condition=status=3 and level>0 and thumb<>''&areaid=$cityid&pagesize=14&order=addtime desc&width=100&height=100&cols=5&target=_blank&lazy=$lazy&template=null")?>
                    <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                    <li>
                        <a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
>
                        <img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['title'];?>" title="<?php echo $t['title'];?>" width="116" height="116" />
                        </a>
                    </li>
                    <?php } } ?>
                </ul>
                <ul class="piclist swaplist"></ul>
            </div>
            <div class="og_prev"></div>
            <div class="og_next"></div>
        </div>
    </div>
</div>
<!-- 推荐产品 end -->
<!--供应求购展示-->
<div>
    <div style="width: 1000px;margin: 20px auto">
        <div class="w1000 clear">
                <div style="width: 320px;height: 350px;border: 1px solid #ccc;float: left">
                    <h2 style="border-bottom: 2px solid #1388CE;height: 31px;line-height: 31px;padding: 0 10px 0 10px;background: #F3F8FC url(image/box_head_bg.gif) repeat-x;">
                        <span style="display:inline-block;width: 75px;text-align: center;height: 25px;line-height:25px;background: #1388CE;border-radius: 5px 5px 0 0;margin-top: 6px;color: #fff">供 应 信 息</span>
                        <a href="<?php echo $MODULE['5']['linkurl'];?>"><span style="float: right;text-align: center;width: 15px;height: 15px;line-height:15px;border: 1px solid #1388CE;border-radius: 3px 3px 3px 3px;margin: 8px 0">+</span></a>
                    </h2>
                    <ul>
                        <?php $tags=tag("moduleid=5&condition=status=3&areaid=$cityid&pagesize=10&datetype=2&target=_blank&order=addtime desc&template=null")?>
                        <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                        <li style="padding: 6px 10px;font-size: 14px">
                            <span class="points"><i></i></span><a href="<?php echo $t['linkurl'];?>" <?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><?php echo dsubstr($t['title'], 26, '...');?></a><span style="float: right">[<?php echo date('Y-m-d', $t['addtime']);?>]</span>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
                <div style="width: 320px;height: 350px;border: 1px solid #ccc;margin-left: 13px;float: left">
                    <h2 style="border-bottom: 2px solid #1388CE;height: 31px;line-height: 31px;padding: 0 10px 0 10px;background: #F3F8FC url(image/box_head_bg.gif) repeat-x;"><span style="display:inline-block;width: 75px;text-align: center;height: 25px;line-height:25px;background: #1388CE;border-radius: 5px 5px 0 0;margin-top: 6px;color: #fff">求 购 信 息</span><span style="float: right;text-align: center;width: 15px;height: 15px;line-height:15px;border: 1px solid #1388CE;border-radius: 3px 3px 3px 3px;margin: 8px 0"><a href="<?php echo $MODULE['6']['linkurl'];?>">+</a></span></h2>
                    <ul>
                      <?php $tags=tag("moduleid=6&condition=status=3&areaid=$cityid&pagesize=10&datetype=2&target=_blank&order=addtime desc&template=null")?>
                        <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                        <li style="padding: 6px 10px;font-size: 14px">
                            <span class="points"><i></i></span><a href="<?php echo $t['linkurl'];?>" <?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><?php echo dsubstr($t['title'], 26, '...');?></a><span style="float: right">[<?php echo date('Y-m-d', $t['addtime']);?>]</span>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
            <div style="width: 330px;height: 350px;float: right;margin-left: 10px;border: 1px solid #ccc">
                <h2 class="inter_center_header" style="height: 31px;line-height: 31px;padding: 0 10px 0 10px;font-size: 14px;background: #F3F8FC url(image/box_head_bg.gif) repeat-x;"><span class="ac this">推荐招商</span>&nbsp;<span class="ac">企业招商</span><span style="color: #FF660D;float: right">[我要加入]</span></h2>
                <!--推荐招商-->
                <div class="inter_center_list01">
                    <ul>
                        <?php $tags=tag("moduleid=22&condition=status=3 and level=1&areaid=$cityid&catid=129&order=addtime desc&pagesize=10&template=null");?>
                        <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                        <li style="padding: 2px 10px;font-size: 14px">
                            <div>
                                <span class="points"><i></i></span><a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a>
                            </div>
                        </li>
                        <div class="dotted "></div>
                        <?php } } ?>
                    </ul>
                </div>
                <!--企业招商-->
                <div class="inter_center_list01" style="display: none">
                    <ul>
                        <?php $tags=tag("moduleid=22&condition=status=3 and level=1&areaid=$cityid&catid=130&order=addtime desc&pagesize=10&template=null");?>
                        <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                        <li style="padding: 2px 10px;font-size: 14px">
                            <div>
                                <span class="points"><i></i></span><a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a>
                            </div>
                        </li>
                        <div class="dotted "></div>
                        <?php } } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w1000 clear" style="margin-top: 15px">
            <div style="width: 655px;height: 315px;border: 1px solid #ccc;float: left;">
                <h2 style="border-bottom: 2px solid #1388CE;height: 31px;line-height: 31px;padding: 0 10px 0 10px;background: #F3F8FC url(image/box_head_bg.gif) repeat-x;"><span style="display:inline-block;width: 75px;text-align: center;height: 25px;line-height:25px;background: #1388CE;border-radius: 5px 5px 0 0;margin-top: 6px;color: #fff">电 缆 展 示</span><span style="float: right;text-align: center;width: 15px;height: 15px;line-height:15px;border: 1px solid #1388CE;border-radius: 3px 3px 3px 3px;margin: 8px 0"><a href="<?php echo $MODULE['12']['linkurl'];?>">+</a></span></h2>
                <div style="padding: 10px 13px">
                    <ul>
                        <?php $tags=tag("moduleid=12&condition=status=3 and addtime>$today_endtime-300*86400 and thumb<>''&areaid=$cityid&order=hits desc&pagesize=8&template=null");?>
                        <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                        <li style="float: left;padding:0 3px ">
                            <div style="display: inline-block;margin: 5px 10px">
                                <a href="<?php echo $t['linkurl'];?>" <?php if($target) { ?> target="<?php echo $target;?>" <?php } ?>
><img style="border: 1px solid #ccc" src="<?php echo $t['thumb'];?>" alt="<?php echo $t['title'];?>" width="128" height="98"/>
                                    <p style="text-align: center;font-size: 14px"><?php echo $t['title'];?></p></a>
                            </div>
                        </li>
                        <?php } } ?>
                    </ul>
                 </div>
            </div>
            <div style="width:330px;height: 315px;border: 1px solid #ccc;float: right">
                <h2 style="height: 31px;line-height: 31px;padding: 0 10px 0 10px;background: #E8F2FC url(image/box_head_bg.gif) repeat-x;"><span style="display: inline-block;margin-top: 5px;border: 1px solid #ccc;border-radius: 5px 5px 0 0;width:65px;height: 25px;text-align: center;border-bottom: none;background: #fff;font-size: 14px">电缆知识</span><span style="float: right;font-weight: normal"><a href="<?php echo $MODULE['10']['linkurl'];?>">MORE >></a></span></h2>
                <div style="padding:15px 5px 15px 5px">
                    <ul>
                        <?php $tags=tag("moduleid=10&condition=status=3 and process>=0 and credit>=0&pagesize=11&order=addtime desc&template=null");?>
                        <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                        <li style="padding-bottom: 5px ;font-size:14px">
                            <span class="points"><i></i></span><!--<span style="color: #FF660D">[照明样本]&nbsp;</span>-->
                            <a href="<?php echo $t['linkurl'];?>"><?php echo dsubstr($t['title'], 45, '...');?></a>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--供应求购展示end-->
<!--企业/展会-->
<div>
    <div style="width: 1000px;margin: 20px auto">
        <div  style="width: 655px;float: left">
            <div style="width: 320px;height: 400px;border: 1px solid #ccc;float: left">
                <div style="padding: 8px 10px;"><span style="font-size: 15px">合作企业</span><span style="float: right;padding-top: 6px"> <a href="<?php echo $MODULE['4']['linkurl'];?>">MORE>></a></span></div>
                <hr style="width:95%;margin: 3px auto;border: 1px solid #ccc;"/>
                <div class="inter_right_word">
                    <?php $tags=tag("moduleid=4&condition=vip>0 and catids<>''&areaid=$cityid&pagesize=5&order=fromtime desc&template=null")?>
                    <h3><?php echo $tags['0']['company'];?></h3>
                    <p>经营模式：<?php echo $tags['0']['type'];?></p>
                    <p>电话号码：<?php echo $tags['0']['telephone'];?></p>
                    <div class="inter_right_pic">
                        <a href="<?php echo $tags['0']['linkurl'];?>"><img src="<?php echo $tags['0']['thumb'];?>" alt="<?php echo $tags['0']['company'];?>" title="<?php echo $tags['0']['company'];?>" width="250" height="104" /></a>
                    </div>
                    <div class="inter_right_list">
                        <ul>
                            <?php $tags=tag("moduleid=4&condition=vip>0 and catids<>''&areaid=$cityid&pagesize=5&order=fromtime desc&template=null")?>
                            <?php if(is_array($tags)) { foreach($tags as $t) { ?>
                            <li><i></i><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['company'];?></a></li>
                            <?php } } ?>
                            <?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="width: 320px;height: 400px;border: 1px solid #ccc;float: right">
                <div style="padding: 8px 10px;"><span style="font-size: 15px">企业招聘</span><span style="float: right;padding-top: 6px"><a href="<?php echo $MODULE['9']['linkurl'];?>">MORE>></a></span></div>
                <hr style="width:95%;margin: 3px auto;border: 1px solid #ccc;"/>
                <div>
                    <ul>
                        <?php $tags=tag("moduleid=9&condition=status=3 and level>0&pagesize=13&length=30&order=edittime desc&template=null");?>
                        <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                        <li style="padding: 5px 10px;">
                            <span class="points"><i></i></span>
                             <a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div style="width: 330px;height: 400px;border: 1px solid #ccc;float: right;font-size: 14px">
            <h2 style="height: 31px;line-height: 31px;padding: 0 10px 0 10px;background: #F3F8FC url(image/box_head_bg.gif) repeat-x;"><span style="display: inline-block;margin-top: 5px;border: 1px solid #ccc;border-radius: 5px 5px 0 0;width:65px;height: 25px;text-align: center;border-bottom: none;background: #fff;">展会活动</span><span style="float: right;color: #FF660D"><a href="http://gjdlswpt.net/member/my.php">[我要发布]</a></span></h2>
            <div>
                <?php $tags=tag("moduleid=8&condition=status=3 and level=1&areaid=$cityid&pagesize=5&order=".$MOD['order']."&template=null");?>
                <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                <ul style="padding: 8px 10px;">
                    <li style="font-weight: bold"><span class="points"><i></i></span><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo dsubstr($t['title'], 40, '');?></a></li>
                    <li>&nbsp;<?php echo timetodate($t['fromtime'], 3);?> 至 <?php echo timetodate($t['totime'], 3);?> [<?php echo $t['city'];?>]</li>
                    <li title="<?php echo $t['city'];?><?php echo $t['hallname'];?>">&nbsp;主办：<?php echo $t['sponsor'];?></li>
                </ul>
                <div style="border-bottom:dotted 1px #000;width: 95%;margin: 0 auto"></div>
                <?php } } ?>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<!--企业展会end-->
<!--广告位-->
<div>
    <div style="width: 1000px;margin: 20px auto">
        <a href="#"><img src="http://www.gjdlswpt.com/file/upload/201706/16/10-20-00-23-1.png" /></a>
    </div>
</div>
<!--广告位end-->
<!--友情链接001-->
<div class="g_link" style="margin-top:15px;">
    <div class="h1"><span class="yahei">友情链接</span><em>links</em></div>
    <div class="con">
        <?php if($DT['page_text']) { ?>
        <?php $tags=tag("table=link&condition=status=3 and level>0 and thumb='' and username=''&areaid=$cityid&pagesize=21&order=listorder desc,itemid desc&template=null")?>
            <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                <a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a>
            <?php } } ?>
        <?php } ?>
    </div>
</div>
<?php include template('footer');?>