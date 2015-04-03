<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plan_id');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		echo $this->Form->input('image');
		echo $this->Form->input('city');
		echo $this->Form->input('country');
		echo $this->Form->input('contact_no');
		echo $this->Form->input('gender');
		echo $this->Form->input('race');
		echo $this->Form->input('height');
		echo $this->Form->input('weight');
		echo $this->Form->input('body_type');
		echo $this->Form->input('hair_color');
		echo $this->Form->input('eye_color');
		echo $this->Form->input('age');
		echo $this->Form->input('marital_status');
		echo $this->Form->input('smoking');
		echo $this->Form->input('drinking');
		echo $this->Form->input('speaks');
		echo $this->Form->input('religion');
		echo $this->Form->input('education');
		echo $this->Form->input('annual_income');
		echo $this->Form->input('seeking_gender');
		echo $this->Form->input('seeking_for');
		echo $this->Form->input('seeking_distance');
		echo $this->Form->input('seeking_age');
		echo $this->Form->input('seeking_height');
		echo $this->Form->input('seeking_Weight');
		echo $this->Form->input('seeking_body_type');
		echo $this->Form->input('seeking_smoking');
		echo $this->Form->input('seeking_drinking');
		echo $this->Form->input('seeking_religion');
		echo $this->Form->input('seeking_education');
		echo $this->Form->input('seeking_annual_income');
		echo $this->Form->input('seeking_age_min');
		echo $this->Form->input('seeking_age_max');
		echo $this->Form->input('status');
		echo $this->Form->input('role');
		echo $this->Form->input('ip');
		echo $this->Form->input('current_location');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plans'), array('controller' => 'plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan'), array('controller' => 'plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Favorites'), array('controller' => 'favorites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorite'), array('controller' => 'favorites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Friendlists'), array('controller' => 'friendlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Friendlist'), array('controller' => 'friendlists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
