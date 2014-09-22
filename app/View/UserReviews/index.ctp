<div class="userReviews index">
	<h2><?php echo __('User Reviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_detail_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('review'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $a=0;
	 foreach ($UserReview as $userReview): $a++ ?>
	<tr>
	<td><?php echo $a; ?>&nbsp;</td>
	<td>
			<?php echo $this->Html->link($userReview['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $userReview['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userReview['MobileDetail']['model'], array('controller' => 'mobile_details', 'action' => 'view', $userReview['MobileDetail']['model'])); ?>
		</td>
		<td><?php echo h($userReview['UserReview']['rating']); ?>&nbsp;</td>
		<td><?php echo h($userReview['UserReview']['review']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userReview['UserReview']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userReview['UserReview']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userReview['UserReview']['id']), array(), __('Are you sure you want to delete # %s?', $userReview['UserReview']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Review'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
