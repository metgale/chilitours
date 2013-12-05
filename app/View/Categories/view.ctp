<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Category');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($category['Category']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name Hr'); ?></dt>
			<dd>
				<?php echo h($category['Category']['name_hr']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name Eng'); ?></dt>
			<dd>
				<?php echo h($category['Category']['name_eng']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Category')), array('action' => 'edit', $category['Category']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Category')), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Travels')), array('controller' => 'travels', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Travel')), array('controller' => 'travels', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Travels')); ?></h3>
	<?php if (!empty($category['Travel'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Category Id'); ?></th>
				<th><?php echo __('Name Hr'); ?></th>
				<th><?php echo __('Name Eng'); ?></th>
				<th><?php echo __('Service Hr'); ?></th>
				<th><?php echo __('Service Eng'); ?></th>
				<th><?php echo __('Transport Hr'); ?></th>
				<th><?php echo __('Transport Eng'); ?></th>
				<th><?php echo __('Program Hr'); ?></th>
				<th><?php echo __('Program Eng'); ?></th>
				<th><?php echo __('Featured'); ?></th>
				<th><?php echo __('Accomodation'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($category['Travel'] as $travel): ?>
			<tr>
				<td><?php echo $travel['id'];?></td>
				<td><?php echo $travel['category_id'];?></td>
				<td><?php echo $travel['name_hr'];?></td>
				<td><?php echo $travel['name_eng'];?></td>
				<td><?php echo $travel['service_hr'];?></td>
				<td><?php echo $travel['service_eng'];?></td>
				<td><?php echo $travel['transport_hr'];?></td>
				<td><?php echo $travel['transport_eng'];?></td>
				<td><?php echo $travel['program_hr'];?></td>
				<td><?php echo $travel['program_eng'];?></td>
				<td><?php echo $travel['featured'];?></td>
				<td><?php echo $travel['accomodation'];?></td>
				<td><?php echo $travel['created'];?></td>
				<td><?php echo $travel['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'travels', 'action' => 'view', $travel['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'travels', 'action' => 'edit', $travel['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'travels', 'action' => 'delete', $travel['id']), null, __('Are you sure you want to delete # %s?', $travel['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Travel')), array('controller' => 'travels', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
