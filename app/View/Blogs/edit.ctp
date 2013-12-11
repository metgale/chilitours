<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Blog', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __('Uredi blog post'); ?></legend>
			<?php
			echo $this->BootstrapForm->input('title', array(
				'label' => 'Naslov',
				'required' => 'required'
					)
			);
			echo $this->BootstrapForm->input('content', array(
				'required' => 'required',
				'label' => 'Sadržaj'
					)
			);
			echo $this->BootstrapForm->hidden('id');
			?>
			<?php echo $this->BootstrapForm->submit(__('Uredi'), array('class' => 'btn btn-primary')); ?>
		</fieldset>
		<?php echo $this->BootstrapForm->end(); ?>
	</div>
	<div class="entry-delete">
		<legend>Brisanje blog posta <small>(PAŽNJA. Klikom na tipku blog post će se nepovratno izbrisati iz sustava)</small></legend>
		<?php echo $this->Html->link('Izbriši blog post', array('controller' => 'blogs', 'action' => 'delete', $id), array('class' => 'btn btn-danger')); ?>
	</div>
</div>