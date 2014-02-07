<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Location', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Nova %s', __('Lokacija')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('title', array(
					'required' => 'required',
					)
				);
				?>
			<?php echo $this->BootstrapForm->submit(__('Dodaj'), array('class' => 'btn btn-primary')); ?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	
</div>