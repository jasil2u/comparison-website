<div class="mobileBrands view">
<h2><?php echo __('Mobile Brand'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mobileBrand['MobileBrand']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($mobileBrand['MobileBrand']['brand']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mobile Brand'), array('action' => 'edit', $mobileBrand['MobileBrand']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mobile Brand'), array('action' => 'delete', $mobileBrand['MobileBrand']['id']), array(), __('Are you sure you want to delete # %s?', $mobileBrand['MobileBrand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Brands'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Brand'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Details'), array('controller' => 'store_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Detail'), array('controller' => 'store_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mobile Details'); ?></h3>
	<?php if (!empty($mobileBrand['MobileDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mobile Brand Id'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mobileBrand['MobileDetail'] as $mobileDetail): ?>
		<tr>
			<td><?php echo $mobileDetail['id']; ?></td>
			<td><?php echo $mobileDetail['mobile_brand_id']; ?></td>
			<td><?php echo $mobileDetail['model']; ?></td>
			<td><?php echo $mobileDetail['color']; ?></td>
			<td><?php echo $mobileDetail['price']; ?></td>
			<td><?php echo $mobileDetail['image']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mobile_details', 'action' => 'view', $mobileDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mobile_details', 'action' => 'edit', $mobileDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mobile_details', 'action' => 'delete', $mobileDetail['id']), array(), __('Are you sure you want to delete # %s?', $mobileDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Store Details'); ?></h3>
	<?php if (!empty($mobileBrand['StoreDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mobile Brand Id'); ?></th>
		<th><?php echo __('Mobile Detail Id'); ?></th>
		<th><?php echo __('Store Name'); ?></th>
		<th><?php echo __('Store Url'); ?></th>
		<th><?php echo __('Store Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mobileBrand['StoreDetail'] as $storeDetail): ?>
		<tr>
			<td><?php echo $storeDetail['id']; ?></td>
			<td><?php echo $storeDetail['mobile_brand_id']; ?></td>
			<td><?php echo $storeDetail['mobile_detail_id']; ?></td>
			<td><?php echo $storeDetail['store_name']; ?></td>
			<td><?php echo $storeDetail['store_url']; ?></td>
			<td><?php echo $storeDetail['store_price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'store_details', 'action' => 'view', $storeDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'store_details', 'action' => 'edit', $storeDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'store_details', 'action' => 'delete', $storeDetail['id']), array(), __('Are you sure you want to delete # %s?', $storeDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Store Detail'), array('controller' => 'store_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
