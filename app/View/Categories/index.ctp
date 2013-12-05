<div class="row-fluid">
	<div class="span9">
		<table class="table table-hover>"
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('name_hr', 'Naziv');?></th>

				<th class="actions"><?php echo __('');?></th>
			</tr>
		<?php foreach ($categories as $category): ?>
			<tr>	
				<td><?php echo h($category['Category']['name_hr']); ?>&nbsp;</td>

				<td class="actions">
					<?php echo $this->Html->link(__('Uređivanje'), array('action' => 'edit', $category['Category']['id']), array('class'=>'btn btn-warning btn-small')); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
</div>