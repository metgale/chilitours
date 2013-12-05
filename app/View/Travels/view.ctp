<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Travel');?></h2>
		<dl>
			
			<dt><?php echo __('Category'); ?></dt>
			<dd>
				<?php echo $this->Html->link($travel['Category']['name_hr'], array('controller' => 'categories', 'action' => 'view', $travel['Category']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name Hr'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['name_hr']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name Eng'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['name_eng']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Service Hr'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['service_hr']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Service Eng'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['service_eng']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Transport Hr'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['transport_hr']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Transport Eng'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['transport_eng']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Program Hr'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['program_hr']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Program Eng'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['program_eng']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Featured'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['featured']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Accomodation'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['accomodation']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($travel['Travel']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Travel')), array('action' => 'edit', $travel['Travel']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Travel')), array('action' => 'delete', $travel['Travel']['id']), null, __('Are you sure you want to delete # %s?', $travel['Travel']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Travels')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Travel')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('controller' => 'categories', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Terms')), array('controller' => 'terms', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Term')), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Terms')); ?></h3>
	<?php if (!empty($travel['Term'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Travel Id'); ?></th>
				<th><?php echo __('Startdate'); ?></th>
				<th><?php echo __('Enddate'); ?></th>
				<th><?php echo __('Price'); ?></th>
				<th><?php echo __('Town'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($travel['Term'] as $term): ?>
			<tr>
				<td><?php echo $term['id'];?></td>
				<td><?php echo $term['travel_id'];?></td>
				<td><?php echo $term['startdate'];?></td>
				<td><?php echo $term['enddate'];?></td>
				<td><?php echo $term['price'];?></td>
				<td><?php echo $term['town'];?></td>
				<td><?php echo $term['created'];?></td>
				<td><?php echo $term['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'terms', 'action' => 'view', $term['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'terms', 'action' => 'edit', $term['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'terms', 'action' => 'delete', $term['id']), null, __('Are you sure you want to delete # %s?', $term['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	
</div>
