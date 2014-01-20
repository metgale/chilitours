<div class="row-fluid">
    <div class="span9">
        <?php echo $this->BootstrapForm->create('Accomodation', array('class' => 'form-horizontal')); ?>
        <fieldset>
            <legend>Novi smještaj</legend>
            <?php
            echo $this->BootstrapForm->input('title_hr', array(
                'label' => 'Naziv (hrv)',
                'required' => 'required'
            ));
            echo $this->BootstrapForm->input('title_eng', array(
                'label' => 'Naziv (eng)',
                'required' => 'required'
            ));
            echo $this->BootstrapForm->input('description_hr', array(
                'label' => 'Opis smještaja (hr)',
            ));
            echo $this->BootstrapForm->input('description_eng', array(
                'label' => 'Opis smještaja (eng)',
            ));
            echo $this->BootstrapForm->input('location_id', array(
                'label' => 'Lokacija',
            ));
            echo $this->BootstrapForm->input('price', array(
                'label' => 'Cijena',
            ));
            echo $this->BootstrapForm->input('parking', array(
                'label' => 'Parking',
            ));
            echo $this->BootstrapForm->input('bbq', array(
                'label' => 'Roštilj',
            ));
            echo $this->BootstrapForm->input('tv', array(
                'label' => 'TV',
            ));
            echo $this->BootstrapForm->input('conditioned', array(
                'label' => 'Klimatizirano',
            ));
            echo $this->BootstrapForm->input('dishwash', array(
                'label' => 'Perilica suđa',
            ));
            echo $this->BootstrapForm->input('clotheswash', array(
                'label' => 'Perilica rublja',
            ));
            echo $this->BootstrapForm->input('internet', array(
                'label' => 'Internet',
            ));
            echo $this->BootstrapForm->input('seadistance', array(
                'label' => 'Udaljenost od mora',
            ));
            echo $this->BootstrapForm->input('centerdistance', array(
                'label' => 'Udaljenost od centra',
            ));
            echo $this->BootstrapForm->input('shopdistance', array(
                'label' => 'Udaljenost od dućana',
            ));
            echo $this->BootstrapForm->input('pet', array(
                'label' => 'Kućni ljubimci',
            ));
            
            echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'Image'));
			echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Accomodation'));
			echo $this->Form->input('Image.0.headphoto', array('label' => 'Naslovna', 'type' => 'checkbox'));
			echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => 'Image'));
			echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Accomodation'));
			echo $this->Form->input('Image.1.headphoto', array('label' => 'Naslovna', 'type' => 'checkbox'));
			echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => 'Image'));
			echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Accomodation'));
			echo $this->Form->input('Image.2.headphoto', array('label' => 'Naslovna', 'type' => 'checkbox'));
			echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => 'Image'));
			echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Accomodation'));
			echo $this->Form->input('Image.3.headphoto', array('label' => 'Naslovna', 'type' => 'checkbox'));
			echo $this->Form->input('Image.4.attachment', array('type' => 'file', 'label' => 'Image'));
			echo $this->Form->input('Image.4.model', array('type' => 'hidden', 'value' => 'Accomodation'));
			echo $this->Form->input('Image.4.headphoto', array('label' => 'Naslovna', 'type' => 'checkbox'));
            ?>
            <?php echo $this->BootstrapForm->submit(__('Dodaj'), array('class' => 'btn btn-primary')); ?>
        </fieldset>
        <?php echo $this->BootstrapForm->end(); ?>
    </div>
</div>