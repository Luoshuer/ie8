<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('search', 'header'); ?>


<div class="clr sr_body sr_list" style="width:1200px;margin:0 auto;margin-top:20px;border:1px solid #ccc;padding-bottom: 40px;min-height: 500px;margin-bottom: 40px;">
	<div class="sr_main" style="margin-top: 40px;">
		
       <div class="brd1s"></div>
       <div class="wrap sr_lists">
				<div class="l">
					<div style="margin-left: 20px;width: 250px;float: left;">
						<span style="width: 250px;height: 40px;line-height: 40px;text-align: center;display: block;background-color:#02a9c7;color:white;font-size: 16px;letter-spacing:4px;margin-bottom: 5px">搜索类别</span>
                <ul class="lll2">
				<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
						<li style="text-align: center;border:1px solid #cccccc;line-height: 40px;"><a href="?m=search&c=index&a=init&typeid=<?php echo $v['typeid'];?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=<?php echo $time;?>" <?php if($v['typeid']==$typeid) { ?> class="abcc"<?php } ?> style="color:#999999;"><?php echo $v['name'];?></a>
						</li>
				<?php $n++;}unset($n); ?>
                </ul>
              </div>
					<div class="c wrap" style="width:870px;float: right;margin-right: 20px;">
						<div style="font-size: 14px;color:#666666;border-bottom: 1px solid #cccccc;padding-bottom: 6px;text-indent: 10px;">搜索结果</div>
						<ul class="wrap" style="width:850px;margin-left: 10px;margin-top: 10px;">
							<?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>
								<li>
									<a href="<?php echo $r['url'];?>" style="display: block;">
										<h3 style="float: left;color:#333333;"><?php echo $r['title'];?></h3>
										<h4 style="float: right;color:#999999;"><?php echo date("Y-m-d H:i:s",$r["inputtime"]);?></h4>
										<div style="clear: both"></div>
									</a>
								</li>
							<?php $n++;}unset($n); ?>
						</ul>
					</div>
				</div>
      </div>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_history.js"></script>
<?php if($setting['suggestenable']) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
<?php } ?>
<div style="clear: both"></div>
</div>
</div>
<?php include template("content","footer"); ?>
