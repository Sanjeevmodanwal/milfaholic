<div class="uservideos view">
<h2><?php echo __('Uservideo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uservideo['Uservideo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($uservideo['User']['name'], array('controller' => 'users', 'action' => 'view', $uservideo['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Video'); ?></dt>
		<dd>
			<?php echo h($uservideo['Uservideo']['video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($uservideo['Uservideo']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($uservideo['Uservideo']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uservideo'), array('action' => 'edit', $uservideo['Uservideo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Uservideo'), array('action' => 'delete', $uservideo['Uservideo']['id']), array(), __('Are you sure you want to delete # %s?', $uservideo['Uservideo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uservideos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uservideo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
