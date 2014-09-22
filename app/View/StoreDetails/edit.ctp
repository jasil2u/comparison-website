<div class="storeDetails form">
<?php echo $this->Form->create('StoreDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Store Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mobile_brand_id',array('value'=>$storedetail['StoreDetail']['mobile_brand_id'],'options'=>array(''=>'Select',$listbrands)));
		echo $this->Form->input('mobile_detail_id',array('value'=>$storedetail['StoreDetail']['mobile_detail_id'],'options'=>array(''=>'Select',$listmodels)));
		echo $this->Form->input('store_name',array('value'=>$storedetail['StoreDetail']['store_name']));
		echo $this->Form->input('store_url',array('value'=>$storedetail['StoreDetail']['store_url']));
		echo $this->Form->input('store_price',array('value'=>$storedetail['StoreDetail']['store_price']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StoreDetail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('StoreDetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Store Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobile Brands'), array('controller' => 'mobile_brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Brand'), array('controller' => 'mobile_brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
