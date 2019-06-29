<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
	
<?php include template("content_m","header_c"); ?>
	<div class="content">
		<div class="biaot">
				<h2><?php echo $title;?></h2>
				<div class="clearfix"></div>
		   </div>
		<div class="xiangqing" style="min-height: 500px;">
			
			
			
			<div class="jianjie">
				
				<p>
				<img src="<?php echo $thumb;?>">
				
				<?php echo $content;?>
      		   
      		   

				</p>
				
			</div>
		</div>
	
	</div>
<?php include template("content_m","footer"); ?>
	

