<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Category', array('class' => 'form-horizontal'));?>
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
				echo $this->BootstrapForm->hidden('id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Uredi'), array('class'=>'btn btn-primary'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
</div>