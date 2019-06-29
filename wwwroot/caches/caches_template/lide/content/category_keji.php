<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2c4591aa1526f34e4db74496f12e3c6&action=position&posid=48&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'48','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="content">
	<a name="p11"></a>
	<div class="keyan">
		<div class="keyanbox">
			<div class="biaot4">
				科技研发<span></span>
			</div>
			<div class="keyan1">
				<p>研究院技术力量雄厚，拥有各类专业技术人员125人，专利35项，2016年申请专利16项，居国内同行业企业前列。院内试验设备齐全，具有自主研发能力。研究院由橡胶配方开发、产品设计、胶管材料研究、总成装配铆合研究、铁路产品研究、橡胶密封减震研究、新材料应用等部门组成。公司与北橡院、沈阳院、西北院等院企有长期战略合作, 还与意大利CF GOMMA、日本东海、日本十川、德国大陆公司、韩国LS公司、法国FLEXITECH公司、日本PULAENG公司等国外著名公司保持着长期技术合作关系。试验设备齐全，具有自主研发能力，公司研究院被评定为省级企业技术中心，目前正在申报国家级企业技术中心。</p>
				<img src="<?php echo IMG_PATH;?>images/a33.png">
				<div class="clearfix"></div>
			</div>

		
		</div>
	</div>
	<a name="p22"></a>
	<div class="keyan" style="background-color:white;">
		<div class="keyanbox">
			<div class="biaot4">
				智能制造<span></span>
			</div>
			<div class="keyan1">
				<p>公司智能工厂占地143亩，主要建筑单体包括研发指挥中心、检测中心、炼胶中心、制管中心、总装中心、智能立库、公用工程服务站等。项目建筑面积约85000平方米。
公司多条自动化装配生产线，导入多轴机器人、视觉设别等应用，已实现稳定的智能化无人值守生产，获得授权发明专利10余项，填补了行业内的空白。
生产车间与智能立库之间设有地下全自动输送线，形成了以数据总线系统居中调度，MES生产执行系统发起备料、呼料的要料请求，实现了物料全自动配送。
已建成工业以太网基础网络，用于制造设备互联；建设产品数据系统（PDM）、企业资源系统（ERP）、生产执行系统（MES）、能源管控系统（EMS）、自动立库系统（WMS）等智能制造工厂所必需的企业信息化系统集成平台。
公司智能工厂将以轻资产、重研发、智能化、零排放式建设，以成为环境友好型、制造智能化的示范工厂。
</p>
				<img src="<?php echo IMG_PATH;?>images/a55.png">
				<div class="clearfix"></div>
			</div>
			<ul class="keyan3">
				<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=23"><img src="<?php echo IMG_PATH;?>images/a34.png"></a></li>
				<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=24"><img src="<?php echo IMG_PATH;?>images/a35.png"></a></li>
				<li style="margin-right: 0;"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=25"><img src="<?php echo IMG_PATH;?>images/a36.png"></a></li>
				<div class="clearfix"></div>
			</ul>
		
		</div>
	</div>
	<a name="p33"></a>
	<div class="keyan">
		<div class="keyanbox" style="width: 1280px;">
			<div class="biaot4">
				检验检测<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=47" style="display: block;float: right;font-size: 16px;color:#1d90c7">查看更多>></a>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fe57032e2cb55b3fb72f71fb1ad81f68&action=position&posid=53&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'53','order'=>'listorder DESC','limit'=>'3',));}?> 
			<ul class="keyan4">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
				<li><a><img src="<?php echo $v['thumb'];?>"><h3><?php echo $v['title'];?><span><?php echo $v['description'];?></span></h3></a></li>
			<?php $n++;}unset($n); ?> 
				<div class="clearfix"></div>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			
		</div>
	</div>
	<a name="p44"></a>
	<div class="tixi">
		<div class="biaot4">
			体系认证<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=28" style="display: block;float: right;font-size: 16px;color:#1d90c7">查看更多>></a>
		</div>
		<div class="tixi1">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8c830956b6db5671fb58057c04716802&action=position&posid=30&order=listorder+DESC&num=60\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'30','order'=>'listorder DESC','limit'=>'60',));}?> 
			<ul class="tixi2">
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
				<li>
					<a><img src="<?php echo $v['thumb'];?>"></a>
					<h2 style="text-align: center;font-size: 18px;color;#333333;margin-top: 10px;"><?php echo $v['title'];?></h2>
				</li>
				<?php $n++;}unset($n); ?> 
				<div class="clearfix"></div>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<div class="clearfix"></div>
		</div>
	</div>
	
</div>
<?php include template("content","footer"); ?>