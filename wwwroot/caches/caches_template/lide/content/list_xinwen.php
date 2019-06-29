<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9480441a9464d7d73bdb1d3d7a04e4fb&action=position&posid=46&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'46','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="content">
	<div class="gongsi">
		<div class="biaot3">
			<div class="biaot3a">
			<h1><?php echo $CATEGORYS[$catid]['catname'];?></h1>
			<h2>COMPREHENSIVE</h2>
			</div>
		</div>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=006576f8dd4966169cd9ee1917809ac8&action=lists&catid=%24catid&order=listorder+DESC&num=10&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
		<div class="gongsi1">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
			<div class="gongsi1a">
				<a href="<?php echo $v['url'];?>" class="gongsi1b"><img src="<?php echo $v['thumb'];?>"></a>
				<a href="<?php echo $v['url'];?>" class="gongsi1c">
					<h2><?php echo date("Y-m-d",$v["inputtime"]);?></h2>
					<h3><?php echo $v['title'];?></h3>
					<h4><?php echo $v['description'];?></h4>
				</a>
				<div class="clearfix"></div>
			</div>
			<?php $n++;}unset($n); ?>
			<div id="pages" class="pagess"><?php echo $pages;?></div>
			<div class="clearfix" style="margin-top: 30px;margin-right: 50px;"></div>
		</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  


	</div>
</div>
<?php include template("content","footer"); ?>