<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<div class="footer">
<div class="youqing">
	<h2>友情链接</h2>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aff1df690e6884468ce1897fa2518e5a&action=position&posid=19&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'20',));}?> 
	<div class="youqing1">
	<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
		<a href="<?php echo $v['youq'];?>"><?php echo $v['title'];?></a>
	<?php $n++;}unset($n); ?> 
		<div class="clearfix"></div>
	</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 


	<div class="clearfix"></div>
</div>
<div class="di">
	Copyright © 南京利德东方橡塑科技有限公司<br>
	 苏ICP备16005312号-1
</div>
</div>
<a href="#top" class="topt" style="color:#1d90c7;z-index: 9999;"><img src="<?php echo IMG_PATH;?>images/a15.png"></a>
<script>
	$(".pagess a").hide()
	$(".pagess span").hide()
	$(".pagess a").eq(1).show()
	$(".pagess a").last().show()
</script>
<style>
	.pagess a{color:#c9c9c9;font-size: 14px;}
	.pagess a:hover{color:#1d90c7;}
</style>
</body>
</html>
