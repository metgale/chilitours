<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Category', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __('Dodaj kategoriju'); ?></legend>
			<?php
			echo $this->BootstrapForm->input('name_hr', array(
				'label' => 'Naziv (hr)',
				'required' => 'required',
				)
			);
			echo $this->BootstrapForm->input('name_eng', array(
				'label' => 'Naziv (eng)'
				)
			);
                        echo $this->BootstrapForm->input('priority', array(
				'label' => 'Prioritet'
				)
			);
			?>
			<?php echo $this->BootstrapForm->submit(__('Dodaj'), array('class' => 'btn btn-primary')); ?>
		</fieldset>
		<?php echo $this->BootstrapForm->end(); ?>
	</div>
</div>