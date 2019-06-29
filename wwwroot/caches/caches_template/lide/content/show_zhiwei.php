<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2da006847b41acc26f4a08fc58b034a1&action=position&posid=51&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'51','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="content">
	<div class="zwx">
		<div class="zwxbox">
		<div class="zwx1">
			<h1><?php echo $mingcheng;?></h1>
			<h2>南京利德东方橡塑科技有限公司</h2>
			<h3><?php echo $xinzi;?> / <?php echo $didian;?> / <?php echo $jingyan;?> / <?php echo $xueli;?> / <?php echo $quanzhi;?></h3>
		</div>
		<div class="zwx2">
			<p><?php echo date('Y-m-d',strtotime($inputtime));?></p>
			<a>简历邮箱 hr@orlete.com</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<div class="zwn">
		<?php echo $content;?>
	</div>
</div>
<?php include template("content","footer"); ?>
