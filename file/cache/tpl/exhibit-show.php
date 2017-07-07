<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;</script>
<div class="m">
<div class="m_l f_l">
<div class="left_box">
<div class="pos">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo; 正文</div>
<h1 class="title" id="title"><?php echo $title;?></h1>
<div class="info"><span class="f_r"><img src="<?php echo DT_SKIN;?>image/zoomin.gif" width="16" height="16" alt="放大字体" class="c_p" onclick="fontZoom('+');"/>&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/zoomout.gif" width="16" height="16"  alt="缩小字体" class="c_p" onclick="fontZoom('-');"/></span>
发布日期：<?php echo $adddate;?>
&nbsp;&nbsp;浏览次数：<span id="hits"><?php echo $hits;?></span>
&nbsp;&nbsp;状态：<img src="<?php echo DT_STATIC;?>file/image/process_<?php echo $process;?>.gif" id="process" alt="状态" align="absmiddle"/>
</div>
<div class="pd20">
<table cellspacing="1" cellpadding="10" width="100%" class="ctb">
<tr>
<td class="ltd">展会日期</td>
<td class="rtd"><?php echo $fromtime;?> 至 <?php echo $totime;?></td>
</tr>
<tr>
<td class="ltd">展出城市</td>
<td class="rtd"><?php echo $city;?></td>
</tr>
<tr>
<td class="ltd">展出地址</td>
<td class="rtd"><?php echo $address;?></td>
</tr>
<tr>
<td class="ltd">展馆名称</td>
<td class="rtd"><?php echo $hallname;?></td>
</tr>
<tr>
<td class="ltd">主办单位</td>
<td class="rtd"><?php echo $sponsor;?></td>
</tr>
<?php if($undertaker) { ?>
<tr>
<td class="ltd">承办单位</td>
<td class="rtd"><?php echo $undertaker;?></td>
</tr>
<?php } ?>

<?php if($homepage) { ?>
<tr>
<td class="ltd">官方网站</td>
<td class="rtd"><a href="<?php echo $homepage;?>" target="_blank" class="b"><?php echo $homepage;?></a></td>
</tr>
<?php } ?>
<?php if($sign && $process == 1 && $username) { ?>
<tr>
<td class="ltd">在线报名</td>
<td class="rtd"><img src="<?php echo DT_SKIN;?>image/btn_sign.gif" alt="在线报名" class="c_p" onclick="Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('sign.php?itemid='.$itemid);?>');"/></td>
</tr>
<?php } ?>
</table>
</div>
<div class="left_head">展会说明</div>
<div id="content" class="content"><?php include template('content', 'chip');?></div>
<div class="b10">&nbsp;</div>
<?php if($remark) { ?>
<div class="left_head">展会备注</div>
<div class="content"><?php echo nl2br($remark);?></div>
<div class="b10">&nbsp;</div>
<?php } ?>
<?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
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
<div class="box_head"><div><strong>按分类浏览</strong></div></div>
<div class="box_body">
<table width="100%" cellpadding="3">
<?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
<?php if($k%2==0) { ?><tr><?php } ?>
<td><a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo set_style($v['catname'],$v['style']);?></a><?php if(!$cityid) { ?> <span class="f_gray px10">(<?php echo $v['item'];?>)</span><?php } ?>
</td>
<?php if($k%2==1) { ?></tr><?php } ?>
<?php } } ?>
</table>
</div>
<div class="b10 c_b">&nbsp;</div>
<div class="box_head"><div><strong>最新<?php echo $MOD['name'];?></strong></div></div>
<div class="box_body f_gray li_dot"><?php echo tag("moduleid=$moduleid&condition=status>2&areaid=$cityid&order=".$MOD['order']."&pagesize=10");?></div>
</div>
</div>
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<?php include template('footer');?>