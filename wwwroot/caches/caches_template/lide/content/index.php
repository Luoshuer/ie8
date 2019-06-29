<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="content">
<div class="content1">
	<div class="content1box">
		<div class="biaot">新闻动态</div>
		<div class="dongtai">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=26fff2d1c2f267b50babb523297895ff&action=position&posid=20&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','limit'=>'1',));}?> 
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
			<a href="<?php echo $v['url'];?>" class="dongtai1" style="background-image: url(<?php echo $v['thumb'];?>);">
			<p ><?php echo str_cut($v['title'],44,"…");?><br>
       	 <span><?php echo str_cut($v['jianshu'],230,"…");?></span>
        </p>
			</a>
			<?php $n++;}unset($n); ?> 
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d28876a26005e6b4b311f1bf2ad9f168&action=position&posid=21&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder DESC','limit'=>'4',));}?> 
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
			<a href="<?php echo $v['url'];?>" class="dongtai2" style="background-image: url(<?php echo $v['thumb'];?>);">
				<p><?php echo str_cut($v['title'],40,"…");?><br>
       	 	<span><?php echo str_cut($v['jianshu'],120,"…");?></span>
       	 	</p>
			</a>
			<?php $n++;}unset($n); ?> 
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="content2">
	<div class="content2box">
		<div class="biaot">产品中心</div>
		<div class="chanpin">
			<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=23">
				<img src="<?php echo IMG_PATH;?>images/a7.png">
			</a>
			<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=24" style="margin-left: 42px;">
				<img src="<?php echo IMG_PATH;?>images/a8.png">
			</a>
			<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=25" style="margin-left: 42px;">
				<img src="<?php echo IMG_PATH;?>images/a9.png">
			</a>
			<div class="clearfix"></div>
		</div>
	</div>	
</div>
<div class="content1">
	<div class="content1box">
		<div class="biaot">科技与创新</div>
		<div class="keji">
			<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12#p11">
				<img src="<?php echo IMG_PATH;?>images/a10.png">
			</a>
			<a style="margin-left: 40px;" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12#p22">
				<img src="<?php echo IMG_PATH;?>images/a11.png">
			</a>
			<a style="margin-left: 40px;" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12#p33">
				<img src="<?php echo IMG_PATH;?>images/a12.png">
			</a>
			<a style="margin-left: 40px;" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12#p44">
				<img src="<?php echo IMG_PATH;?>images/a13.png">
			</a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="content2">
	<div class="content2box">
		<div class="biaot">关于我们</div>
		<div class="guanyu">
			<img src="<?php echo IMG_PATH;?>images/a14.png">
			<div class="guanyu1">
				<h2>南京利德东方橡塑科技有限公司</h2>
				<p>南京利德东方橡塑科技有限公司创建于1949年5月16日。公司位于江苏省南京市六合经济开发区宁六路581号。<br>
					作为橡胶制品科技研发和智能、绿色制造的现代化企业，国家高新技术企业，江苏省工程技术研究中心，公司拥有专业的研发团队和通过CNAS认证的检测中心，主要产品为汽车管路、轨道交通类橡胶制品，及新能源、航空航天、海洋工程等新兴市场类橡胶制品。产品出口美国、日本和东南亚等国家和地区，“利德...
				</p>
				<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=9">更多>></a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>
<?php include template("content","footer"); ?>
