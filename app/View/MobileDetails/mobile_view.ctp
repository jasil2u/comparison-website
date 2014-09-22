<?php echo $this->Html->css('cake.generic.mobileview');?>
<style>

h2   {color:black;
	  background-color:lightgrey;
	  }
#header {
    background-color:white;
    color:white;
    text-align:center;
    padding:5px;
}
</style>
<?php
echo $this->Html->css('mobileview');
?>
<div id="header">
		<?php echo  $this->Html->link($this->Html->image('bestprice.jpg',array('width'=>'1200')),'/customers/customer_dashboard/'.$mobileDetail['Customer']['id'],array('escape' => false)); ?>
</div>
<?php 
			foreach($mobileDetail['StoreDetail'] as $store){
			 $storename[]=$store['store_name'];
			 $storeprice[]=$store['store_price'];
			 $storelink[]=$store['store_url'];
			}
			?>
<div>
<div class="mobileDetails view">
<h2><?php echo __('Mobile Detail'); ?></h2>
	<dl>
		
		<dt><?php echo __('Mobile Brand'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['MobileBrand']['brand']); ?>
			&nbsp;
		</dd>
		
		<dt ><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['MobileDetail']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['MobileDetail']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OS'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['Specification']['os']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Screen Size'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['Specification']['screen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Internal Memory'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['Specification']['internal_memory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expandable Memory'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['Specification']['expandable_memory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Processor'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['Specification']['processor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resolution'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['Specification']['resolution']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flash'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['Specification']['flash']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talk time'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['Specification']['talk_time']); ?>
			&nbsp;
		</dd>
	</dl>
	<br>
	<h2><?php echo __('Available Online Stores'); ?></h2>
	<dl>
		<?php 
			foreach($mobileDetail['StoreDetail'] as $store){
			echo '<dt>'.$this->Html->link($store['store_name'],$store['store_url'],array('escape' => false,'target'=>'_blank')).'</dt>';	
			echo '<dd> Rs. '.$store['store_price'];
			}
			?>
			</dd>
			&nbsp;
	</dl>
</div>
<div class="a11">
<?php
echo $this->Html->image($mobileDetail['MobileDetail']['image'],array('width'=>'180','height'=>'400'));?> 
<?php echo "<b>".'Best Price:'.min( $storeprice).'<br />' ; ?> 
</div>
</div>


