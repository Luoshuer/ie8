<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header_b"); ?>
	
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5280f71db37dc0fbfbb9b112e6240b2b&action=position&posid=45&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'45','order'=>'listorder DESC','limit'=>'20',));}?> 
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
				<li><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=9">公司简介</a></li>
				<li><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=37">组织架构</a></li>
				<li><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=18" class="bian">资质荣誉</a></li>
				<li  style="border:none;"><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=38" >联系我们</a></li>
				<div class="clearfix"></div>
			</ul>
		</div>
		<div style="height: 10px;background-color:#f2f1ef;margin-top: 10px;"></div>	
		<div class="content1">
			
	
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fd5da9611d19749c35ab3dd08ed2fa0d&action=lists&catid=%24catid&order=listorder+DESC&num=1000&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1000;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
			<div class="tixi">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
				<a>
					<img src="<?php echo $v['thumb'];?>">
					<p><?php echo $v['title'];?></p>
				</a>
			<?php $n++;}unset($n); ?> 
				<div class="clearfix"></div>
			</div>
			
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		

		


		
	</div>

	
	
	<?php include template("content_m","footer"); ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>
</body>
</html>
