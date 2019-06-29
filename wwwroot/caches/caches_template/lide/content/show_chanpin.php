<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_c"); ?>

		<div id="ban1">
	  <div class="banner">
      <ul class="img">
	  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2c30c22fc16eb2ef79fab712c5b9a4d9&action=position&posid=47&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'47','order'=>'listorder DESC','limit'=>'3',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <li><a> <img src="<?php echo $val['thumb'];?>" class="topim"></a></li>
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
	<div class="chanpinxq">
		<div class="biaot3">
			<div class="biaot3a">
			<h1><?php echo $CATEGORYS[$catid]['catname'];?></h1>
			<h2></h2>
			</div>
		</div>
		<div class="chanpinxq1">
			<h1><?php echo $title;?></h1>
			<div class="chanpinxq2">
				<img src="<?php echo $thumb;?>">
				<p><?php echo $content;?></p>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="tuijiancp">
			<div class="biaot4">
				推荐产品
			</div>
			<div class="tuijianbox">
				<div class="kmr_frbox">
				  <img class="kmr_frBtnL prev" src="<?php echo IMG_PATH;?>images/a22.png">
				  <div class="kmr_frUl">
				  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=73a27ef7d4591848eb8b38b19b72a82c&action=position&posid=28&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'28','order'=>'listorder DESC','limit'=>'20',));}?> 
					  <ul>
					   <?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
						   <li><a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['thumb'];?>"></a></li>
						<?php $n++;}unset($n); ?>
					  </ul>
				  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
				  </div>
  				  <img class="kmr_frBtnR next" src="<?php echo IMG_PATH;?>images/a23.png">
				</div>
				<script language="javascript">
				$(".kmr_frUl ul li img").hover(function(){$(this).css("border-color","#A0C0EB");},function(){$(this).css("border-color","#d8d8d8")});
				jQuery(".kmr_frbox").slide({titCell:"",mainCell:".kmr_frUl ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4});
				</script>
			</div>
		</div>
	</div>
	
</div>
<?php include template("content","footer"); ?>
