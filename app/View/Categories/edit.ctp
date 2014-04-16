<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Category', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __('Uredi kategoriju'); ?></legend>
			<?php
			echo $this->BootstrapForm->input('name_hr', array(
				'required' => 'required',
					)
			);
			echo $this->BootstrapForm->input('name_eng', array(
				'required' => 'required',
					)
			);
                        echo $this->BootstrapForm->input('priority', array(
				'label' => 'Prioritet',
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
		<legend>Brisanje kategorije <small>(PAŽNJA. Klikom na tipku kategorija će se nepovratno izbrisati iz sustava)</small></legend>
		<?php echo $this->Form->postLink(__('Izbriši kategoriju'), array('action' => 'delete', $this->Form->value('Category.id')), null, __('Da li ste sigurni da želite izbrisati kategoriju', $this->Form->value('Category.id'))); ?>
	</div>
</div>