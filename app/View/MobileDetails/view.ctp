<div class="mobileDetails view">
<h2><?php echo __('Mobile Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['MobileDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mobileDetail['MobileBrand']['id'], array('controller' => 'mobile_brands', 'action' => 'view', $mobileDetail['MobileBrand']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['MobileDetail']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['MobileDetail']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['MobileDetail']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($mobileDetail['MobileDetail']['image']); 
			echo $this->Html->image($mobileDetail['MobileDetail']['image']);?> 
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mobile Detail'), array('action' => 'edit', $mobileDetail['MobileDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mobile Detail'), array('action' => 'delete', $mobileDetail['MobileDetail']['id']), array(), __('Are you sure you want to delete # %s?', $mobileDetail['MobileDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('action' => 'add')); ?> </li>
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
