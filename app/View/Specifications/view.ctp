<div class="specifications view">
<h2><?php echo __('Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo $this->Html->link($specification['MobileDetail']['model'], array('controller' => 'mobile_details', 'action' => 'view', $specification['MobileDetail']['model'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Camera'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['primary_camera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondary Camera'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['secondary_camera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Os'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['os']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Screen'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['screen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Internal Memory'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['internal_memory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expandable Memory'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['expandable_memory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Processor'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['processor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resolution'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['resolution']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flash'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['flash']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talk Time'); ?></dt>
		<dd>
			<?php echo h($specification['Specification']['talk_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Specification'), array('action' => 'edit', $specification['Specification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Specification'), array('action' => 'delete', $specification['Specification']['id']), array(), __('Are you sure you want to delete # %s?', $specification['Specification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Details'), array('controller' => 'mobile_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Detail'), array('controller' => 'mobile_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
