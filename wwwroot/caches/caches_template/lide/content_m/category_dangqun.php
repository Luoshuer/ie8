<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header_b"); ?>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5346a216b54c0249b119bba7ac99954a&action=position&posid=49&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'49','order'=>'listorder DESC','limit'=>'20',));}?> 
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
		<div class="content1">
			<div class="biaot">
				<h2>党建工作</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=29">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=924256a1c60c17616d4710291e2e8cd4&action=position&posid=32&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'32','order'=>'listorder DESC','limit'=>'3',));}?> 
			<ul class="xinwen2">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<li>
					<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>">
						<img src="<?php echo IMG_PATH;?>images2/a10.png">
						<h4><?php echo str_cut($v['title'],60,"…");?></h4>
						<h5><?php echo date("Y-m-d",$v["inputtime"]);?></h5>
						<h3 style="clear: both;"></h3>
					</a>
				</li>
			<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
		</div>
		<div style="height: 10px;background-color:#dcdcdc;margin-top: 10px;"></div>	
		<div class="content1">
			<div class="biaot">
				<h2>工会工作</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=30">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=db4c9ed84a74ce0d202ca730c44db3ff&action=position&posid=41&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'41','order'=>'listorder DESC','limit'=>'1',));}?> 
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
			<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>" class="xinwen1">
				<img src="<?php echo $v['thumb'];?>">
				<h3><?php echo str_cut($v['title'],60,"…");?></h3>
			</a>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ec0ad0b00016706b8c7be3044c410f5b&action=position&posid=34&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'34','order'=>'listorder DESC','limit'=>'3',));}?> 
			<ul class="xinwen2">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<li>
					<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>">
						<img src="<?php echo $v['thumb'];?>">
						<h4><?php echo str_cut($v['title'],60,"…");?></h4>
						<h5><?php echo date("Y-m-d",$v["inputtime"]);?></h5>
						<h3 style="clear: both;"></h3>
					</a>
				</li>
			<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
		</div>
		<div style="height: 10px;background-color:#dcdcdc;margin-top: 10px;"></div>	
		<div class="content1">
			<div class="biaot">
				<h2>员工生活</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=31">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f9ae1b77c41ef2eeb5b309046b80407e&action=position&posid=35&order=listorder+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'35','order'=>'listorder DESC','limit'=>'2',));}?> 
			<ul class="xinwen2">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<li>
					<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>">
						<img src="<?php echo $v['thumb'];?>">
						<h4><?php echo str_cut($v['title'],60,"…");?></h4>
						<h5><?php echo date("Y-m-d",$v["inputtime"]);?></h5>
						<h3 style="clear: both;"></h3>
					</a>
				</li>
			<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e30cbe18f3b4e5533a73a3bd1d1087f9&action=position&posid=42&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'42','order'=>'listorder DESC','limit'=>'3',));}?> 
			<ul class="xinwen4">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<li>
					<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>"><?php echo str_cut($v['title'],100,"…");?><span><?php echo date("Y-m-d",$v["inputtime"]);?></span></a>
				</li>
			<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		
		
	</div>
<?php include template("content_m","footer"); ?>
