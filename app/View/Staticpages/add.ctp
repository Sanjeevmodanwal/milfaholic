<div class="staticpages form">
<?php echo $this->Form->create('Staticpage'); ?>
	<fieldset>
		<legend><?php echo __('Add Staticpage'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('position');
		echo $this->Form->input('title');
		echo $this->Form->input('image');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Staticpages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
