<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5280f71db37dc0fbfbb9b112e6240b2b&action=position&posid=45&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'45','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="content">
	<div class="gongsi">
		<div class="biaot3">
			<div class="biaot3a">
			<h1><?php echo $CATEGORYS[$catid]['catname'];?></h1>

			</div>
		</div>
		
		<div style="width:1200px;margin:0 auto;padding-bottom: 60px;">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=332243739c919b075bdb01b90ca9a4ed&action=lists&catid=%24catid&order=listorder+DESC&num=15&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
			<div>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<a href="<?php echo $v['youq'];?>" class="gongsi1b" style="display: block;float: left;width:280px;margin-left:90px;margin-top: 40px; ">
					<img src="<?php echo $v['thumb'];?>" style="width:280px;height: 184px;">
					<h4 style="text-align: center;color:black;line-height: 30px;"><?php echo $v['title'];?></h4>
				</a>
			<?php $n++;}unset($n); ?>
			<div style="clear: both"></div>
			<div id="pages" class="pagess"><?php echo $pages;?></div>
			</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>  
		

	</div>
</div>
<?php include template("content","footer"); ?>