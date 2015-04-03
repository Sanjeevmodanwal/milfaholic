<div class="useralbums form">
<?php echo $this->Form->create('Useralbum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Useralbum'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Useralbum.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Useralbum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Useralbums'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Useralbumimages'), array('controller' => 'useralbumimages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Useralbumimage'), array('controller' => 'useralbumimages', 'action' => 'add')); ?> </li>
	</ul>
</div>
