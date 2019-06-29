<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

    <div id="ban1">
	  <div class="banner">
      <ul class="img">
	  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2c30c22fc16eb2ef79fab712c5b9a4d9&action=position&posid=47&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'47','order'=>'listorder DESC','limit'=>'3',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		   <li><a><img src="<?php echo $val['thumb'];?>" class="topim"></a></li>
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
</ul>
		<ul class="num">
		</ul>
		<div class="btn btn_l">&lt;</div>
		<div class="btn btn_r">&gt;</div>
	  </div>
	</div><strong></strong>
	
<div class="content">
	<a name="chanpint"></a>
	<div class="jianjie">
		<div class="jianjie1">
			<div class="xian" style="width:387px;"></div>
			<ul style="width:426px;">
				<li>
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=23#chanpint">汽车领域</a>
				</li>
				<li>
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=24#chanpint">轨道交通</a>
				</li>
				<li>
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=25#chanpint">新航海</a>
				</li>
				<div class="clearfix"></div>
			</ul>
			<div class="xian" style="width:387px;"></div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="chanpina">
		<div class="biaot4">
			<?php echo $CATEGORYS[$catid]['catname'];?><span></span>
		</div>
		<div class="chanpina1">
			<p><?php echo $CATEGORYS[$catid]['description'];?></p>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6bdbb8274da83b7626d61579a88cb4b2&action=lists&catid=%24catid&order=listorder+DESC&num=12&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
			<ul>
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
				<li>
					<a href="<?php echo $v['url'];?>" class="chanpin1a">
						<img src="<?php echo $v['thumb'];?>">
					</a>
					<a href="<?php echo $v['url'];?>" class="chanpin1b">
						<h2><?php echo str_cut($v['title'],36,"…");?></h2>
						<h3><?php echo str_cut($v['description'],160,"…");?></h3>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
				<div id="pages" class="pagess" style="margin-top: 30px;margin-right: 50px;"><?php echo $pages;?></div>
				<div class="clearfix"></div>				
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
		</div>
	</div>
	
</div>
<?php include template("content","footer"); ?>
