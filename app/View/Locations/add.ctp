<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Location', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Location')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('title', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Locations')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Accomodations')), array('controller' => 'accomodations', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Accomodation')), array('controller' => 'accomodations', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>