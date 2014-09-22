<div class="storeDetails form">
<?php echo $this->Form->create('StoreDetail'); ?>
	<fieldset>
		<legend><?php echo __('Add Store Detail'); ?></legend>
	<?php
		echo $this->Form->input('mobile_brand_id',array('options'=>array(''=>'Select',$listbrands)));
		echo $this->Form->input('mobile_detail_id',array('options'=>array(''=>'Select',$listmodels)));
		echo $this->Form->input('store_name');
		echo $this->Form->input('store_url');
		echo $this->Form->input('store_price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Store Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobile Brands'), array('controller' => 'mobile_brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Brand'), array('controller' => 'mobile_brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
