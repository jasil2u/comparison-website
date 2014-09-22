<div class="specifications form">
<?php echo $this->Form->create('Specification'); ?>
	<fieldset>
		<legend><?php echo __('Edit Specification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mobile_detail_id');
		echo $this->Form->input('primary_camera');
		echo $this->Form->input('secondary_camera');
		echo $this->Form->input('os');
		echo $this->Form->input('screen');
		echo $this->Form->input('internal_memory');
		echo $this->Form->input('expandable_memory');
		echo $this->Form->input('processor');
		echo $this->Form->input('resolution');
		echo $this->Form->input('flash');
		echo $this->Form->input('talk_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Specification.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Specification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
