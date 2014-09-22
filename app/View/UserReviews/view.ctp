<div class="userReviews view">
<h2><?php echo __('User Review'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userReview['UserReview']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userReview['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $userReview['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Detail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userReview['MobileDetail']['model'], array('controller' => 'mobile_details', 'action' => 'view', $userReview['MobileDetail']['model'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($userReview['UserReview']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review'); ?></dt>
		<dd>
			<?php echo h($userReview['UserReview']['review']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Review'), array('action' => 'edit', $userReview['UserReview']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Review'), array('action' => 'delete', $userReview['UserReview']['id']), array(), __('Are you sure you want to delete # %s?', $userReview['UserReview']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Reviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Review'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
