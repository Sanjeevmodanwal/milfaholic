<div class="videofiles view">
<h2><?php echo __('Videofile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($videofile['Videofile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Video'); ?></dt>
		<dd>
			<?php echo $this->Html->link($videofile['Video']['title'], array('controller' => 'videos', 'action' => 'view', $videofile['Video']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($videofile['Videofile']['file']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($videofile['Videofile']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($videofile['Videofile']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($videofile['Videofile']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Videofile'), array('action' => 'edit', $videofile['Videofile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Videofile'), array('action' => 'delete', $videofile['Videofile']['id']), array(), __('Are you sure you want to delete # %s?', $videofile['Videofile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Videofiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Videofile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos'), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
	</ul>
</div>
