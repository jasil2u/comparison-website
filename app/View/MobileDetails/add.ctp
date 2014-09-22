<div class="mobileDetails form">
<?php echo $this->Form->create('MobileDetail',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Mobile Detail'); ?></legend>
	<?php
		echo $this->Form->input('mobile_brand_id',array('options'=>array(''=>'Select',$listbrands)));
		echo $this->Form->input('model');
		echo $this->Form->input('color');
		echo $this->Form->input('price');
		//echo $this->Form->input('image');
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
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobile Brands'), array('controller' => 'mobile_brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Brand'), array('controller' => 'mobile_brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specifications'), array('controller' => 'specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specification'), array('controller' => 'specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Details'), array('controller' => 'store_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Detail'), array('controller' => 'store_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Reviews'), array('controller' => 'user_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'user_reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
