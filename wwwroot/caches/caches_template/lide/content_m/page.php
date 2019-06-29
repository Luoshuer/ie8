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
				<li><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=9" class="">公司简介</a></li>
				<li><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=37" class="">组织架构</a></li>
				<li><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=18"  class="">资质荣誉</a></li>
				<li  style="border:none;"><a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=38" class="">联系我们</a></li>
				<div class="clearfix"></div>
			</ul>
		</div>
		<div style="height: 10px;background-color:#f2f1ef;margin-top: 10px;"></div>	

		<div class="content4" style="min-height: 360px;">
		<div class="neirongh">
			<?php echo $content;?>
			
		</div>
		</div>
		
	</div>
	<div class="xianqi" style="display: none;"><?php echo $catid;?></div>

	<script>
		var pp=$(".xianqi").text()

		if(pp==37){
			$(".navb ul a").eq(1).addClass("bian")
		}
		if(pp==18){
			$(".navb ul a").eq(2).addClass("bian")
		}
		if(pp==38){
			$(".navb ul a").eq(3).addClass("bian")
		}

</script>
	
	
<?php include template("content_m","footer"); ?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>
</body>
</html>
