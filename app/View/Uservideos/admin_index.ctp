<div class="uservideos index">
	<h2><?php echo __('Uservideos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('video'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($uservideos as $uservideo): ?>
	<tr>
		<td><?php echo h($uservideo['Uservideo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($uservideo['User']['name'], array('controller' => 'users', 'action' => 'view', $uservideo['User']['id'])); ?>
		</td>
		<td><?php echo h($uservideo['Uservideo']['video']); ?>&nbsp;</td>
		<td><?php echo h($uservideo['Uservideo']['status']); ?>&nbsp;</td>
		<td><?php echo h($uservideo['Uservideo']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $uservideo['Uservideo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $uservideo['Uservideo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $uservideo['Uservideo']['id']), array(), __('Are you sure you want to delete # %s?', $uservideo['Uservideo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Uservideo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
