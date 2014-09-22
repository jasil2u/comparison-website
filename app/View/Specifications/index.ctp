<div class="specifications index">
	<h2><?php echo __('Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('primary_camera'); ?></th>
			<th><?php echo $this->Paginator->sort('secondary_camera'); ?></th>
			<th><?php echo $this->Paginator->sort('os'); ?></th>
			<th><?php echo $this->Paginator->sort('screen'); ?></th>
			<th><?php echo $this->Paginator->sort('internal_memory'); ?></th>
			<th><?php echo $this->Paginator->sort('expandable_memory'); ?></th>
			<th><?php echo $this->Paginator->sort('processor'); ?></th>
			<th><?php echo $this->Paginator->sort('resolution'); ?></th>
			<th><?php echo $this->Paginator->sort('flash'); ?></th>
			<th><?php echo $this->Paginator->sort('talk_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $a=0;
	 foreach ($specifications as $specification): $a++; ?>
	<tr>
	<td><?php echo $a; ?>&nbsp;</td>
	<td>
			<?php echo $this->Html->link($specification['MobileDetail']['model'], array('controller' => 'mobile_details', 'action' => 'view', $specification['MobileDetail']['model'])); ?>
		</td>
		<td><?php echo h($specification['Specification']['primary_camera']); ?>&nbsp;</td>
		<td><?php echo h($specification['Specification']['secondary_camera']); ?>&nbsp;</td>
		<td><?php echo h($specification['Specification']['os']); ?>&nbsp;</td>
		<td><?php echo h($specification['Specification']['screen']); ?>&nbsp;</td>
		<td><?php echo h($specification['Specification']['internal_memory']); ?>&nbsp;</td>
		<td><?php echo h($specification['Specification']['expandable_memory']); ?>&nbsp;</td>
		<td><?php echo h($specification['Specification']['processor']); ?>&nbsp;</td>
		<td><?php echo h($specification['Specification']['resolution']); ?>&nbsp;</td>
		<td><?php echo h($specification['Specification']['flash']); ?>&nbsp;</td>
		<td><?php echo h($specification['Specification']['talk_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $specification['Specification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $specification['Specification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $specification['Specification']['id']), array(), __('Are you sure you want to delete # %s?', $specification['Specification']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
