<div class="useralbums view">
<h2><?php echo __('Useralbum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($useralbum['Useralbum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($useralbum['User']['name'], array('controller' => 'users', 'action' => 'view', $useralbum['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($useralbum['Useralbum']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($useralbum['Useralbum']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($useralbum['Useralbum']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Useralbum'), array('action' => 'edit', $useralbum['Useralbum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Useralbum'), array('action' => 'delete', $useralbum['Useralbum']['id']), array(), __('Are you sure you want to delete # %s?', $useralbum['Useralbum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Useralbums'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Useralbum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Useralbumimages'), array('controller' => 'useralbumimages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Useralbumimage'), array('controller' => 'useralbumimages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Useralbumimages'); ?></h3>
	<?php if (!empty($useralbum['Useralbumimage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Useralbum Id'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($useralbum['Useralbumimage'] as $useralbumimage): ?>
		<tr>
			<td><?php echo $useralbumimage['id']; ?></td>
			<td><?php echo $useralbumimage['useralbum_id']; ?></td>
			<td><?php echo $useralbumimage['file']; ?></td>
			<td><?php echo $useralbumimage['created']; ?></td>
			<td><?php echo $useralbumimage['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'useralbumimages', 'action' => 'view', $useralbumimage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'useralbumimages', 'action' => 'edit', $useralbumimage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'useralbumimages', 'action' => 'delete', $useralbumimage['id']), array(), __('Are you sure you want to delete # %s?', $useralbumimage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Useralbumimage'), array('controller' => 'useralbumimages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
