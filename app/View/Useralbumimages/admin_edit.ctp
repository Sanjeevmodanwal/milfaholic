<div class="useralbumimages form">
<?php echo $this->Form->create('Useralbumimage'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Useralbumimage'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('useralbum_id');
		echo $this->Form->input('file');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Useralbumimage.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Useralbumimage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Useralbumimages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Useralbums'), array('controller' => 'useralbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Useralbum'), array('controller' => 'useralbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
