<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>


		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5346a216b54c0249b119bba7ac99954a&action=position&posid=49&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'49','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
	
<div class="content">
	<div class="dangjian">
		<div class="biaot4">
			党建工作
		</div>
		<div class="dangjianbox">
		<div class="dangjian1">
			<div class="dangjian1a">
				<h2></h2>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3ee2c5dbab65af433002b0eb44646a35&action=position&posid=31&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'31','order'=>'listorder DESC','limit'=>'1',));}?> 
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<p>
					<?php echo str_cut($v['jianshu'],200,"…");?><a href="<?php echo $v['url'];?>">【详情】</a>
				</p>
				<?php $n++;}unset($n); ?> 
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=924256a1c60c17616d4710291e2e8cd4&action=position&posid=32&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'32','order'=>'listorder DESC','limit'=>'3',));}?> 
			<div class="dangjian1b">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<a href="<?php echo $v['url'];?>">
					<h2><?php echo date("d",$v["inputtime"]);?><span><?php echo date("Y-m",$v["inputtime"]);?></span></h2>
					<h3><?php echo str_cut($v['jianshu'],160,"…");?></h3>
					<div class="clearfix"></div>
				</a>
			<?php $n++;}unset($n); ?> 
			</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=29" class="gengduo">更多&gt;&gt;</a>
			<div class="clearfix"></div>
		</div>
		<div class="dangjian2">
			<div id="full-screen-slider">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ec7376f1bfce4a9f34856e84d920a004&action=position&posid=33&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'33','order'=>'listorder DESC','limit'=>'20',));}?> 
				<ul id="slides">
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
					<li style="background:url('<?php echo $v['thumb'];?>') no-repeat center top"><a href="<?php echo $v['url'];?>"></a>
					<h2 class="timu"><?php echo $v['title'];?></h2></li>
				<?php $n++;}unset($n); ?>
				</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<div class="gongsi">
		<div class="biaot4">
			工会工作
		</div>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d6358edf2bcfaae60bb759923faf387&action=position&posid=34&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'34','order'=>'listorder DESC','limit'=>'5',));}?> 
		<div class="gongsi1" style="margin-bottom: 0;">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
			<div class="gongsi1a" style="border:none;">
				<a href="<?php echo $v['url'];?>" class="gongsi1b" style="margin-left: 0;"><img src="<?php echo $v['thumb'];?>"></a>
				<a href="<?php echo $v['url'];?>" class="gongsi1c" style="margin-right: 100px;">
					<h2><?php echo date("Y-m-d",$v["inputtime"]);?></h2>
					<h3><?php echo $v['title'];?></h3>
					<h4><?php echo str_cut($v['jianshu'],460,"…");?></h4>
				</a>
				<div class="clearfix"></div>
			</div>
			<?php $n++;}unset($n); ?>
			<div style="height: 1px; background-color:#f2f2f2;margin-bottom: 10px;"></div>
			<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=30" class="gengduo">更多&gt;&gt;</a>
			<div class="clearfix"></div>
		</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
	<div class="shenghuo">
		<div class="biaot4">
			员工生活
		</div>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e34413422232b7b8b324704921588103&action=lists&catid=31&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'31','order'=>'listorder DESC','limit'=>'3',));}?> 
		<div class="gongsi1" style="margin-bottom: 0;">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
			<div class="gongsi1a" style="border:none;">
				<a href="<?php echo $v['url'];?>" class="gongsi1b" style="margin-left: 0;"><img src="<?php echo $v['thumb'];?>"></a>
				<a href="<?php echo $v['url'];?>" class="gongsi1c" style="margin-right: 100px;">
					<h2><?php echo date("Y-m-d",$v["inputtime"]);?></h2>
					<h3><?php echo $v['title'];?></h3>
					<h4><?php echo $v['description'];?></h4>
				</a>
				<div class="clearfix"></div>
			</div>
			<?php $n++;}unset($n); ?>
			<div style="height: 1px; background-color:#f2f2f2;margin-bottom: 10px;"></div>
			<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=31" class="gengduo">更多&gt;&gt;</a>
			<div class="clearfix"></div>
		</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	
	</div>
</div>
<?php include template("content","footer"); ?>
