<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="m_l f_l">
<div>
<div class="table">
<?php $tags=tag("table=quote_product&condition=1&areaid=$cityid&pagesize=20&order=edittime desc&length=16&template=null");?>
<?php if($tags) { ?>
<div class="table_list">
<span class="s1">品名</span>
<span class="s2">价格</span>
<span class="s3">单位</span>
<span class="s4">报价数</span>
</div>
<div id="quoteup">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<p>
<span class="s1"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('price.php?itemid='.$t['itemid']);?>" target="_blank" title="<?php echo $t['alt'];?>" class="b"><?php echo $t['title'];?></a></span>
<span class="f_red">￥<?php echo $t['price'];?></span>
<span class="s3" ><?php echo $t['unit'];?></span>
<span class="s4"><?php echo $t['item'];?></span>
</p>
<?php } } ?>
</div>
<?php } ?>
<div class="b10"></div>
<center><a href="<?php echo $MOD['linkurl'];?>product.php" title="<?php echo $t['alt'];?>">查看所有产品报价&raquo;</a></center>
</div>

<div class="hot">
<!-- <div class="headline"></div> -->
<div class="box_head"><strong>最新热点</strong></div>
<div class="subline" style="border:1px solid #ccc">
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=1&areaid=$cityid&order=".$MOD['order']."&pagesize=5&datetype=2&target=_blank");?>
</div>
</div>
<div style="clear:both"></div>
</div>
<div class="c_b"></div>
<div class="b10"></div>
<?php if($MOD['page_icat']) { ?>
<div >
<?php if(is_array($maincat)) { foreach($maincat as $i => $c) { ?>
<?php if($i%2==0) { ?><div><?php } ?>

<div  class="box">
<div class="box_head"><span class="f_r"><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>">更多&raquo;</a></span><strong><?php echo $c['catname'];?></strong></div>
<div class="box_body li_dot f_gray"><?php echo tag("moduleid=$moduleid&catid=".$c['catid']."&areaid=$cityid&condition=status=3&order=".$MOD['order']."&pagesize=".$MOD['page_icat']."&datetype=2&target=_blank");?></div>
</div>
<?php if($i%2==0) { ?><span class="s5"></span><?php } ?>
<?php if($i%2==1) { ?></div><?php } ?>
<?php } } ?>
</div>
<?php } ?>
</div>
<div class="m_n f_l">&nbsp;</div>
<div class="m_r f_l">
<div class="box_head"><div><strong>本周关注排行</strong></div></div>
<div class="box_body">
<div class="rank_list">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*7&pagesize=10&order=week_search desc&key=week_search&template=list-search_rank");?>
</div>
</div>
<div class="b10 c_b"> </div>
<div class="box_head"><div><strong>按分类浏览</strong></div></div>
<div class="box_body">
<!-- <table width="100%" cellpadding="3"> -->
<div>
<?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
<?php if($k%2==0) { ?><p><?php } ?>
<span><a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo set_style($v['catname'],$v['style']);?></a><?php if(!$cityid) { ?> <span class="f_gray px10">(<?php echo $v['item'];?>)</span><?php } ?>
</span>
<?php if($k%2==1) { ?></p><?php } ?>
<?php } } ?>
</div>
<!-- </table> -->
</div>
<div class="b10 c_b">&nbsp;</div>
<div class="box_head"><div><strong>点击排行</strong></div></div>
<div class="box_body">
<div class="rank_list"><?php echo tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&areaid=$cityid&order=hits desc&pagesize=10");?></div>
</div>
</div>
</div>
<?php echo load('marquee.js');?>
<script type="text/javascript">
new dmarquee(22, 20, 1000, 'quoteup');
</script>
<?php include template('footer');?>