<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9b8bb401ced28a54c6080930c02c961f&action=position&posid=50&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'50','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
	
<div class="content">

			
			<div class="xinwen1a" style="margin-top: 0;">
			<div class="jianjie5a">
				<div class="biaot2">健康安全环境</div>
			</div>
			<div class="xinwen1ab" style="margin-top: 60px;">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d019d8ff40893ce4037d5108bf0a6f63&action=position&posid=37&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','order'=>'listorder DESC','limit'=>'1',));}?> 
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<div class="xinwen1a1">
					<div class="xinwenbox1" style="background-image: url(<?php echo $v['thumb'];?>);background-size: 560px 300px;background-repeat: no-repeat;">
						<div class="shijian">
							<h2><?php echo date("d",$v["inputtime"]);?></h2>
							<h3><?php echo date("Y/m",$v["inputtime"]);?></h3>
						</div>
					</div>
					<div class="xinwen1a2">
						<h3><?php echo str_cut($v['title'],56,"…");?></h3>
						<p><?php echo str_cut($v['jianshu'],260,"…");?> <a href="<?php echo $v['url'];?>">查看全文&gt;&gt;</a></p>
					</div>
				</div>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
				<div class="xinwenaa">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9ed465f7eaf43a534e2700b0aa85301d&action=lists&catid=32&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'32','order'=>'listorder DESC','limit'=>'3',));}?> 
					<ul>
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
						<li>
							<a href="<?php echo $v['url'];?>">
								<h2><?php echo date("d",$v["inputtime"]);?><span><?php echo date("Y/m",$v["inputtime"]);?></span></h2>
								<h3><?php echo str_cut($v['title'],56,"…");?><span><?php echo str_cut($v['jianshu2'],240,"…");?></span></h3>
								<div class="clearfix"></div>
							</a>
						</li>
					<?php $n++;}unset($n); ?>
					</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
				</div>
				<div class="clearfix"></div>
				<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=32" class="xinwenaa1">查看更多&gt;&gt;</a>
				
			</div>
			</div>
			<div class="zeren">
			<div class="jianjie5a">
				<div class="biaot2">责任与关怀</div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=01c7571bec93ebab794bd94c3e4b7cf1&action=position&posid=38&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'38','order'=>'listorder DESC','limit'=>'6',));}?> 
			<div class="gongsi1" style="margin-bottom: 50px;">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
			<div class="gongsi1a">
				<a href="<?php echo $v['url'];?>" class="gongsi1b"><img src="<?php echo $v['thumb'];?>"></a>
				<a href="<?php echo $v['url'];?>" class="gongsi1c">
					<h2><?php echo date("Y-m-d",$v["inputtime"]);?></h2>
					<h3><?php echo $v['title'];?></h3>
					<h4><?php echo str_cut($v['jianshu'],460,"…");?></h4>
				</a>
				<div class="clearfix"></div>
			</div>	
			<?php $n++;}unset($n); ?> 		
		</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=33" class="gengduo2">查看更多&gt;&gt;</a>

</div>
</div>
<?php include template("content","footer"); ?>