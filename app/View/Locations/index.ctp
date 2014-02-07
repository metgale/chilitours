<div class="row-fluid">
	<div class="span9">
		<table class="table table-hover>"
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('title', 'Naziv');?></th>

				<th class="actions"><?php echo __('');?></th>
			</tr>
		<?php foreach ($locations as $location): ?>
			<tr>	
				<td><?php echo h($location['Location']['title']); ?>&nbsp;</td>

				<td class="actions">
					<?php echo $this->Html->link(__('Uređivanje'), array('action' => 'edit', $location['Location']['id']), array('class'=>'btn btn-warning btn-small')); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
</div>