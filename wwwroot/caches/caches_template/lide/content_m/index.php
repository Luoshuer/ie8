<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header"); ?>
	<div class="nav">
		<div>
		<a href="http://m.orlete.cn/" style="margin-left: 0;"><img src="<?php echo IMG_PATH;?>images2/a2.png"></a>
		<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=9"><img src="<?php echo IMG_PATH;?>images2/a3.png"></a>
		<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=19"><img src="<?php echo IMG_PATH;?>images2/a4.png"></a>
		<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=23"><img src="<?php echo IMG_PATH;?>images2/a5.png"></a>
		<div class="clearfix"></div>
		</div>
		<div style="margin-top: 10px;">
		<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=12" style="margin-left: 0;"><img src="<?php echo IMG_PATH;?>images2/a6.png"></a>
		<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=13"><img src="<?php echo IMG_PATH;?>images2/a7.png"></a>
		<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=14"><img src="<?php echo IMG_PATH;?>images2/a8.png"></a>
		<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=15"><img src="<?php echo IMG_PATH;?>images2/a9.png"></a>
		<div class="clearfix"></div>
		</div>
	</div>
	<div style="height: 10px;background-color:#f2f1ef;margin-top: 10px;"></div>	
	<div class="content">
		<div class="content1">
			<div class="biaot">
				<h2>新闻动态</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=10">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=26fff2d1c2f267b50babb523297895ff&action=position&posid=20&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','limit'=>'1',));}?> 
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
			<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>" class="xinwen1">
				<img src="<?php echo $v['thumb'];?>">
				<h3><?php echo str_cut($v['title'],44,"…");?></h3>
			</a>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d28876a26005e6b4b311f1bf2ad9f168&action=position&posid=21&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder DESC','limit'=>'4',));}?>
			<ul class="xinwen2">
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<li>
					<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>">
						<img src="<?php echo $v['thumb'];?>">
						<h4><?php echo str_cut($v['title'],44,"…");?></h4>
						<h5><?php echo date("Y-m-d",$v["inputtime"]);?></h5>
						<h3 style="clear: both;"></h3>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
		</div>
		<div class="content2">
			<div class="biaot">
				<h2>产品中心</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=23">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<div class="chanpin">
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=23">
					<img src="<?php echo IMG_PATH;?>images2/a11.png">
				</a>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=24">
					<img src="<?php echo IMG_PATH;?>images2/a12.png">
				</a>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=25">
					<img src="<?php echo IMG_PATH;?>images2/a13.png">
				</a>
			</div>
		</div>
		<div style="height: 10px;background-color:#f2f1ef;margin-top: 10px;"></div>	
		<div class="content3">
			<div class="biaot">
				<h2>科技创新</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=12">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<div class="keji">
				<img src="<?php echo IMG_PATH;?>images2/a14.png">
				<img src="<?php echo IMG_PATH;?>images2/a15.png" style="margin-left: 6%;">
				<img src="<?php echo IMG_PATH;?>images2/a16.png" style="margin-top: 20px;">
				<img src="<?php echo IMG_PATH;?>images2/a17.png" style="margin-left: 6%;margin-top: 20px;">
				<div class="clearfix"></div>
			</div>
			
		</div>
		<div style="height: 10px;background-color:#f2f1ef;margin-top: 10px;"></div>	
		<div class="content4">
			<div class="biaot">
				<h2>公司简介</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=9">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<div class="jianjie">
				<img src="<?php echo IMG_PATH;?>images2/a18.png">
				<p>
				南京利德东方橡塑科技有限公司创建于1949年5月16日。公司位于江苏省南京市六合经济开发区宁六路581号。<br>
				作为橡胶制品科技研发和智能、绿色制造的现代化企业，国家高新技术企业，江苏省工程技术研究中心，公司拥有专业的研发团队和通过CNAS认证的检测中心，主要产品为汽车管路、轨道交通类橡胶制品，及新能源、航空航天、海洋工程等新兴市场类橡胶制品。产品出口美国、日本和东南亚等国家和地区，“利德...
				</p>
			</div>
		</div>
		
	</div>
<?php include template("content_m","footer"); ?>
	
	
	
	
	
