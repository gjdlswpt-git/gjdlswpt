<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;</script>
<div class="m">
<div class="m_l f_l">
<div class="left_box">
<div class="pos">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo; </div>
<div class="info_main">
<table width="100%">
<td width="250" valign="top">
<div id="mid_pos"></div>
<div id="mid_div" onmouseover="SAlbum();" onmouseout="HAlbum();" onclick="PAlbum(Dd('mid_pic'));">
<img src="<?php echo $albums['0'];?>" width="240" height="180" id="mid_pic"/><span id="zoomer"></span>
</div>
<div class="b5"></div>
<div>
<?php if(is_array($thumbs)) { foreach($thumbs as $k => $v) { ?><img src="<?php echo $v;?>" width="60" height="60" onmouseover="if(this.src.indexOf('nopic60.gif')==-1)Album(<?php echo $k;?>, '<?php echo $albums[$k];?>');" class="<?php if($k) { ?>ab_im<?php } else { ?>ab_on<?php } ?>
" id="t_<?php echo $k;?>"/><?php } } ?>
</div>
<div class="b5"></div>
<div onclick="PAlbum(Dd('mid_pic'));" class="c_b t_c c_p"><img src="<?php echo DT_SKIN;?>image/ico_zoom.gif" width="16" height="16" align="absmiddle"/> 点击图片查看原图</div>
</td>
<td width="15"> </td>
<td valign="top">
<div id="big_div" style="display:none;"><img src="" id="big_pic"/></div>
<h1 class="title_trade" id="title"><?php echo $title;?></h1>
<ul>
<?php if($n1 && $v1) { ?><li><strong><?php echo $n1;?></strong>：<?php echo $v1;?></li><?php } ?>
<?php if($n2 && $v2) { ?><li><strong><?php echo $n2;?></strong>：<?php echo $v2;?></li><?php } ?>
<?php if($n3 && $v3) { ?><li><strong><?php echo $n3;?></strong>：<?php echo $v3;?></li><?php } ?>
<li><strong>发布日期</strong>：<?php echo $editdate;?></li>
<li><strong>有效期至</strong>：<?php if($todate) { ?><?php echo $todate;?><?php } else { ?>长期有效<?php } ?>
<?php if($expired) { ?> <span class="f_red">[已过期]</span><?php } ?>
</li>
<li><strong><?php echo $MOD['name'];?>区域</strong>：<?php echo area_pos($areaid, '');?></li>
<li><strong>浏览次数</strong>：<span id="hits"><?php echo $hits;?></span></li>
<?php if($MOD['show_message'] && $username && !$expired) { ?>
<li><img src="<?php echo DT_SKIN;?>image/btn_message.gif" alt="留言咨询" class="c_p" onclick="Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('message.php?itemid='.$itemid);?>');"/></li>
<?php } ?>
</ul>
</td>
</tr>
</table>
</div>
<div class="b10">&nbsp;</div>
<div class="left_head">详细说明</div>
<?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
<div class="content" id="content"><?php echo $content;?></div>
<div class="b10">&nbsp;</div>
<center>
[ <a href="<?php echo $MOD['linkurl'];?>search.php" rel="nofollow"><?php echo $MOD['name'];?>搜索</a> ]&nbsp;
[ <a href="javascript:SendFav();">加入收藏</a> ]&nbsp;
[ <a href="javascript:SendPage();">告诉好友</a> ]&nbsp;
[ <a href="javascript:Print();">打印本文</a> ]&nbsp;
[ <a href="javascript:window.close()">关闭窗口</a> ]
</center>
<br/>
<?php include template('comment', 'chip');?>
<br/>
</div>
</div>
<div class="m_n f_l">&nbsp;</div>
<div class="m_r f_l">
<div class="contact_head">联系方式</div>
<div class="contact_body" id="contact"><?php include template('contact', 'chip');?></div>
<div class="b10 c_b">&nbsp;</div>
<?php if($MOD['page_srelate']) { ?>
<?php if($username) { ?>
<div class="box_head"><div><strong>该企业最新<?php echo $MOD['name'];?></strong></div></div>
<div class="box_body f_gray li_dot">
<?php echo tag("moduleid=$moduleid&condition=status=3 and username='$username'&pagesize=".$MOD['page_srelate']."&order=addtime desc", -2);?>
</div>
<?php } else { ?>
<div class="box_head"><div><strong>同类<?php echo $MOD['name'];?></strong></div></div>
<div class="box_body f_gray li_dot">
<?php echo tag("moduleid=$moduleid&condition=status=3&catid=$catid&areaid=$cityid&pagesize=".$MOD['page_srelate']."&order=addtime desc");?>
</div>
<?php } ?>
<?php } ?>
</div>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/album.js"></script>
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<?php include template('footer');?>