<div class="storeDetails view">
<h2><?php echo __('StoreDetail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storeDetail['StoreDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeDetail['MobileBrand']['brand'], array('controller' => 'mobile_brands', 'action' => 'view', $storeDetail['MobileBrand']['brand'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Model'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeDetail['MobileDetail']['model'], array('controller' => 'mobile_details', 'action' => 'view', $storeDetail['MobileDetail']['model'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store Name'); ?></dt>
		<dd>
			<?php echo h($storeDetail['StoreDetail']['store_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store Url'); ?></dt>
		<dd>
			<?php echo h($storeDetail['StoreDetail']['store_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store Price'); ?></dt>
		<dd>
			<?php echo h($storeDetail['StoreDetail']['store_price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Detail'), array('action' => 'edit', $storeDetail['StoreDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store Detail'), array('action' => 'delete', $storeDetail['StoreDetail']['id']), array(), __('Are you sure you want to delete # %s?', $storeDetail['StoreDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Brands'), array('controller' => 'mobile_brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Brand'), array('controller' => 'mobile_brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
