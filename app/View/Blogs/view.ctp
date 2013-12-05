<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Blog');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($blog['Blog']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($blog['User']['id'], array('controller' => 'users', 'action' => 'view', $blog['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Title'); ?></dt>
			<dd>
				<?php echo h($blog['Blog']['title']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Content'); ?></dt>
			<dd>
				<?php echo h($blog['Blog']['content']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($blog['Blog']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modiifed'); ?></dt>
			<dd>
				<?php echo h($blog['Blog']['modiifed']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Blog')), array('action' => 'edit', $blog['Blog']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Blog')), array('action' => 'delete', $blog['Blog']['id']), null, __('Are you sure you want to delete # %s?', $blog['Blog']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Blogs')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Blog')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

