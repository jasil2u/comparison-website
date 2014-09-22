<div class="mobileDetails index">
	<h2><?php echo __('Mobile Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_brand_id'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('color'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $a=0; 
	 foreach ($mobileDetails as $mobileDetail): $a++; ?>
	<tr>
	<td><?php echo $a; ?>&nbsp;</td>
		<td>
			<?php echo h($mobileDetail['MobileBrand']['brand']); ?>&nbsp;</td>
		<td><?php echo h($mobileDetail['MobileDetail']['model']); ?>&nbsp;</td>
		<td><?php echo h($mobileDetail['MobileDetail']['color']); ?>&nbsp;</td>
		<td><?php echo h($mobileDetail['MobileDetail']['price']); ?>&nbsp;</td>
		<td><?php echo h($mobileDetail['MobileDetail']['image']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mobileDetail['MobileDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mobileDetail['MobileDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mobileDetail['MobileDetail']['id']), array(), __('Are you sure you want to delete # %s?', $mobileDetail['MobileDetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('action' => 'add')); ?></li>
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
