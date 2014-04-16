<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('User', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __('Izmjena korisnika'); ?></legend>
			<?php
			echo $this->BootstrapForm->input('username', array(
				'required' => 'required',
					)
			);
			echo $this->BootstrapForm->input('password', array(
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
		<legend>Brisanje korisnika <small>(PAŽNJA. Klikom na tipku korisnik će se nepovratno izbrisati iz sustava)</small></legend>
		<?php echo $this->Form->postLink(__('Izbriši korisnika'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Da li ste sigurni da želite izbrisati korisnika', $this->Form->value('User.id'))); ?>
	</div>

</div>