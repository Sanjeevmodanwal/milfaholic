<div class="videofiles form">
<?php echo $this->Form->create('Videofile'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Videofile'); ?></legend>
	<?php
		echo $this->Form->input('video_id');
		echo $this->Form->input('file');
		echo $this->Form->input('type');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Videofiles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Videos'), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
	</ul>
</div>
