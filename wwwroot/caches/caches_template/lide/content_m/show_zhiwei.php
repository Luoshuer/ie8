<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header_b"); ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2da006847b41acc26f4a08fc58b034a1&action=position&posid=51&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'51','order'=>'listorder DESC','limit'=>'20',));}?> 
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
		<div class="xiangqingp">
			<div class="xiangqingp1">
				<h1><?php echo $mingcheng;?></h1>
				<p>工作地点：<?php echo $didian;?><br>
					最高学历：<?php echo $xueli;?><br>
					薪资范围：<?php echo $xinzi;?><br>
					工作经验：<?php echo $jingyan;?><br>
					发布时间：<?php echo date('Y-m-d',strtotime($inputtime));?><br>
				</p>
			</div>
			<div class="xiangqingp2">
				<?php echo $content;?>
			</div>			
		</div>	
	</div>
<?php include template("content_m","footer"); ?>
	
	
	

