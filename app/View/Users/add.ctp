
<?php echo $this->Html->css('style');?>
<div id="header">
		<?php echo $this->Html->image('loginbestprice.jpg',array('width'=>'900')); ?>
	</div>
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>


