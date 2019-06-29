<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header_b"); ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2da006847b41acc26f4a08fc58b034a1&action=position&posid=51&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'51','order'=>'listorder DESC','limit'=>'20',));}?> 
	<div class="banner">
		<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
			<img src="<?php echo $val['thumb'];?>">
		<?php $n++;}unset($n); ?> 
	</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
	<script>
	var q=$(".banner img").length
	var w=0
	$(".banner img").hide()
	$(".banner img").eq(0).show()
	var r=setInterval(function(){
		if(w<q-1)
		{w=w+1}
		else{w=0}
		$(".banner img").hide()
		$(".banner img").eq(w).show()
	},3000)
	</script>
<div class="clearfix"></div>
	<div class="content">

		<div class="content4">
			<div class="biaot">
				<h2>人才理念</h2>

				<div class="clearfix"></div>
			</div>
			<div class="jianjie">
				
				<p style="color:#333333;">
				       利德东方秉承“企业家文化”，通过一系列以人为本的举措，持续推进企业文化建设。鼓励员工大胆作为，勇于担当，敢于竞争，在实践中成长成才。在实现个人价值的同时，为企业创造财富，为客户提供优质产品。
				</p>
				<img src="<?php echo IMG_PATH;?>images2/a20.png">
			</div>
		</div>
		<div style="height: 10px;background-color:#f2f1ef;margin-top: 10px;"></div>	
		<div class="content4">
			<div class="biaot">
				<h2>人才政策</h2>

				<div class="clearfix"></div>
			</div>
			<div class="jianjie">
				
				<p style="color:#333333;">
				  建设一支人员精干、素质优良、结构合理的人才梯队，加强科技创新领军人才、骨干队伍建设；加强营销人员队伍建设；加强经营管理、专业技术、操作技能和国际化经营方面的人才队伍建设。
加快员工知识结构优化，提升员工文化素质和技能。提供培训学习交流机会；
畅通员工发展职业晋升通道。
天才我才必有用。竞聘机制常态化为员工发展创造机会；
增强员工的获得感，为人才提供有竞争力的薪酬福利制度，《人才集合计划》为员工提供购房购车的贴息借款；《企业年金实施细则》满足员工长远福利保障；《补贴医疗保险计划》减轻员工压力，并为员工子女承担医疗保障计划；股权激励让员工的奋斗更有动力，有效地激发员工主动性和创造力。
				</p>

			</div>
		</div>
		<div style="height: 10px;background-color:#f2f1ef;margin-top: 10px;"></div>	
		
		<div class="content4">
			<div class="biaot">
				<h2>人才需求</h2>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ba96870c01b487efef007e7fd4204ca&action=lists&catid=%24catid&order=listorder+DESC&num=1000\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>'1000',));}?> 
			<ul class="zhaopin">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
				<li>
					<a href="<?php echo str_replace('http://www.','http://m.',$v[url]);?>">
						<h2><?php echo $v['mingcheng'];?><span><?php echo $v['xinzi'];?></span></h2>
						<h3><?php echo $v['didian'];?><span><?php echo date("Y-m-d",$v['inputtime']);?></span></h3>
					</a>
				</li>
			<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
		</div>
		
	</div>
<?php include template("content_m","footer"); ?>


