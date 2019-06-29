<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9b8bb401ced28a54c6080930c02c961f&action=position&posid=50&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'50','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="content">
	<div class="biaot3">
			<div class="biaot3a">
			<h1><?php echo $CATEGORYS[$catid]['catname'];?></h1>
			<h2>HEALTHY AND SAFE ENVIRONMENT</h2>
			</div>
		</div>
		<div class="jiankang">

			<div class="xinwen2a">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6bdbb8274da83b7626d61579a88cb4b2&action=lists&catid=%24catid&order=listorder+DESC&num=12&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
				<ul>
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
						<li>
							<a href="<?php echo $v['url'];?>">
								<h2><?php echo date("d",$v["inputtime"]);?><span><?php echo date("Y-m",$v["inputtime"]);?></span></h2>
								<h3 style="width:930px;"><?php echo str_cut($v['title'],56,"…");?>
								<span><?php echo $v['description'];?></span>
								</h3>
								<div class="clearfix"></div>
							</a>
						</li>
					<?php $n++;}unset($n); ?> 
						<div class="clearfix"></div>
				</ul>
				<div id="pages" class="pagess" style="margin-top: 50px;margin-right: 60px;"><?php echo $pages;?></div>
				<div class="clearfix"></div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  

			</div>

		</div>
		

</div>
<?php include template("content","footer"); ?>
