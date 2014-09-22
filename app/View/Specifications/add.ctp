<div class="specifications form">
<?php echo $this->Form->create('Specification'); ?>
	<fieldset>
		<legend><?php echo __('Add Specification'); ?></legend>
	<?php
	echo $this->Form->input('mobile_brand_id',array('options'=>array(''=>'Select',$listbrands)));
		echo $this->Form->input('model',array('options'=>array(''=>'Select',$listmodel)));
		echo $this->Form->input('color');
		echo $this->Form->input('price');
		echo $this->Form->input('Upload.fileName',array('type'=>'file','label'=>false,'div'=>false));
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
		<li><?php echo $this->Html->link(__('List Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
