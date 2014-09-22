<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customer['User']['id'], array('controller' => 'users', 'action' => 'view', $customer['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array(), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Reviews'), array('controller' => 'user_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'user_reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Reviews'); ?></h3>
	<?php if (!empty($customer['UserReview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Mobile Detail Id'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Review'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['UserReview'] as $userReview): ?>
		<tr>
			<td><?php echo $userReview['id']; ?></td>
			<td><?php echo $userReview['customer_id']; ?></td>
			<td><?php echo $userReview['mobile_detail_id']; ?></td>
			<td><?php echo $userReview['rating']; ?></td>
			<td><?php echo $userReview['review']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_reviews', 'action' => 'view', $userReview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_reviews', 'action' => 'edit', $userReview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_reviews', 'action' => 'delete', $userReview['id']), array(), __('Are you sure you want to delete # %s?', $userReview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'user_reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
