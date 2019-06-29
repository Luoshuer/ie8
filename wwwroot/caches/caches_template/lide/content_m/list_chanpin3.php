<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header_b"); ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7bfb96500dc3336f6f602a559f54359c&action=position&posid=47&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'47','order'=>'listorder DESC','limit'=>'20',));}?> 
	<div class="banner">
		<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
			<img src="<?php echo $val['thumb'];?>">
		<?php $n++;}unset($n); ?> 
	</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
	<script>
	var q=$(".banner img").length
	var w=0
	$(".banner img").hide()
	$(".banner img").eq(0).show()
	var r=setInterval(function(){
		if(w<q-1)
		{w=w+1}
		else{w=0}
		$(".banner img").hide()
		$(".banner img").eq(w).show()
	},3000)
	</script>
<div class="clearfix"></div>
	<div class="content">
		<div class="navb">
			<ul>
				<li style="width:33.3%;"><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=23" class="">汽车领域</a></li>
				<li style="width:33.3%;"><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=24" class="">轨道交通</a></li>
				<li style="border:none;width:33.3%;"><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=25" class="">新航海</a></li>
				<div class="clearfix"></div>
			</ul>
		</div>
		<div style="height: 10px;background-color:#dcdcdc;margin-top: 10px;"></div>	
		<div class="biaot">
				<h2>产品介绍</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=48" style="display: block;float: right;font-size: 14px;color:#1d90c7">查看更多>></a>
				<div class="clearfix"></div>
		</div>
		<div style="height: 1px;background-color:#f4f4f4;margin-top: 10px;"></div>	
		<div class="chanpinl">
			<p><?php echo $CATEGORYS[$catid]['description'];?></p>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b7b3b92a7efe513f94fe35051658b309&action=position&posid=56&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'56','order'=>'listorder DESC','limit'=>'6',));}?> 
			<div class="chanpinbox">
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
				<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>">
					<img src="<?php echo $v['thumb'];?>">
					<h2><?php echo str_cut($v['title'],28,"…");?></h2>
				</a>
				<?php $n++;}unset($n); ?>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
		</div>
		<div class="chanpin2">
			<div class="biaot">
				<h2 style="float: left;">合作伙伴</h2><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=26" style="font-size: 14px;float: right;color:#1d90c7;width:auto;display: block;margin-top: 0;">查看更多>></a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0b249829bf5d69497d95af742fd0122e&action=position&posid=27&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'27','order'=>'listorder DESC','limit'=>'6',));}?> 
			<div class="chanpin2b">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<a href="<?php echo $v['youq'];?>"><img src="<?php echo $v['thumb'];?>"></a>
			<?php $n++;}unset($n); ?> 
				<div class="clearfix"></div>
				
			</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			
		</div>
	</div>
		<div class="xianqi" style="display: none;"><?php echo $catid;?></div>

	<script>
		var pp=$(".xianqi").text()

		if(pp==23){
			$(".navb ul a").eq(0).addClass("bian")
		}
		if(pp==24){
			$(".navb ul a").eq(1).addClass("bian")
		}
		if(pp==25){
			$(".navb ul a").eq(2).addClass("bian")
		}

</script>

<?php include template("content_m","footer"); ?>
	
	


