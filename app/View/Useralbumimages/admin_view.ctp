<div class="useralbumimages view">
<h2><?php echo __('Useralbumimage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($useralbumimage['Useralbumimage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Useralbum'); ?></dt>
		<dd>
			<?php echo $this->Html->link($useralbumimage['Useralbum']['name'], array('controller' => 'useralbums', 'action' => 'view', $useralbumimage['Useralbum']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($useralbumimage['Useralbumimage']['file']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($useralbumimage['Useralbumimage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($useralbumimage['Useralbumimage']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Useralbumimage'), array('action' => 'edit', $useralbumimage['Useralbumimage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Useralbumimage'), array('action' => 'delete', $useralbumimage['Useralbumimage']['id']), array(), __('Are you sure you want to delete # %s?', $useralbumimage['Useralbumimage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Useralbumimages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Useralbumimage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Useralbums'), array('controller' => 'useralbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Useralbum'), array('controller' => 'useralbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
