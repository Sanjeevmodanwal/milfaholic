<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Plan']['name'], array('controller' => 'plans', 'action' => 'view', $user['Plan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($user['User']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($user['User']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact No'); ?></dt>
		<dd>
			<?php echo h($user['User']['contact_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Race'); ?></dt>
		<dd>
			<?php echo h($user['User']['race']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($user['User']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($user['User']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body Type'); ?></dt>
		<dd>
			<?php echo h($user['User']['body_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hair Color'); ?></dt>
		<dd>
			<?php echo h($user['User']['hair_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eye Color'); ?></dt>
		<dd>
			<?php echo h($user['User']['eye_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($user['User']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marital Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['marital_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Smoking'); ?></dt>
		<dd>
			<?php echo h($user['User']['smoking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drinking'); ?></dt>
		<dd>
			<?php echo h($user['User']['drinking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Speaks'); ?></dt>
		<dd>
			<?php echo h($user['User']['speaks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religion'); ?></dt>
		<dd>
			<?php echo h($user['User']['religion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Education'); ?></dt>
		<dd>
			<?php echo h($user['User']['education']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Annual Income'); ?></dt>
		<dd>
			<?php echo h($user['User']['annual_income']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking For'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_for']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Distance'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_distance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Age'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Height'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Weight'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_Weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Body Type'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_body_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Smoking'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_smoking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Drinking'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_drinking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Religion'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_religion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Education'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_education']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Annual Income'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_annual_income']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Age Min'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_age_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seeking Age Max'); ?></dt>
		<dd>
			<?php echo h($user['User']['seeking_age_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($user['User']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Current Location'); ?></dt>
		<dd>
			<?php echo h($user['User']['current_location']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Favorites'); ?></h3>
	<?php if (!empty($user['Favorite'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Friendid'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Favorite'] as $favorite): ?>
		<tr>
			<td><?php echo $favorite['id']; ?></td>
			<td><?php echo $favorite['user_id']; ?></td>
			<td><?php echo $favorite['friendid']; ?></td>
			<td><?php echo $favorite['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'favorites', 'action' => 'view', $favorite['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'favorites', 'action' => 'edit', $favorite['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'favorites', 'action' => 'delete', $favorite['id']), array(), __('Are you sure you want to delete # %s?', $favorite['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Favorite'), array('controller' => 'favorites', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Friendlists'); ?></h3>
	<?php if (!empty($user['Friendlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Friendid'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Friendlist'] as $friendlist): ?>
		<tr>
			<td><?php echo $friendlist['id']; ?></td>
			<td><?php echo $friendlist['user_id']; ?></td>
			<td><?php echo $friendlist['friendid']; ?></td>
			<td><?php echo $friendlist['created']; ?></td>
			<td><?php echo $friendlist['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'friendlists', 'action' => 'view', $friendlist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'friendlists', 'action' => 'edit', $friendlist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'friendlists', 'action' => 'delete', $friendlist['id']), array(), __('Are you sure you want to delete # %s?', $friendlist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Friendlist'), array('controller' => 'friendlists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Messages'); ?></h3>
	<?php if (!empty($user['Message'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Friendid'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Seen'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Message'] as $message): ?>
		<tr>
			<td><?php echo $message['id']; ?></td>
			<td><?php echo $message['user_id']; ?></td>
			<td><?php echo $message['friendid']; ?></td>
			<td><?php echo $message['message']; ?></td>
			<td><?php echo $message['created']; ?></td>
			<td><?php echo $message['seen']; ?></td>
			<td><?php echo $message['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'messages', 'action' => 'view', $message['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'messages', 'action' => 'edit', $message['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'messages', 'action' => 'delete', $message['id']), array(), __('Are you sure you want to delete # %s?', $message['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
