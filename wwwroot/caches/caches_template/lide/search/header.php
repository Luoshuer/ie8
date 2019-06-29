<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php echo $SEO['site_title'];?><?php echo $search_q;?> - Powered by PHPCMS</title>

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>

<link href="<?php echo CSS_PATH;?>css/style.css" rel="stylesheet" media="screen" type="text/css" />

<link href="<?php echo CSS_PATH;?>css/ui.tabs.css" rel="stylesheet" media="screen" type="text/css" />

<link href="<?php echo CSS_PATH;?>css/slide.css"  media="screen" type="text/css" />

<link href="<?php echo CSS_PATH;?>css/rbq.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="head" style="height: 100px;">

  <div class="head_top"></div>

  <div style="background: #ffffff;border-bottom: 1px solid #c0aeaf;border-top: 1px solid #c0aeaf;width: 100%;height: 1px "></div>

  <div class="head_main" style="width: 1200px;margin:0 auto;"> <img src="<?php echo IMG_PATH;?>images/a1.png" title="" style="float: left;margin-top: 10px;height: 60px;" style="float: left;">
	<div class="wrap sr_logo" style="margin-bottom: 10px; margin-top: 20px;float: left;margin-left: 100px;">
			<div class="l">
				<div class="sr_frm_box">
					<form name="search" type="get">
						<div class="sr_frmipt">
							<input type="hidden" name="m" value="search"/>
						   <input type="hidden" name="c" value="index"/>
						   <input type="hidden" name="a" value="init"/>
						   <input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
						   <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
							<input type="text" name="q" class="ipt" id="q" value="<?php echo $search_q;?>" style="width:340px;height: 34px;border-radius: 3px;outline:none;border-style:none;border:1px solid #cccccc;text-indent: 10px;">
							<input type="submit" class="ss_btn" value="搜 索" style="width:70px;height: 38px;">
						</div>
					</form>
					<div id="sr_infos" class="wrap sr_infoul"></div>
           </div>

         </div>
       </div>
       <a href="<?php echo siteurl($siteid);?>/" style="float: right;height: 38px;width:100px;background-color:#00aeff;border-radius: 3px;color:white;line-height: 38px;text-align: center;display: block;margin-top: 20px;">返回首页>></a>


   
                            
                    
                    
                    
                    

     </div>

  </div>

  <div style="clear: both"></div>

</div>