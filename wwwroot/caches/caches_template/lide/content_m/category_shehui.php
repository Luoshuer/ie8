<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content_m","header_b"); ?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9b8bb401ced28a54c6080930c02c961f&action=position&posid=50&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'50','order'=>'listorder DESC','limit'=>'20',));}?> 
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
				<h2>健康安全与环境</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=32">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=10476c18649396930bc878ee0eb127cc&action=position&posid=43&order=listorder+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'43','order'=>'listorder DESC','limit'=>'2',));}?> 
			<ul class="xinwen2">
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
				<li>
					<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>">
						<img src="<?php echo $v['thumb'];?>">
						<h4><?php echo str_cut($v['title'],56,"…");?></h4>
						<h5><?php echo date("Y-m-d",$v["inputtime"]);?></h5>
						<h3 style="clear: both;"></h3>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=deba1a40f9d973df4619d4e1c52cca1d&action=position&posid=36&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'36','order'=>'listorder DESC','limit'=>'3',));}?> 
			<ul class="xinwen4">
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
				<li>
					<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>"><?php echo $v['title'];?><span><?php echo date("Y-m-d",$v["inputtime"]);?></span></a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		<div style="height: 10px;background-color:#dcdcdc;margin-top: 10px;"></div>	
		<div class="content1">
			<div class="biaot">
				<h2>责任与关怀</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=33">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=50d0e23350b0f1fe9a08e85d0c393180&action=position&posid=38&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'38','order'=>'listorder DESC','limit'=>'3',));}?>
			<ul class="xinwen2">
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<li>
					<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>">
						<img src="<?php echo $v['thumb'];?>">
						<h4><?php echo $v['title'];?></h4>
						<h5><?php echo date("Y-m-d",$v["inputtime"]);?></h5>
						<h3 style="clear: both;"></h3>
					</a>
				</li>
				<?php $n++;}unset($n); ?> 	
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>		
	</div>

<?php include template("content_m","footer"); ?>