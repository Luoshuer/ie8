<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_b"); ?>

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2da006847b41acc26f4a08fc58b034a1&action=position&posid=51&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'51','order'=>'listorder DESC','limit'=>'20',));}?> 

	  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> 
		  <img src="<?php echo $val['thumb'];?>" class="topim">
		 <?php $n++;}unset($n); ?> 

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="content">
	<div class="renli">
		<div class="jianjie2">
			<img src="<?php echo IMG_PATH;?>images/a43.png">
			<div class="jianjie2box">
				<div class="biaot2">人才理念</div>
				<p style="font-size: 18px;line-height: 36px;">利德东方秉承“企业家文化”，通过一系列以人为本的举措，持续推进企业文化建设。鼓励员工大胆作为，勇于担当，敢于竞争，在实践中成长成才。在实现个人价值的同时，为企业创造财富，为客户提供优质产品。</p>

			</div>
			<div class="clearfix"></div>
		</div>
		<div class="jianjie3" style="background-image: url(<?php echo IMG_PATH;?>images/a44.png)">
			<div class="biaot2">人才政策</div>
			<p style="font-size: 18px;line-height: 36px;">
            建设一支人员精干、素质优良、结构合理的人才梯队，加强科技创新领军人才、骨干队伍建设；加强营销人员队伍建设；加强经营管理、专业技术、操作技能和国际化经营方面的人才队伍建设。
加快员工知识结构优化，提升员工文化素质和技能。提供培训学习交流机会；
畅通员工发展职业晋升通道。
天才我才必有用。竞聘机制常态化为员工发展创造机会；
增强员工的获得感，为人才提供有竞争力的薪酬福利制度，《人才集合计划》为员工提供购房购车的贴息借款；《企业年金实施细则》满足员工长远福利保障；《补贴医疗保险计划》减轻员工压力，并为员工子女承担医疗保障计划；股权激励让员工的奋斗更有动力，有效地激发员工主动性和创造力。
			</p>
		</div>
		<div class="xuqiu">
			<div class="biaot4">人才需求<span></span></div>
			<div class="xuqiu1">
				<ul class="xuqiu1a">
					<li style="margin-left: 100px;width:160px;text-align: left;">职位名称</li>
					<li style="width:160px;">学历</li>
					<li style="width:140px;">人数</li>
					<li style="width:180px;">岗位薪资</li>
					<li style="width:190px;">工作地点</li>
					<li style="width:200px;">发布时间</li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3f3684f2e8ee47232397d025df1a909f&action=lists&catid=%24catid&order=listorder+DESC&num=5&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>  
			<div class="xuqiu2">
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $v) { ?> 
				<a href="<?php echo $v['url'];?>" class="xuqiu22">
					<span style="margin-left: 100px;width:160px;text-align: left;"><?php echo $v['mingcheng'];?></span>
					<span style="width:160px;"><?php echo $v['xueli'];?></span>
					<span style="width:140px;"><?php echo $v['renshu'];?></span>
					<span style="width:180px;"><?php echo $v['xinzi'];?></span>
					<span style="width:190px;"><?php echo $v['didian'];?></span>
					<span style="width:200px;"><?php echo date("Y-m-d",$v['inputtime']);?></span>
					<div class="clearfix"></div>
				</a>
			<?php $n++;}unset($n); ?> 
			<div id="pages" class="pagess" style="float: right;margin-top: 40px;margin-right: 100px;"><?php echo $pages;?></div>
			<div class="clearfix"></div>
			</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<?php include template("content","footer"); ?>