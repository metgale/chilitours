<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Location');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($location['Location']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Title'); ?></dt>
			<dd>
				<?php echo h($location['Location']['title']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Location')), array('action' => 'edit', $location['Location']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Location')), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Locations')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Location')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Accomodations')), array('controller' => 'accomodations', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Accomodation')), array('controller' => 'accomodations', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Accomodations')); ?></h3>
	<?php if (!empty($location['Accomodation'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Title Hr'); ?></th>
				<th><?php echo __('Title Eng'); ?></th>
				<th><?php echo __('Description Hr'); ?></th>
				<th><?php echo __('Description Eng'); ?></th>
				<th><?php echo __('Location Id'); ?></th>
				<th><?php echo __('Price'); ?></th>
				<th><?php echo __('Parking'); ?></th>
				<th><?php echo __('Bbq'); ?></th>
				<th><?php echo __('Tv'); ?></th>
				<th><?php echo __('Conditioned'); ?></th>
				<th><?php echo __('Dishwash'); ?></th>
				<th><?php echo __('Clotheswash'); ?></th>
				<th><?php echo __('Internet'); ?></th>
				<th><?php echo __('Seadistance'); ?></th>
				<th><?php echo __('Centerdistance'); ?></th>
				<th><?php echo __('Shopdistance'); ?></th>
				<th><?php echo __('Pet'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($location['Accomodation'] as $accomodation): ?>
			<tr>
				<td><?php echo $accomodation['id'];?></td>
				<td><?php echo $accomodation['title_hr'];?></td>
				<td><?php echo $accomodation['title_eng'];?></td>
				<td><?php echo $accomodation['description_hr'];?></td>
				<td><?php echo $accomodation['description_eng'];?></td>
				<td><?php echo $accomodation['location_id'];?></td>
				<td><?php echo $accomodation['price'];?></td>
				<td><?php echo $accomodation['parking'];?></td>
				<td><?php echo $accomodation['bbq'];?></td>
				<td><?php echo $accomodation['tv'];?></td>
				<td><?php echo $accomodation['conditioned'];?></td>
				<td><?php echo $accomodation['dishwash'];?></td>
				<td><?php echo $accomodation['clotheswash'];?></td>
				<td><?php echo $accomodation['internet'];?></td>
				<td><?php echo $accomodation['seadistance'];?></td>
				<td><?php echo $accomodation['centerdistance'];?></td>
				<td><?php echo $accomodation['shopdistance'];?></td>
				<td><?php echo $accomodation['pet'];?></td>
				<td><?php echo $accomodation['created'];?></td>
				<td><?php echo $accomodation['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'accomodations', 'action' => 'view', $accomodation['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'accomodations', 'action' => 'edit', $accomodation['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accomodations', 'action' => 'delete', $accomodation['id']), null, __('Are you sure you want to delete # %s?', $accomodation['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Accomodation')), array('controller' => 'accomodations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
