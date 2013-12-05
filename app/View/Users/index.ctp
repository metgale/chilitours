<div class="row-fluid">
	<div class="span9">
		<table class="table table-hover>"
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('username', 'Korisničko ime');?></th>

				<th class="actions"><?php echo __('');?></th>
			</tr>
		<?php foreach ($users as $user): ?>
			<tr>	
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>

				<td class="actions">
					<?php echo $this->Html->link(__('Uređivanje'), array('action' => 'edit', $user['User']['id']), array('class'=>'btn btn-warning btn-small')); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
</div>