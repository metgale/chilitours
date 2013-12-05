<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('User', array('class' => 'form-horizontal'));?>
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
				<?php echo $this->BootstrapForm->submit(__('Uredi'), array('class'=>'btn btn-primary'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	
</div>