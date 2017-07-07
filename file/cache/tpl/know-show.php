<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;</script>
<div class="m">
<div class="nav">
<span class="f_r">
<input type="button" value="我要提问" onclick="Go('<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=<?php echo $moduleid;?>&cid=<?php echo $catid;?>&action=add');"/></span>
当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?>
<div class="c_b"></div>
</div>
</div>
<div class="m">
<div class="know_show">
<table>
<tr>
<td valign="top" class="know_show_l">
<ul>
<?php if($item['hidden']) { ?>
<li><strong>匿名</strong></li>
<li><img src="<?php echo useravatar('', 'large');?>" alt=""/></li>
<?php } else { ?>
<li>
<?php if($item['username']) { ?>
<a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?username='.$item['username']);?>" class="b" rel="nofollow"><strong><?php echo $item['username'];?></strong></a>
<?php } else { ?>
<strong title="<?php echo hide_ip($item['ip']);?>"><?php echo ip2area($item['ip']);?>访客</strong>
<?php } ?>
</li>
<li><img src="<?php echo useravatar($item['username'], 'large');?>" alt=""/></li>
<?php if($item['username'] && $DT['im_web']) { ?><li><?php echo im_web($item['username'], 1);?></li><?php } ?>
<?php } ?>
<li></li>
</ul>
</td>
<td valign="top">
<div class="know_info">
<span class="f_r">
关注：<span id="hits"><?php echo $hits;?></span>
</span>
<span class="px11"><?php echo timetodate($addtime, 5);?></span>
</div>
<h1 class="title" id="title"><?php echo $title;?></h1>
<div class="info"><span class="f_r f_b px13"><img src="<?php echo DT_SKIN;?>image/know_<?php echo $process;?>.gif" align="absmiddle"/> <?php echo $PROCESS[$process];?></span>
<img src="<?php echo DT_SKIN;?>image/ico_reward.gif" align="absmiddle"/> <span class="f_orange">悬赏分：<?php echo $credit;?></span>
<span class="f_gray">
<?php if($process == 1 || $process == 2) { ?>
- 离问题结束还有 <?php echo secondstodate($totime-$DT_TIME);?>
<?php } else if($process == 3) { ?>
- 解决时间 <?php echo timetodate($updatetime, 5);?>
<?php } ?>

</span>
</div>
<?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
<div id="question" class="content"><?php echo $content;?></div>
<?php if($addition) { ?>
<div class="know_addition">
<strong>问题补充：</strong><br/>
<?php echo nl2br($addition);?>
</div>
<?php } ?>
<?php if($process == 1) { ?><br/><a href="#answer"><img src="<?php echo DT_SKIN;?>image/btn_answer.gif" width="90" height="23" alt="我来回答" id="answer_btn" style="display:none;margin:20px;"/></a><?php } ?>
</td>
</tr>
</table>
</div>
</div>
<?php if($aid && $best) { ?>
<div class="m">
<div class="know_show">
<img src="<?php echo DT_SKIN;?>image/best_<?php if($E) { ?>expert<?php } else { ?>answer<?php } ?>
.gif" alt="" class="best_image"/>
<table>
<tr>
<td valign="top" class="know_show_l">
<ul>
<?php if($E) { ?>
<li><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('expert.php?itemid='.$E['itemid']);?>" target="_blank" class="b"><strong><?php echo $E['title'];?></strong></a></li>
<li><img src="<?php echo useravatar($E['username'], 'large');?>" alt=""/></li>
<?php if($DT['im_web']) { ?><li><?php echo im_web($E['username'], 1);?></li><?php } ?>
<li class="f_red">知道专家</li>
<li title="擅长领域：<?php echo $E['major'];?>"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=10&action=add&askto=<?php echo $E['username'];?>" target="_blank" class="b">向TA提问</a></li>
<?php } else { ?>
<?php if($best['hidden']) { ?>
<li><strong>匿名</strong></li>
<li><img src="<?php echo useravatar('', 'large');?>" alt=""/></li>
<?php } else { ?>
<li>
<?php if($best['username']) { ?>
<a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?username='.$best['username']);?>" class="b" rel="nofollow"><strong><?php echo $best['username'];?></strong></a>
<?php } else { ?>
<strong title="<?php echo hide_ip($best['ip']);?>"><?php echo ip2area($best['ip']);?>访客</strong>
<?php } ?>
</li>
<li><img src="<?php echo useravatar($best['username'], 'large');?>" alt=""/></li>
<?php if($best['username'] && $DT['im_web']) { ?><li><?php echo im_web($best['username'], 1);?></li><?php } ?>
<?php } ?>
<?php } ?>
<li></li>
</ul>
</td>
<td valign="top">
<div class="know_info">
<span class="f_r">
<span id="v_msg"></span>&nbsp;
<a href="javascript:" onclick="V(1, <?php echo $agree;?>);">支持</a>(<span id="v_<?php echo $itemid;?>_1"><?php echo $agree;?></span>)&nbsp; | &nbsp;
<a href="javascript:" onclick="V(0, <?php echo $against;?>);">反对</a>(<span id="v_<?php echo $itemid;?>_0"><?php echo $against;?></span>)
<?php if(in_array($moduleid, explode(',', $EXT['comment_module']))) { ?>
&nbsp; | &nbsp;<a href="<?php echo $EXT['comment_url'];?><?php echo rewrite('index.php?mid='.$moduleid.'&itemid='.$itemid);?>">我来评论</a>
<?php } ?>
</span>
<span class="px11"><?php echo timetodate($best['addtime'], 5);?></span>
</div>
<div id="content" class="content"><?php include template('content', 'chip');?></div>
<?php if($comment) { ?>
<div class="know_comment">
<strong>提问者对答案的评价：</strong><br/>
<?php echo nl2br($comment);?>
</div>
<?php } ?>
</td>
</tr>
</table>
</div>
</div>
<script style="text/javascript">
var v_op = 1;
var v_nm = 0;
function V(op, nm) {
v_op = op;
v_nm = nm;
if(get_cookie('best_answer_<?php echo $itemid;?>')) {
Inner('v_msg', '您已经对最佳答案表过态了');
return;
}
makeRequest('action=best&itemid=<?php echo $itemid;?>&op='+op, '<?php echo $MOD['linkurl'];?>answer.php', '_V');
}
function _V() {
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
if(xmlHttp.responseText == -1) {
Inner('v_msg', '您已经对最佳答案表过态了');
} else if (xmlHttp.responseText == 0) {
Inner('v_msg', '参数错误，如有疑问请联系管理员');
} else if (xmlHttp.responseText == 1) {
if(v_op == 1) {
Inner('v_<?php echo $itemid;?>_1', ++v_nm);
} else {
Inner('v_<?php echo $itemid;?>_0', ++v_nm);
}
Inner('v_msg', '感谢参与');
}
}
}
</script>
<?php } ?>
<div class="m">
<script type="text/javascript">show_answer(<?php echo $itemid;?>);</script>
<a name="answer"></a>
</div>
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<?php include template('footer');?>