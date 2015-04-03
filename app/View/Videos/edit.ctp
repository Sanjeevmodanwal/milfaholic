<div class="videos form">
<?php echo $this->Form->create('Video'); ?>
	<fieldset>
		<legend><?php echo __('Edit Video'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('file');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Video.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Video.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Videos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Videofiles'), array('controller' => 'videofiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Videofile'), array('controller' => 'videofiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
