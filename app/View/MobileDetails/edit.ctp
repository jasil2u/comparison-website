<div class="mobileDetails form">

<?php echo $this->Form->create('MobileDetail',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Mobile Detail'); ?></legend>
	<?php
	    echo $this->Form->input('mobile_brand_id',array('value'=>$mobiledetail['MobileDetail']['mobile_brand_id'],'options'=>array(''=>'Select',$brandlist)));
		echo $this->Form->input('model',array('value'=>$mobiledetail['MobileDetail']['model']));
		echo $this->Form->input('color',array('value'=>$mobiledetail['MobileDetail']['color']));
		echo $this->Form->input('price',array('value'=>$mobiledetail['MobileDetail']['price']));
		echo $this->Form->input('Upload.fileName',array('type'=>'file','label'=>false,'div'=>false));
		echo $this->Form->input('primary_camera',array('value'=>$mobiledetail['Specification']['primary_camera']));
		echo $this->Form->input('secondary_camera',array('value'=>$mobiledetail['Specification']['secondary_camera']));
		echo $this->Form->input('os',array('value'=>$mobiledetail['Specification']['primary_camera']));
		echo $this->Form->input('screen',array('value'=>$mobiledetail['Specification']['os']));
		echo $this->Form->input('internal_memory',array('value'=>$mobiledetail['Specification']['internal_memory']));
		echo $this->Form->input('expandable_memory',array('value'=>$mobiledetail['Specification']['expandable_memory']));
		echo $this->Form->input('processor',array('value'=>$mobiledetail['Specification']['processor']));
		echo $this->Form->input('resolution',array('value'=>$mobiledetail['Specification']['resolution']));
		echo $this->Form->input('flash',array('value'=>$mobiledetail['Specification']['flash']));
		echo $this->Form->input('talk_time',array('value'=>$mobiledetail['Specification']['talk_time']));
		//echo $this->Form->hidden('specfication_id',array('value'=>$specifications['Specification']['id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MobileDetail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MobileDetail.id'))); ?></li>
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
