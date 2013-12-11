<div class="row-fluid">
	<div class="span9">
		<span class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				Sortiraj
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li><?php echo $this->Paginator->sort('title', 'Prema naslovu'); ?></li>
				<li><?php echo $this->Paginator->sort('modified', 'Posljednje uređivani'); ?></li>
				<li><?php echo $this->Paginator->sort('created', 'Posljednje kreirani'); ?></li>
			</ul>
		</span>

		<table class="table table-hover>"
			   <tr>
				<th><?php echo $this->BootstrapPaginator->sort('title', 'Naslov'); ?></th>

				<th class="actions"><?php echo __(''); ?></th>
			</tr>
			<?php foreach ($blogs as $blog): ?>
				<tr>	
					<td><?php echo h($blog['Blog']['title']); ?>&nbsp;</td>

					<td class="actions">
						<?php echo $this->Html->link(__('Uređivanje'), array('action' => 'edit', $blog['Blog']['id']), array('class' => 'btn btn-warning btn-small')); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
</div>