<div class="row-fluid">
	<div class="span9">
	
		<table class="table table-hover>"
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('name_hr', 'Naziv putovanja');?></th>

				<th class="actions"><?php echo __('');?></th>
			</tr>
		<?php foreach ($travels as $travel): ?>
			<tr>	
				<td><?php echo h($travel['Travel']['name_hr']); ?>&nbsp;</td>

				<td class="actions">
					<?php echo $this->Html->link(__('Termini'), array('controller' => 'terms', 'action' => 'add', $travel['Travel']['id']), array('class'=>'btn btn-primary')); ?>
					<?php echo $this->Html->link(__('Uređivanje'), array('action' => 'edit', $travel['Travel']['id']), array('class'=>'btn btn-warning btn-small')); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
</div>