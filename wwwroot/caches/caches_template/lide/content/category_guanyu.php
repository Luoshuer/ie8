<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_c"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5280f71db37dc0fbfbb9b112e6240b2b&action=position&posid=45&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'45','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="content">
	<div class="jianjie">
		<div class="jianjie1">
			<div class="xian"></div>
			<ul>
				<li>
					<a href="#p1">公司简介</a>
				</li>
				<li>
					<a href="#p2">组织架构</a>
				</li>
				<li>
					<a href="#p3">资质荣誉</a>
				</li>
				<li>
					<a href="#p4">联系我们</a>
				</li>
				<div class="clearfix"></div>
			</ul>
			<div class="xian"></div>
			<div class="clearfix"></div>
		</div>
		<a name="p1"></a>
		<div class="jianjie2">
			<img src="<?php echo IMG_PATH;?>images/a14.png">
			<div class="jianjie2box">
				<div class="biaot2">公司简介</div>
				<p> 南京利德东方橡塑科技有限公司创建于1949年5月16日。公司位于江苏省南京市六合经济开发区宁六路581号。
作为橡胶制品科技研发和智能、绿色制造的现代化企业，国家高新技术企业，江苏省工程技术研究中心，公司拥有专业的研发团队和通过CNAS认证的检测中心，主要产品为汽车管路、轨道交通类橡胶制品，及新能源、航空航天、海洋工程等新兴市场类橡胶制品。产品出口美国、日本和东南亚等国家和地区，“利德东方”、“ORLETE”
   和“7425”品牌在行业内具有极高的知名度和美誉度。
公司以“科技引领未来，创新驱动发展”为发展战略， “三优”、“四满意”为发展定位，努力成为国内一流、国际先进的橡胶制品研发中心。</p>
				
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="jianjie3">
			<div class="biaot2">发展历程</div>
			<p>1949年5月16日，中国人民解放军在南京成立“华东军区后勤部运输部415厂”。<br>

1965年7月，更名为“中国人民解放军第七四二五工厂”。<br>

1981年2月，工厂成为国家第一批军工转民用的企业，以生产橡胶软管、油封等为主。<br>

2001年3月，工厂由中国人民解放军南京军区装备部划转中国蓝星化学清洗总公司，隶属中车集团，更名为“中车集团南京七四二五工厂”。<br>

2008年1月，工厂随中国化工集团公司业务整合隶属中国化工橡胶总公司。<br>

2011年9月，工厂改制，成立“南京七四二五橡塑有限责任公司”。<br>

2015年1月，公司完成混合所有制改革投入运营。<br>

2016年3月，为适应市场需求和战略发展需要，公司更名为“南京利德东方橡塑科技有限公司”。<br>

2018年2月，金浦投资控股集团有限公司完成中国化工橡胶有限公司持有公司51%股权的收购。<br>

</p>
		
		</div>
		<div class="jianjie2" style="margin-top: 70px;">
			<img src="<?php echo IMG_PATH;?>images/a17.png">
			<div class="jianjie2box">
				<div class="biaot2">企业文化</div>
				<p>诚信。诚信是一名员工，一个企业，都必须具有的优良品质。诚信，它应该是员工的为人之道、立身处
					事之本，是企业的发展之魂。一个人若不讲信用，在社会上就无立足之地。在社会交往中，只有言而有
					信，人与人之间才能无私相助。一级组织、一名领导，只有取信于民，才能赢得广大群众的支持。在市
					场经济活动中，一个企业，一个单位，只有信守合约讲究诚信，才能有无限的生命力。利德东方公司多
					年来讲求诚信，赢得了客户普遍的认可。今后要更好地发展，每一名员工都应该发扬诚信美德，公司也
					应一如既往地在与客户交往中信守诺言言行一致诚实不欺，这样，利德东方公司就一定会长盛不衰，赢
					得更加辉煌的明天。</p>
		
			</div>
			<div class="clearfix"></div>
		</div>
		<a name="p2"></a>
		<div class="jianjie5">
			<div class="jianjie5a">
				<div class="biaot2">组织架构</div>
			</div>
			<div class="jianjie5b">
				<img src="<?php echo IMG_PATH;?>images/a20.png">
			</div>
		</div>
		<a name="p3"></a>
		<div class="jianjie6">
			<div class="biaot4">
			资质荣誉<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=18" style="display: block;float: right;font-size: 16px;color:#1d90c7">查看更多>></a>
		</div>
			<div class="jianjie6b">
				<div class="mr_frbox">
				  <img class="mr_frBtnL prev" src="<?php echo IMG_PATH;?>images/a22.png">
				  <div class="mr_frUl">
				   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3b6c97a111e49db7d1cd37a6c5b17315&action=position&posid=22&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'listorder DESC','limit'=>'20',));}?> 
					  <ul>
					   <?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?>
						   <li><a><img src="<?php echo $v['thumb'];?>"></a></li>
						<?php $n++;}unset($n); ?> 
					  </ul>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
				  </div>
 			
  				  <img class="mr_frBtnR next" src="<?php echo IMG_PATH;?>images/a23.png">
				</div>
				<script language="javascript">
				$(".mr_frUl ul li img").hover(function(){$(this).css("border-color","#A0C0EB");},function(){$(this).css("border-color","#d8d8d8")});
				jQuery(".mr_frbox").slide({titCell:"",mainCell:".mr_frUl ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:3});
				</script>
			</div>
		</div>
		<a name="p4"></a>
		<div class="jianjie4">
			<div class="jianjie4box">
			<div class="biaot2">联系我们</div>
			<div class="jianjie4b">
				<div class="jianjie4c">
				<p>南京利德东方橡塑科技有限公司<br>

					售后服务：4009007425<br>
					业务咨询：4009907425<br>
					地 址：南京市六合经济开发区宁六路581号<br>
					邮 编：211500</p>
				<img src="<?php echo IMG_PATH;?>images/a19.png">
				
				<div class="clearfix"></div>
				</div>
			</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php include template("content","footer"); ?>