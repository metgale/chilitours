<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('User');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($user['User']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Username'); ?></dt>
			<dd>
				<?php echo h($user['User']['username']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Password'); ?></dt>
			<dd>
				<?php echo h($user['User']['password']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('User')), array('action' => 'edit', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('User')), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Blogs')), array('controller' => 'blogs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Blog')), array('controller' => 'blogs', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Blogs')); ?></h3>
	<?php if (!empty($user['Blog'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Content'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modiifed'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($user['Blog'] as $blog): ?>
			<tr>
				<td><?php echo $blog['id'];?></td>
				<td><?php echo $blog['user_id'];?></td>
				<td><?php echo $blog['title'];?></td>
				<td><?php echo $blog['content'];?></td>
				<td><?php echo $blog['created'];?></td>
				<td><?php echo $blog['modiifed'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'blogs', 'action' => 'view', $blog['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'blogs', 'action' => 'edit', $blog['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blogs', 'action' => 'delete', $blog['id']), null, __('Are you sure you want to delete # %s?', $blog['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Blog')), array('controller' => 'blogs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
