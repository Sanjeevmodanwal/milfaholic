<div class="favorites view">
<h2><?php echo __('Favorite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($favorite['Favorite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($favorite['User']['name'], array('controller' => 'users', 'action' => 'view', $favorite['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friendid'); ?></dt>
		<dd>
			<?php echo h($favorite['Favorite']['friendid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($favorite['Favorite']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Favorite'), array('action' => 'edit', $favorite['Favorite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Favorite'), array('action' => 'delete', $favorite['Favorite']['id']), array(), __('Are you sure you want to delete # %s?', $favorite['Favorite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Favorites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorite'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
