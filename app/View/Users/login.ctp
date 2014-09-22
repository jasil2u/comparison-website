<?php echo $this->Html->css('style');?>
<div id="header">
		<?php echo $this->Html->image('loginbestprice.jpg',array('width'=>'900')); ?>
	</div>
<div class="insert">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Login'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
<?php echo $this->Form->end(__('Submit')); ?>
<?php echo $this->Html->link(__('Signup'), array('action' => 'add')); ?>
</fieldset>
</div>