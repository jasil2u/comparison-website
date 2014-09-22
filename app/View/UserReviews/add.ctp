<div class="userReviews form">
<?php echo $this->Form->create('UserReview'); ?>
	<fieldset>
		<legend><?php echo __('Add User Review'); ?></legend>
	<?php
		echo $this->Form->input('customer_id',array('options'=>array(''=>'Select',$listcustomers)));
		echo $this->Form->input('mobile_detail_id',array('options'=>array(''=>'Select',$listmodels)));
		echo $this->Form->input('rating');
		echo $this->Form->input('review');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List User Reviews'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
