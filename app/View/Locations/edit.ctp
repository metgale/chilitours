<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Location', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __('Uredi lokaciju'); ?></legend>
			<?php
			echo $this->BootstrapForm->input('title', array(
				'required' => 'required',
					)
			);
			
			echo $this->BootstrapForm->hidden('id');
			?>
			<?php echo $this->BootstrapForm->submit(__('Uredi'), array('class' => 'btn btn-primary')); ?>
		</fieldset>
		<?php echo $this->BootstrapForm->end(); ?>
	</div>
	<div class="entry-delete">
		<legend>Brisanje lokacije <small>(PAŽNJA. Klikom na tipku lokacija će se nepovratno izbrisati iz sustava)</small></legend>
		<?php echo $this->Form->postLink(__('Izbriši lokaciju'), array('action' => 'delete', $this->Form->value('Location.id')), null, __('Da li ste sigurni da želite izbrisati lokaciju', $this->Form->value('Location.id'))); ?>
	</div>
</div>