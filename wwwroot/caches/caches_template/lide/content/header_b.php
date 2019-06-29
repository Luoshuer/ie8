<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">

<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="Keywords" content="<?php echo $SEO['keyword'];?>" >
<meta name="Description" content="<?php echo $SEO['description'];?>" >
<link href="/favicon.ico" rel="shortcut icon">

<script src="<?php echo JS_PATH;?>js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>js/ss.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>css/style.css">
<script src="<?php echo JS_PATH;?>js/jquery-1.10.2.js"></script> 
<script src="<?php echo JS_PATH;?>js/gdlb.js"></script>
<script src="<?php echo JS_PATH;?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery.jslides.js"></script>






</head>

<body>
<div class="header">
	<div class="top">
		<img src="<?php echo IMG_PATH;?>images/a1.png" class="logo">
		<div class="top1">
			<img src="<?php echo IMG_PATH;?>images/a2.png" width="63px" height="63px">
			<p>业务咨询<br>
			<span>400-990-7425</span></p>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="nav">
	<div class="navbox">
		<ul>
			<li><a href="<?php echo siteurl($siteid);?>/">首页</a></li>
			<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=9">关于我们</a></li>
			<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=10">新闻动态</a></li>
			<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=23">产品中心</a></li>
			<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12">科技创新</a></li>
			<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13">党群园地</a></li>
			<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=14">社会责任</a></li>
			<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=15">人力资源</a></li>
			<div class="clearfix"></div>
		</ul>
		<div class="sousuo" style="margin-left: 15px;float: left;margin-top: 9px;">
		<div class="search">
    	<div class="tab" id="search" style="display: none;">
			<?php $j=0?>
			<?php $search_model = getcache('search_model_'.$siteid, 'search');?>
			<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
			<?php $j++;?>
				<a href="javascript:;" onclick="setmodel(<?php echo $v['typeid'];?>, $(this));" style="outline:medium none;" hidefocus="true" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a><?php if($j != count($search_model)) { ?><span> | </span><?php } ?>
			<?php $n++;}unset($n); ?>
			<?php unset($j);?>
		</div>

        <div class="bd">
            <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
				<input type="hidden" name="m" value="search"/>
				<input type="hidden" name="c" value="index"/>
				<input type="hidden" name="a" value="init"/>
				<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
				<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                <input type="text" class="text" name="q" id="q" style="height: 28px;float: left;outline: none;width:200px;border:none;">
						 <input type="submit" value="搜 索" class="button" style="border:2px solid #ffffff;background-color:#1d90c7;height: 30px;color:white;float: left;outline: none;">
            </form>
        </div>
    	</div>
    	</div>
		<div class="clearfix"></div>
	</div>
	</div>
	
	
</div>
