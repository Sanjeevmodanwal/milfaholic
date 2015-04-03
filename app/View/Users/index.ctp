<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('plan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_no'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('race'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('body_type'); ?></th>
			<th><?php echo $this->Paginator->sort('hair_color'); ?></th>
			<th><?php echo $this->Paginator->sort('eye_color'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('marital_status'); ?></th>
			<th><?php echo $this->Paginator->sort('smoking'); ?></th>
			<th><?php echo $this->Paginator->sort('drinking'); ?></th>
			<th><?php echo $this->Paginator->sort('speaks'); ?></th>
			<th><?php echo $this->Paginator->sort('religion'); ?></th>
			<th><?php echo $this->Paginator->sort('education'); ?></th>
			<th><?php echo $this->Paginator->sort('annual_income'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_gender'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_for'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_distance'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_age'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_height'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_Weight'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_body_type'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_smoking'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_drinking'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_religion'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_education'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_annual_income'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_age_min'); ?></th>
			<th><?php echo $this->Paginator->sort('seeking_age_max'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th><?php echo $this->Paginator->sort('current_location'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Plan']['name'], array('controller' => 'plans', 'action' => 'view', $user['Plan']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['image']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['country']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_no']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['gender']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['race']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['height']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['weight']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['body_type']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['hair_color']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['eye_color']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['age']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['marital_status']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['smoking']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['drinking']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['speaks']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['religion']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['education']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['annual_income']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_gender']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_for']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_distance']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_age']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_height']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_Weight']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_body_type']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_smoking']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_drinking']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_religion']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_education']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_annual_income']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_age_min']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['seeking_age_max']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['status']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ip']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['current_location']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
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
