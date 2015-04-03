<div class="plans view">
<h2><?php echo __('Plan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plan'), array('action' => 'edit', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plan'), array('action' => 'delete', $plan['Plan']['id']), array(), __('Are you sure you want to delete # %s?', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($plan['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Plan Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Contact No'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Race'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Body Type'); ?></th>
		<th><?php echo __('Hair Color'); ?></th>
		<th><?php echo __('Eye Color'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Marital Status'); ?></th>
		<th><?php echo __('Smoking'); ?></th>
		<th><?php echo __('Drinking'); ?></th>
		<th><?php echo __('Speaks'); ?></th>
		<th><?php echo __('Religion'); ?></th>
		<th><?php echo __('Education'); ?></th>
		<th><?php echo __('Annual Income'); ?></th>
		<th><?php echo __('Seeking Gender'); ?></th>
		<th><?php echo __('Seeking For'); ?></th>
		<th><?php echo __('Seeking Distance'); ?></th>
		<th><?php echo __('Seeking Age'); ?></th>
		<th><?php echo __('Seeking Height'); ?></th>
		<th><?php echo __('Seeking Weight'); ?></th>
		<th><?php echo __('Seeking Body Type'); ?></th>
		<th><?php echo __('Seeking Smoking'); ?></th>
		<th><?php echo __('Seeking Drinking'); ?></th>
		<th><?php echo __('Seeking Religion'); ?></th>
		<th><?php echo __('Seeking Education'); ?></th>
		<th><?php echo __('Seeking Annual Income'); ?></th>
		<th><?php echo __('Seeking Age Min'); ?></th>
		<th><?php echo __('Seeking Age Max'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Ip'); ?></th>
		<th><?php echo __('Current Location'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($plan['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['plan_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['image']; ?></td>
			<td><?php echo $user['city']; ?></td>
			<td><?php echo $user['country']; ?></td>
			<td><?php echo $user['contact_no']; ?></td>
			<td><?php echo $user['gender']; ?></td>
			<td><?php echo $user['race']; ?></td>
			<td><?php echo $user['height']; ?></td>
			<td><?php echo $user['weight']; ?></td>
			<td><?php echo $user['body_type']; ?></td>
			<td><?php echo $user['hair_color']; ?></td>
			<td><?php echo $user['eye_color']; ?></td>
			<td><?php echo $user['age']; ?></td>
			<td><?php echo $user['marital_status']; ?></td>
			<td><?php echo $user['smoking']; ?></td>
			<td><?php echo $user['drinking']; ?></td>
			<td><?php echo $user['speaks']; ?></td>
			<td><?php echo $user['religion']; ?></td>
			<td><?php echo $user['education']; ?></td>
			<td><?php echo $user['annual_income']; ?></td>
			<td><?php echo $user['seeking_gender']; ?></td>
			<td><?php echo $user['seeking_for']; ?></td>
			<td><?php echo $user['seeking_distance']; ?></td>
			<td><?php echo $user['seeking_age']; ?></td>
			<td><?php echo $user['seeking_height']; ?></td>
			<td><?php echo $user['seeking_Weight']; ?></td>
			<td><?php echo $user['seeking_body_type']; ?></td>
			<td><?php echo $user['seeking_smoking']; ?></td>
			<td><?php echo $user['seeking_drinking']; ?></td>
			<td><?php echo $user['seeking_religion']; ?></td>
			<td><?php echo $user['seeking_education']; ?></td>
			<td><?php echo $user['seeking_annual_income']; ?></td>
			<td><?php echo $user['seeking_age_min']; ?></td>
			<td><?php echo $user['seeking_age_max']; ?></td>
			<td><?php echo $user['status']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td><?php echo $user['ip']; ?></td>
			<td><?php echo $user['current_location']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
