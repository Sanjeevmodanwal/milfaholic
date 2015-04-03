<div class="friendlists view">
<h2><?php echo __('Friendlist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($friendlist['Friendlist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($friendlist['User']['name'], array('controller' => 'users', 'action' => 'view', $friendlist['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friendid'); ?></dt>
		<dd>
			<?php echo h($friendlist['Friendlist']['friendid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($friendlist['Friendlist']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($friendlist['Friendlist']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Friendlist'), array('action' => 'edit', $friendlist['Friendlist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Friendlist'), array('action' => 'delete', $friendlist['Friendlist']['id']), array(), __('Are you sure you want to delete # %s?', $friendlist['Friendlist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Friendlists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Friendlist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
