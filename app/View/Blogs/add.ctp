<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Blog', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Novi blog post'); ?></legend>
				<?php
				echo $this->BootstrapForm->input('title', array(
					'required' => 'required',
					'label' => 'Naslov'
					)
				);
				echo $this->BootstrapForm->input('content', array(
					'required' => 'required',
					'label' => 'Sadržaj'
					)
				);
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'), array('class'=>'btn btn-primary'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
</div>