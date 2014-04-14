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
				'label' => 'Link'
					)
			);
                        echo $this->BootstrapForm->input('published', array(
				'label' => 'Objavi'
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
        <?php echo $this->Form->postLink(__('Izbriši blog post'), array('action' => 'delete', $this->Form->value('Blog.id')), null, __('Da li ste sigurni da želite izbrisati blog post', $this->Form->value('Blog.id'))); ?>
	</div>
</div>