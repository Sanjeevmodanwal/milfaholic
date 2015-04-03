<div class="plans form">
<?php echo $this->Form->create('Plan'); ?>
	<fieldset>
		<legend><?php echo __('Add Plan'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('time');
		echo $this->Form->input('price');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Plans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
