<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('User', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Novi korisnik'); ?></legend>
				<?php
				echo $this->BootstrapForm->input('username', array(
					'label' => 'Korisničko ime',
					'required' => 'required')
				);
				echo $this->BootstrapForm->input('password', array(
					'label' => 'Zaporka',
					'required' => 'required')
				);
				?>
				<?php echo $this->BootstrapForm->submit(__('Dodaj'), array('class'=>'btn btn-primary'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
</div>