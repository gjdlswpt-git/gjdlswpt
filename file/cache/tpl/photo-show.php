<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($pass) { ?>
<?php include template('header');?>
<script type="text/javascript">
var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;
if(isIE) {
document.write('<style type="text/css">');
document.write("#cursor_a {cursor:url('<?php echo DT_SKIN;?>image/prev.cur'),default;}");
document.write("#cursor_b {cursor:url('<?php echo DT_SKIN;?>image/next.cur'),default;}");
document.write('</style>');
}
</script>
<div class="m">
<a name="p"></a>
<div class="nav">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo;</div>
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" class="photo_l">
<input id="destoon_previous" type="hidden" value="<?php echo $prev_photo;?>#p">
<input id="destoon_next" type="hidden" value="<?php echo $next_photo;?>#p">
<div class="photo_info">
<div class="photo_info_r"><span class="count_a"><?php echo $page;?></span> <span class="count_b">/ <?php echo $items;?></span></div>
<div>
<h1 class="title" id="title"><?php echo $title;?></h1>
日期：<span class="px11"><?php echo $adddate;?></span>&nbsp;&nbsp;&nbsp;
点击：<span id="hits" class="px11"><?php echo $hits;?></span>&nbsp;&nbsp;&nbsp;
<span onclick="View(Dd('destoon_photo').src);" class="c_p">查看原图</span>&nbsp;&nbsp;&nbsp;
<span onclick="Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('view.php?itemid='.$itemid);?>#p');" class="c_p">全部展开</span>
</div>
</div>
<div class="b10"></div>
<div id="photo"><?php include template('content', 'chip');?></div>
<?php if($P['introduce']) { ?><div class="photo_intro"><?php echo nl2br($P['introduce']);?></div><?php } ?>
<div class="b10"></div>
</td>
<td valign="top" class="photo_r">
<br/><br/><br/>
<a href="<?php echo $prev_photo;?>#p"><img src="<?php echo DT_SKIN;?>image/photo_prev.gif" title="上一张"/></a>
<br/><br/>
<div id="side">
<?php if($user_status == 3) { ?>
<?php $action = 'side';?>
<?php include template('content', 'chip');?>
<?php $action = '';?>
<?php } else { ?>
<div style="height:200px;">&nbsp;</div>
<?php } ?>
</div>
<br/><br/>
<a href="<?php echo $next_photo;?>#p"><img src="<?php echo DT_SKIN;?>image/photo_next.gif" title="下一张"/></a>
<br/><br/>
</td>
</tr>
</table>
</div>
<div class="m">
<div class="b10">&nbsp;</div>
<div class="box_head">
<div><strong><?php echo $MOD['name'];?>说明</strong></div>
</div>
<div class="box_body" style="padding:0;">
<?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
<div class="content c_b" id="content"><?php echo $content;?></div>
<div class="left_head"><span class="f_r"><a href="<?php echo $MOD['linkurl'];?><?php echo $CAT['linkurl'];?>">更多&raquo;</a></span>推荐<?php echo $MOD['name'];?></div>
<div class="b5">&nbsp;</div>
<div class="thumb"><?php echo tag("moduleid=$moduleid&condition=status=3 and open=3 and level=1 and items>0&catid=$catid&order=".$MOD['order']."&length=20&width=120&height=90&pagesize=6&cols=6&template=list-photo");?></div>
<?php include template('comment', 'chip');?>
</div>
</div>
<div class="m">
<br/>
<center>
[ <a href="<?php echo $MOD['linkurl'];?>search.php" rel="nofollow"><?php echo $MOD['name'];?>搜索</a> ]&nbsp;
[ <a href="javascript:SendFav();">加入收藏</a> ]&nbsp;
[ <a href="javascript:SendPage();">告诉好友</a> ]&nbsp;
[ <a href="javascript:Print();">打印本文</a> ]&nbsp;
[ <a href="javascript:window.close()">关闭窗口</a> ]
</center>
<br/>
</div>
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<script type="text/javascript">
window.onload = function() { try{Dd('cursor_a').style.height = Dd('cursor_b').style.height =  Dd('destoon_photo').height+'px';} catch(e) {} }
</script>
<?php include template('footer');?>
<?php } else { ?>
<meta http-equiv="refresh" content="0;url=<?php echo $MOD['linkurl'];?>private.php?itemid=<?php echo $itemid;?>&page=<?php echo $page;?>">
<?php } ?>
