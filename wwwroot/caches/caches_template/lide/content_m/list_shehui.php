<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header_b"); ?>
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
				<h2><?php echo $CATEGORYS[$catid]['catname'];?></h2>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fd5da9611d19749c35ab3dd08ed2fa0d&action=lists&catid=%24catid&order=listorder+DESC&num=1000&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1000;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>
</body>
</html>
