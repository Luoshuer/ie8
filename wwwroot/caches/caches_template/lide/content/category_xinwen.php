<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9480441a9464d7d73bdb1d3d7a04e4fb&action=position&posid=46&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'46','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="content">
	<div class="xinwen">
		<div class="xinwen1">
			<div class="jianjie5a">
				<div class="biaot2">公司动态</div>
			</div>
			<div class="xinwen1a">
			<div class="xinwen1ab">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=32597ca719382e2d71e2054974f2373f&action=position&posid=23&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'23','order'=>'listorder DESC','limit'=>'1',));}?> 
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
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=38a1a06699d3af38c68fb4d43a3e75cb&action=position&posid=24&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','order'=>'listorder DESC','limit'=>'3',));}?> 
					<ul>
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
						<li>
							<a href="<?php echo $v['url'];?>">
								<h2><?php echo date("d",$v["inputtime"]);?><span><?php echo date("Y/m",$v["inputtime"]);?></span></h2>
								<h3><?php echo str_cut($v['title'],56,"…");?><span><?php echo str_cut($v['jianshu'],220,"…");?></span></h3>
								<div class="clearfix"></div>
							</a>
						</li>
					<?php $n++;}unset($n); ?>
					</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
				</div>
				<div class="clearfix"></div>
				<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=19" class="xinwenaa1">查看更多&gt;&gt;</a>
				
			</div>
			</div>
		</div>
		
		<div class="gongsi" style="margin-top: 50px;">
			<div class="biaot4">
				行业动态
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ede87b8d6540855859966969c21af6b&action=position&posid=25&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','order'=>'listorder DESC','limit'=>'3',));}?> 
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
				<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=20" class="gengduo">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		<div class="shipin">
			<div class="jianjie5a">
				<div class="biaot2">视频动态</div>
			</div>
			<div class="k3dbox" style="height: 400px;">
				<div class="k3d">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b1e1e41e1fb510b92d7e5953b4970e79&action=position&posid=52&order=listorder+DESC&num=1000\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'52','order'=>'listorder DESC','limit'=>'1000',));}?> 
					<div class="k3d1">
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
						<a href="<?php echo $val['url'];?>" style="background-image:url(<?php echo $val['thumb'];?>);background-size:498px 300px;" ><h2><?php echo $val['title'];?></h2></a>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=71e9f84b7d64944ed3b81515492a75ac&action=position&posid=52&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'52','order'=>'listorder DESC','limit'=>'1',));}?>
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $u) { ?>
					<a href="<?php echo $u['url'];?>" style="background-image:url(<?php echo $u['thumb'];?>);background-size:498px 300px;" ><h2><?php echo $u['title'];?></h2></a> 
					<?php $n++;}unset($n); ?> 
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>					
						<div class="clearfix"></div>
					</div>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
				</div>
				<div class="k3e">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b1e1e41e1fb510b92d7e5953b4970e79&action=position&posid=52&order=listorder+DESC&num=1000\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'52','order'=>'listorder DESC','limit'=>'1000',));}?> 
					<div class="k3e1">
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
						<a href="<?php echo $val['url'];?>" style="background-image:url(<?php echo $val['thumb'];?>);background-size:382px 270px;" ><h2><?php echo $val['title'];?></h2></a>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=71e9f84b7d64944ed3b81515492a75ac&action=position&posid=52&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'52','order'=>'listorder DESC','limit'=>'1',));}?>
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $u) { ?>
					<a href="<?php echo $u['url'];?>" style="background-image:url(<?php echo $u['thumb'];?>);background-size:382px 270px;" ><h2><?php echo $u['title'];?></h2></a> 
					<?php $n++;}unset($n); ?> 
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
						<div class="clearfix"></div>
					</div>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<div class="k3eb"></div>
				</div>
			
				<div class="k3r">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b1e1e41e1fb510b92d7e5953b4970e79&action=position&posid=52&order=listorder+DESC&num=1000\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'52','order'=>'listorder DESC','limit'=>'1000',));}?> 
					<div class="k3r1">
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
						<a href="<?php echo $val['url'];?>" style="background-image:url(<?php echo $val['thumb'];?>);background-size:382px 270px;" ><h2><?php echo $val['title'];?></h2></a>
						<?php $n++;}unset($n); ?> 
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=71e9f84b7d64944ed3b81515492a75ac&action=position&posid=52&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'52','order'=>'listorder DESC','limit'=>'1',));}?>
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $u) { ?>
					<a href="<?php echo $u['url'];?>" style="background-image:url(<?php echo $u['thumb'];?>);background-size:382px 270px;" ><h2><?php echo $u['title'];?></h2></a> 
					<?php $n++;}unset($n); ?> 
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<div class="clearfix"></div>
						
					</div>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<div class="k3rb"></div>
				</div>
			</div>
			
			<script>
	var q=$(".k3d1 a").length
	$(".k3d1").width(498*q)
	var w=0
	setInterval(function(){
		if(w<q-1)
		{w=w+1}
		else{
			w=1
			$(".k3d1").css("left",0)
		}
		$(".k3d1").animate({left:-498*w},1000)
	},4000)
	
	var a=$(".k3e1 a").length
	$(".k3e1").width(382*a)
	var d=a-2
   var f=-382*d
   $(".k3e1").css("left",f)
	setInterval(function(){
		if(d<a-1)
		{d=d+1}
		else{
			d=1
			$(".k3e1").css("left",0)
		}
		$(".k3e1").animate({left:-382*d},1000)
	},4000)
	
	var z=$(".k3r1 a").length
	$(".k3r1").width(382*z)
	var x=1
   var c=-382*x
   $(".k3r1").css("left",c)
	setInterval(function(){
		if(x<z-1)
		{x=x+1}
		else{
			x=1
			$(".k3r1").css("left",0)
		}
		$(".k3r1").animate({left:-382*x},1000)
	},4000)
	
	
	
</script>

			<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=22" style="color:#0063af;font-size: 12px;display: block;width:940px;margin:0 auto;text-align: right;">更多&gt;&gt;</a>
		</div>
		
	</div>
</div>
<?php include template("content","footer"); ?>