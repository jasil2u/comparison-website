<div class="mobileBrands form">
<?php echo $this->Form->create('MobileBrand'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mobile Brand'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('brand');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MobileBrand.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MobileBrand.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mobile Brands'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Details'), array('controller' => 'store_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Detail'), array('controller' => 'store_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
