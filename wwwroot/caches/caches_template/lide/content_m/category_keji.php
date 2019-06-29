<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header_b"); ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2c4591aa1526f34e4db74496f12e3c6&action=position&posid=48&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'48','order'=>'listorder DESC','limit'=>'20',));}?> 
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
				<h2>科技研发</h2>
				<div class="clearfix"></div>
			</div>
			<div class="jianjie">
				
				<p style="color:#333333;">
				       研究院技术力量雄厚，拥有各类专业技术人员125人，专利35项，2016年申请专利16项，居国内同行业企业前列。院内试验设备齐全，具有自主研发能力。研究院由橡胶配方开发、产品设计、胶管材料研究、总成装配铆合研究、铁路产品研究、橡胶密封减震研究、新材料应用等部门组成。公司与北橡院、沈阳院、西北院等院企有长期战略合作, 还与意大利CF GOMMA、日本东海、日本十川、德国大陆公司、韩国LS公司、法国FLEXITECH公司、日本PULAENG公司等国外著名公司保持着长期技术合作关系。试验设备齐全，具有自主研发能力，公司研究院被评定为省级企业技术中心，目前正在申报国家级企业技术中心。<br>

				</p>

			</div>
		</div>
		<div style="height: 10px;background-color:#dcdcdc;margin-top: 10px;"></div>	
		<div class="content4">
			<div class="biaot">
				<h2>智能制造</h2>
			
				<div class="clearfix"></div>
			</div>
			<div class="jianjie">
				
				<p>公司智能工厂占地143亩，主要建筑单体包括研发指挥中心、检测中心、炼胶中心、制管中心、总装中心、智能立库、公用工程服务站等。项目建筑面积约85000平方米。
公司多条自动化装配生产线，导入多轴机器人、视觉设别等应用，已实现稳定的智能化无人值守生产，获得授权发明专利10余项，填补了行业内的空白。
生产车间与智能立库之间设有地下全自动输送线，形成了以数据总线系统居中调度，MES生产执行系统发起备料、呼料的要料请求，实现了物料全自动配送。
已建成工业以太网基础网络，用于制造设备互联；建设产品数据系统（PDM）、企业资源系统（ERP）、生产执行系统（MES）、能源管控系统（EMS）、自动立库系统（WMS）等智能制造工厂所必需的企业信息化系统集成平台。
公司智能工厂将以轻资产、重研发、智能化、零排放式建设，以成为环境友好型、制造智能化的示范工厂。


				</p>
				
			</div>
			<div class="jianjiey">
					<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=23"><img src="<?php echo IMG_PATH;?>images2/b1.png"></a>
					<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=24"><img src="<?php echo IMG_PATH;?>images2/b2.png"></a>
					<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=25"><img src="<?php echo IMG_PATH;?>images2/b3.png"></a>
					<div class="clearfix"></div>
				</div>
		</div>
		<div style="height: 10px;background-color:#dcdcdc;margin-top: 10px;"></div>	
		<div class="content4">
			<div class="biaot">
				<h2>检验检测</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=47">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fe57032e2cb55b3fb72f71fb1ad81f68&action=position&posid=53&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'53','order'=>'listorder DESC','limit'=>'3',));}?> 
			<div class="jianjie">

				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
					<li style="margin-bottom: 20px;"><img src="<?php echo $v['thumb'];?>" style="width:100%;display: block;"><h3 style="background-color: #989898;padding: 10px;font-size: 14px;color:white;"><?php echo $v['title'];?><span style="font-size: 12px;display: block;"><?php echo $v['description'];?></span></h3></li>
				<?php $n++;}unset($n); ?> 
		
				

			</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		<div style="height: 10px;background-color:#dcdcdc;margin-top: 10px;"></div>	
		<div class="content4">
			<div class="biaot">
				<h2>体系认证</h2>
				<a href="http://m.orlete.cn/index.php?m=content&c=index&a=lists&catid=28">更多&gt;&gt;</a>
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aedbeeb1fc1f8a26778bfa98e692a5b9&action=position&posid=30&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'30','order'=>'listorder DESC','limit'=>'20',));}?> 
			<div class="tixi">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
				<a>
					<img src="<?php echo $v['thumb'];?>">
					<p><?php echo $v['title'];?></p>
				</a>
			<?php $n++;}unset($n); ?> 
				<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		
	</div>

<?php include template("content_m","footer"); ?>

