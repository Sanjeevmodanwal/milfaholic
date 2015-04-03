<div class="staticpages view">
<h2><?php echo __('Staticpage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($staticpage['Staticpage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($staticpage['User']['name'], array('controller' => 'users', 'action' => 'view', $staticpage['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($staticpage['Staticpage']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($staticpage['Staticpage']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($staticpage['Staticpage']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($staticpage['Staticpage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($staticpage['Staticpage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($staticpage['Staticpage']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Staticpage'), array('action' => 'edit', $staticpage['Staticpage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Staticpage'), array('action' => 'delete', $staticpage['Staticpage']['id']), array(), __('Are you sure you want to delete # %s?', $staticpage['Staticpage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Staticpages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staticpage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
