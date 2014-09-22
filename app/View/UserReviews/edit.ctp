<div class="userReviews form">
<?php echo $this->Form->create('UserReview'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Review'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id',array('value'=>$userreview['UserReview']['customer_id'],'options'=>array(''=>'Select',$customerlist)));
		echo $this->Form->input('mobile_detail_id',array('value'=>$userreview['UserReview']['mobile_detail_id'], 'options'=>array(''=>'Select',$listmodels)));
		echo $this->Form->input('rating',array('value'=>$userreview['UserReview']['rating']));
		echo $this->Form->input('review',array('value'=>$userreview['UserReview']['review']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserReview.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UserReview.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Reviews'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
