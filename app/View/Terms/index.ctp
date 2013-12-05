<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Terms'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('travel_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('startdate');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('enddate');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('price');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('town');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($terms as $term): ?>
			<tr>
				<td><?php echo h($term['Term']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($term['Travel']['id'], array('controller' => 'travels', 'action' => 'view', $term['Travel']['id'])); ?>
				</td>
				<td><?php echo h($term['Term']['startdate']); ?>&nbsp;</td>
				<td><?php echo h($term['Term']['enddate']); ?>&nbsp;</td>
				<td><?php echo h($term['Term']['price']); ?>&nbsp;</td>
				<td><?php echo h($term['Term']['town']); ?>&nbsp;</td>
				<td><?php echo h($term['Term']['created']); ?>&nbsp;</td>
				<td><?php echo h($term['Term']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $term['Term']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $term['Term']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $term['Term']['id']), null, __('Are you sure you want to delete # %s?', $term['Term']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Term')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Travels')), array('controller' => 'travels', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Travel')), array('controller' => 'travels', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>