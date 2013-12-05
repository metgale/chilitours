<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Travel', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __('Novo putovanje'); ?></legend>
			<?php
			echo $this->BootstrapForm->input('category_id', array(
				'label' => 'Kategorija',
				'required' => 'required'
					)
			);
			echo $this->BootstrapForm->input('name_hr', array(
				'required' => 'required',
				'label' => 'Naziv (hr)'
					)
			);
			echo $this->BootstrapForm->input('name_eng', array(
				'required' => 'required',
				'label' => 'Naziv (eng)'
					)
			);
			echo $this->BootstrapForm->input('service_hr', array(
				'required' => 'required',
				'label' => 'Vrsta usluge (hr)'
					)
			);
			echo $this->BootstrapForm->input('service_eng', array(
				'required' => 'required',
				'label' => 'Vrsta usluge (eng)'
					)
			);
			echo $this->BootstrapForm->input('transport_hr', array(
				'required' => 'required',
				'label' => 'Prijevoz (hr)'
					)
			);
			echo $this->BootstrapForm->input('transport_eng', array(
				'required' => 'required',
				'label' => 'Prijevoz (eng)'
					)
			);
			echo $this->BootstrapForm->input('accomodation', array(
				'options' => array('','1', '2', '3', '4', '5'),
				'required' => 'required',
				'label' => 'Kategorija smještaja'
					)
			);
			echo $this->BootstrapForm->input('program_hr', array(
				'allowEmpty' => true,
				'required' => 'required',
				'label' => 'Program putovanja (hr)'
					)
			);
			echo $this->BootstrapForm->input('program_eng', array(
				'allowEmpty' => true,
				'required' => 'required',
				'label' => 'Program putovanja (eng)'
					)
			);
			echo $this->BootstrapForm->input('featured', array(
				'required' => 'required',
				'label' => 'Istaknuto putovanje'
					)
			);
			?>
			<?php echo $this->BootstrapForm->submit(__('Dodaj'), array('class' => 'btn btn-primary')); ?>
		</fieldset>
			<?php echo $this->BootstrapForm->end(); ?>
	</div>

</div>