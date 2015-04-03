<div class="videofiles index">
	<h2><?php echo __('Videofiles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('video_id'); ?></th>
			<th><?php echo $this->Paginator->sort('file'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($videofiles as $videofile): ?>
	<tr>
		<td><?php echo h($videofile['Videofile']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($videofile['Video']['title'], array('controller' => 'videos', 'action' => 'view', $videofile['Video']['id'])); ?>
		</td>
		<td><?php echo h($videofile['Videofile']['file']); ?>&nbsp;</td>
		<td><?php echo h($videofile['Videofile']['type']); ?>&nbsp;</td>
		<td><?php echo h($videofile['Videofile']['created']); ?>&nbsp;</td>
		<td><?php echo h($videofile['Videofile']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $videofile['Videofile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $videofile['Videofile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $videofile['Videofile']['id']), array(), __('Are you sure you want to delete # %s?', $videofile['Videofile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Videofile'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Videos'), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
	</ul>
</div>
