<div class="videos view">
<h2><?php echo __('Video'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($video['Video']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($video['Category']['name'], array('controller' => 'categories', 'action' => 'view', $video['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($video['Video']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($video['Video']['file']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($video['Video']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($video['Video']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($video['Video']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Video'), array('action' => 'edit', $video['Video']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Video'), array('action' => 'delete', $video['Video']['id']), array(), __('Are you sure you want to delete # %s?', $video['Video']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Videofiles'), array('controller' => 'videofiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Videofile'), array('controller' => 'videofiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Videofiles'); ?></h3>
	<?php if (!empty($video['Videofile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Video Id'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($video['Videofile'] as $videofile): ?>
		<tr>
			<td><?php echo $videofile['id']; ?></td>
			<td><?php echo $videofile['video_id']; ?></td>
			<td><?php echo $videofile['file']; ?></td>
			<td><?php echo $videofile['type']; ?></td>
			<td><?php echo $videofile['created']; ?></td>
			<td><?php echo $videofile['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'videofiles', 'action' => 'view', $videofile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'videofiles', 'action' => 'edit', $videofile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'videofiles', 'action' => 'delete', $videofile['id']), array(), __('Are you sure you want to delete # %s?', $videofile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Videofile'), array('controller' => 'videofiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
