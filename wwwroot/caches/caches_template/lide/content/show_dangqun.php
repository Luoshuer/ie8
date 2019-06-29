<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5346a216b54c0249b119bba7ac99954a&action=position&posid=49&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'49','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="content">
	<div class="gongsi">
		<div class="biaot3">
			<div class="biaot3a">
			<h1><?php echo $CATEGORYS[$catid]['catname'];?></h1>
			<h2></h2>
			</div>
		</div>
		<div class="xiangqing">
			<div class="xiangqing1">
				<h1><?php echo $title;?></h1>
				<h2>发表时间：<?php echo $inputtime;?>&nbsp;&nbsp;来源：<?php echo $copyfrom;?></h2>
			</div>
			<div class="xiangqing2">
				<?php echo $content;?>
			</div>
			<div class="xiangqing3">
				<div class="xiangqing3a">
				  <strong>上一条：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
             <strong>下一条：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
				</div>
		
				<a href="<?php echo $CATEGORYS[$top_parentid]['url'];?>" class="xiangqing3b">
					返回列表
				</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php include template("content","footer"); ?>
